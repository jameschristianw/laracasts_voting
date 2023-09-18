<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Idea extends Model {
    use HasFactory, Sluggable;

    const PAGINATION_COUNT = 10;

    protected $guarded = [];

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function votes() {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function getStatusClasses() {
        $allStatuses = [
            'Open' => 'bg-gray-200',
            'Considering' => 'bg-purple text-white',
            'In Progress' => 'bg-yellow text-white',
            'Implemented' => 'bg-blue text-white',
            'Closed' => 'bg-red text-white',
        ];

        return $allStatuses[$this->status->name];

        // switch ($this->name) {
        //     case 'Open':
        //         return 'bg-gray-200';

        //     case 'Considering':
        //         return 'bg-purple text-white';

        //     case 'In Progress':
        //         return 'bg-yellow text-white';

        //     case 'Implemented':
        //         return 'bg-blue text-white';

        //     case 'Closed':
        //         return 'bg-red text-white';

        //     default:
        //         return 'bg-gray-200';
        // }
    }

    public function isVotedByUser(?User $user) {
        if (!$user) {
            return false;
        }
        return Vote::where('user_id', $user->id)->where('idea_id', $this->id)->exists();
    }
}

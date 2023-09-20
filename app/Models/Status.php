<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model {
    use HasFactory;

    public function ideas() {
        return $this->hasMany(Idea::class);
    }

    // Replaced by classes in status database :(
    public function getStatusClasses() {
        $allStatuses = [
            'Open' => 'bg-gray-200',
            'Considering' => 'bg-purple text-white',
            'In Progress' => 'bg-yellow text-white',
            'Implemented' => 'bg-blue text-white',
            'Closed' => 'bg-red text-white',
        ];

        return $allStatuses[$this->name];

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

    public static function getCount() {
        return Idea::query()
            ->selectRaw("count(*) as all_statuses")
            ->selectRaw("count(case when status_id = 1 then 1 end) as open")
            ->selectRaw("count(case when status_id = 2 then 2 end) as considering")
            ->selectRaw("count(case when status_id = 3 then 3 end) as in_progress")
            ->selectRaw("count(case when status_id = 4 then 4 end) as implemented")
            ->selectRaw("count(case when status_id = 5 then 5 end) as closed")
            ->first()->toArray();
    }
}

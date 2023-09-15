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
}

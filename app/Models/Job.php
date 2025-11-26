<?php

namespace App\Models;

use Illuminate\Support\Arr;

// use Illuminate\Database\Eloquent\Model;

class Job
{
     public static function all(): array 
    {
        return [ 
            [
                'id' => 1,
                'title' => 'PHP Developer', 
                'salary' => '$100,000'
            ],
            [ 
                'id' => 2,
                'title' => 'Teacher', 
                'salary' => '$10,000'
            ],
            [ 
                'id' => 3,
                'title' => 'Doctor', 
                'salary' => '$120,000'
            ],
        ];
    }

    public static function find(int $id)
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }

}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // Completed
    // On Hold
    // Started

    public function run()
    {
        DB::table('task_statuses')->insert([
            'title' => 'Completed'
        ]);
        DB::table('task_statuses')->insert([
            'title' => 'On Hold'
        ]);
        DB::table('task_statuses')->insert([
            'title' => 'Started'
        ]);
    }
}



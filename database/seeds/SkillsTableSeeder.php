<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'slug' => 'beginner',
                'title' => 'Beginner',
                'description' => 'Ikuti tutorial dengan level dasar bersama IDStack'
            ],
            [
                'slug' => 'intermediate',
                'title' => 'Intermediate',
                'description' => 'Ikuti tutorial dengan level menengah bersama IDStack'
            ],
            [
                'slug' => 'advanced',
                'title' => 'Advanced',
                'description' => 'Ikuti tutorial dengan level mahir bersama IDStack'
            ]
        ];

        App\Models\Skill::insert($data);

    }
}

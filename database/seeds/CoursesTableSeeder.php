<?php

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = [
            'skill_id' => 1,
            'slug' => 'belajar-html-dan-css-untuk-pemula',
            'title' => 'Belajar HTML dan CSS untuk Pemula',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore at vero facilis impedit, eligendi ullam maiores eveniet alias, molestias doloremque incidunt repellat provident adipisci nulla, officia sapiente amet earum ea.',
            'image' => '',
            'runtime' => '',
            'price' => 0,
            'is_pro' => 0,
            'is_featured' => 0,
            'status' => 'draft',
            'meta_description' => '',
            'meta_keyword' => ''
        ];
        Course::create($course);
    }
}

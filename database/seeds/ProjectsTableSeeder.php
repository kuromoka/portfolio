<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'language_id' => '2',
                'name' => 'Portfolio',
                'image_name' => '',
                'description' => '',
                'site_url' => 'http://localhost/',
                'repository_url' => 'https://github.com/kuromoka/portfolio',
            ],
        ]);
    }
}

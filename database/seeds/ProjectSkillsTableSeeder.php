<?php

use Illuminate\Database\Seeder;

class ProjectSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_skills')->insert([
            [
                'project_id' => '1',
                'name' => 'Laravel',
            ],
            [
                'project_id' => '1',
                'name' => 'Vue.js',
            ],
            [
                'project_id' => '1',
                'name' => 'Vuetify',
            ],
            [
                'project_id' => '2',
                'name' => 'Composer',
            ],
            [
                'project_id' => '2',
                'name' => 'PHPUnit',
            ],
            [
                'project_id' => '3',
                'name' => 'React',
            ],
            [
                'project_id' => '3',
                'name' => 'Material-UI',
            ],
        ]);
    }
}

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
        DB::table('project_skills')->truncate();
        DB::table('project_skills')->insert([
            [
                'project_id' => '1',
                'name' => 'Laravel',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
            [
                'project_id' => '1',
                'name' => 'Vue.js',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
            [
                'project_id' => '1',
                'name' => 'Vuetify',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
            [
                'project_id' => '2',
                'name' => 'Composer',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
            [
                'project_id' => '2',
                'name' => 'PHPUnit',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
            [
                'project_id' => '3',
                'name' => 'React',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
            [
                'project_id' => '3',
                'name' => 'Material-UI',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
        ]);
    }
}

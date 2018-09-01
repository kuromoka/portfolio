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
                'description' => <<< EOF
This is this portfolio site.
EOF
,
                'site_url' => '/',
                'github_url' => 'https://github.com/kuromoka/portfolio',
            ],
            [
                'language_id' => '2',
                'name' => 'Cyger',
                'image_name' => '',
                'description' =>  <<< EOF
This is a composer package to get cryptocurrency price from various exchange APIs.
EOF
,
                'site_url' => 'https://packagist.org/packages/kuromoka/cyger',
                'github_url' => 'https://github.com/kuromoka/cyger',
            ],
            [
                'language_id' => '2',
                'name' => 'Youtube Clone',
                'image_name' => '',
                'description' => <<< EOF
I joined in <a href="https://chingu.io/" target="_blank">Ching</a> and built this YouTube clone site together with three remote team members.<br>
We were kept in touch by using Slack and GitHub in English.
EOF
,
                'site_url' => 'https://youtube-clone-site.herokuapp.com/',
                'github_url' => 'https://github.com/chingu-voyage6/Geckos-Team-27',
            ],
        ]);
    }
}
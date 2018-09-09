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
                'name' => 'Portfolio',
                'image_name' => 'portfolio.jpg',
                'description_ja' => '',
                'description_en' => <<< EOF
This is this portfolio site and adopted SPA.
EOF
,
                'site_url' => '/',
                'github_url' => 'https://github.com/kuromoka/portfolio',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
            [
                'name' => 'Cyger',
                'image_name' => 'cyger.jpg',
                'description_ja' => '',
                'description_en' =>  <<< EOF
This is a composer package to get cryptocurrency price from various exchange APIs.
EOF
,
                'site_url' => 'https://packagist.org/packages/kuromoka/cyger',
                'github_url' => 'https://github.com/kuromoka/cyger',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
            [
                'name' => 'Youtube Clone',
                'image_name' => 'youtube_clone.jpg',
                'description_ja' => '',
                'description_en' => <<< EOF
I joined in <a href="https://chingu.io/" target="_blank">Ching</a> and built this YouTube clone site together with remote team members.<br>
We were kept in touch by using Slack and GitHub in English.
EOF
,
                'site_url' => 'https://youtube-clone-site.herokuapp.com/',
                'github_url' => 'https://github.com/chingu-voyage6/Geckos-Team-27',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
            ],
        ]);
    }
}

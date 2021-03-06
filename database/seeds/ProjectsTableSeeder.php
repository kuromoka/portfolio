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
        DB::table('projects')->truncate();
        DB::table('projects')->insert([
            [
                'name' => 'Portfolio',
                'image_name' => 'portfolio.jpg',
                'description_ja' => <<< EOF
このポートフォリオサイトで、SPAを取り入れています。<br>
英語と日本語に対応しています。
EOF
,
                'description_en' => <<< EOF
This is this portfolio website and adopted SPA.<br>
Supporting English and Japanese.
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
                'description_ja' =>  <<< EOF
仮想通貨の価格を様々な取引所のAPIから取得することができる、Composerのパッケージです。
EOF
,
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
                'name' => 'YouTube Clone',
                'image_name' => 'youtube_clone.jpg',
                'description_ja' => <<< EOF
<a href="https://chingu.io/" target="_blank">Chingu</a> に参加してリモートのチームメンバーたちと一緒に作った、YouTubeのクローンサイトです。<br>
英語でSlackやGitHubで連絡を取り合っていました。
EOF
,
                'description_en' => <<< EOF
I joined in <a href="https://chingu.io/" target="_blank">Chingu</a> and built this YouTube clone site together with remote team members.<br>
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

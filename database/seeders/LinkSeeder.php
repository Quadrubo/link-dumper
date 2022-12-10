<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = Link::class;

        $fields = ['url'];

        $data = [
            [
                'title' => 'PhpStorm 2022.3 is released',
                'user_id' => User::where('email', 'admin@admin.admin')->firstOrFail()->id,
                'url' => 'https://laravel-news.com/phpstorm-2022-3',
                'website' => 'Laravel News',
                'author' => 'Paul Redmond',
                'posted_at' => Carbon::make('2022-12-08'),
                'tags' => '["ide", "php", "phpstorm"]',
            ],
            [
                'title' => 'Eloquent API Calls',
                'user_id' => User::where('email', 'admin@admin.admin')->firstOrFail()->id,
                'url' => 'https://laravel-news.com/eloquent-api-calls',
                'website' => 'Laravel News',
                'author' => 'Steve McDougall',
                'posted_at' => Carbon::make('2022-12-09'),
                'tags' => '["laravel", "eloquent", "api"]',
            ],
        ];

        $this->call(GeneralSeeder::class, true, ['class' => $class, 'fields' => $fields, 'data' => $data, 'hasRelationships' => false, 'addTimestamps' => true]);
    }
}

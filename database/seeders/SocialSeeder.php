<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_tb')->insert([
            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.facebook.com/',
            'instagram' => 'https://www.facebook.com/',
            'pinterest' => 'https://www.facebook.com/',
            'Date'      => date('2022-03-04'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}

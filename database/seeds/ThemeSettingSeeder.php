<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ThemeSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theme_settings')->insert([
            'hd_fevicon' => 'favicon.ico',
            'hd_theme' => 'default',
            'hd_title' => 'CannonPrimaxFoam - An Ultimate source of Best Sleeping Home Accessories',
            'hd_phone' => '92-42-35888901-04',
            'hd_email' => 'Info@cannonfoam.com',
            'hd_img_logo' => 'logo.jpg',
            'hd_txt_logo' => 'CannonFoam',
            'hd_txt_logo_tagline' => 'Your Shopping Partner',
            'hd_address' => '43- Tariq Block, New Garden Town Lahore Pakistan',
            'hd_developer_name' => 'WebEasy (Pvt) Ltd.',
            'hd_developer_site_url' => 'https://wearewebeasy.com/',
        ]);
    }
}

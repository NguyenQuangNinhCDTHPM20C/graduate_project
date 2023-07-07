<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            ['phone_number' => '028 38 212 868', 'email' => 'ktcaothang.edu.vn', 'address' => '65 Huỳnh Thúc Kháng, P.Bến Nghé, Q.1, Tp.HCM.', 'link_google_map' => '<iframe style="width: 100%; height: 250px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5178266801154!2d106.69877667490778!3d10.771594989376922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40a3b49e59%3A0xa1bd14e483a602db!2sCao%20Thang%20Technical%20College!5e0!3m2!1sen!2sbd!4v1685413866263!5m2!1sen!2sbd"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', 'link_facebook' => 'https://www.facebook.com/caothang.edu.vn/' ,'link_twitter' => '', 'logo' => 'images/logoshop1.png', 'favicon' => 'images/doublenshop-favicon.png']];
        DB::table('settings')->insert($settings);
    }
}
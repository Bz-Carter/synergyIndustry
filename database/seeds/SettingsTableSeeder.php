<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Synergy Industry',
            'address' => 'Treichville, Boulevard de Marseille, Angle du Palais des Sports',
            'contact_number_1' => "(+225) 21 24 91 89",
            'contact_number_2' => "(+225) 75 34 34 01",
            'contact_email' => "info@synergyindustry.net",
            'linked_in' => 'https://www.linkedin.com/company/synergyindustry',
            'facebook' => 'https://www.facebook.com/Synergy-Industry-569224253115487/'

        ]);
    }
}

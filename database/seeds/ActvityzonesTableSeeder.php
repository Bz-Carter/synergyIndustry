<?php

use App\Activityzone;
use Illuminate\Database\Seeder;

class ActvityzonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $activityzone1 = Activityzone::create([
            'name' => 'Côte d\'ivoire',
            'email' => 'info@synergyindustry.net',
            'phone' => '
            (+225) 21 24 91 89
            <br>
            (+225) 75 34 34 01',
            'logo' => 'uploads/activityzones/ci.png'
        ]);

        $activityzone2 = Activityzone::create([
            'name' => 'Burkina Faso',
            'email' => 'info.burkinafaso@synergyindustry.net',
            'phone' => '
            (+226) XX XX XX XX
            <br>
            (+226) XX XX XX XX',
            'logo' => 'uploads/activityzones/bf.png'
        ]);

        $activityzone3 = Activityzone::create([
            'name' => 'Mali',
            'email' => 'info.mali@synergyindustry.net',
            'phone' => '
            (+223) XX XX XX XX
            <br>
            (+223) XX XX XX XX',
            'logo' => 'uploads/activityzones/mali.png'
        ]);

        $activityzone4 = Activityzone::create([
            'name' => 'Guinée',
            'email' => 'info.guinee@synergyindustry.net',
            'phone' => '
            (+224) XX XX XX XX
            <br>
            (+224) XX XX XX XX',
            'logo' => 'uploads/activityzones/guinee.png'
        ]);

        $activityzone5 = Activityzone::create([
            'name' => 'Congo',
            'email' => 'info.congo@synergyindustry.net',
            'phone' => '
            (+242) XX XX XX XX
            <br>
            (+242) XX XX XX XX',
            'logo' => 'uploads/activityzones/congo.png'
        ]);

        $activityzone6 = Activityzone::create([
            'name' => 'Gabon',
            'email' => 'info.gabon@synergyindustry.net',
            'phone' => '
            (+241) XX XX XX XX
            <br>
            (+241) XX XX XX XX',
            'logo' => 'uploads/activityzones/gabon.png'
        ]);

        $activityzone7 = Activityzone::create([
            'name' => 'Sénégal',
            'email' => 'info.senegal@synergyindustry.net',
            'phone' => '
            (+221) XX XX XX XX
            <br>
            (+221) XX XX XX XX',
            'logo' => 'uploads/activityzones/senegal.png'
        ]);

        $activityzone8 = Activityzone::create([
            'name' => 'Nigère',
            'email' => 'info.niger@synergyindustry.net',
            'phone' => '
            (+227) XX XX XX XX
            <br>
            (+227) XX XX XX XX',
            'logo' => 'uploads/activityzones/niger.png'
        ]);
    }
}

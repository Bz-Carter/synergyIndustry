<?php

use App\Partner;
use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partner1 = Partner::create([
            'title' => '2D',
            'logo' => 'uploads/partners/partner-01.jpg'
        ]);

        $partner2 = Partner::create([
            'title' => 'SMB',
            'logo' => 'uploads/partners/partner-02.jpg'
        ]);

        $partner3 = Partner::create([
            'title' => 'TOTAL',
            'logo' => 'uploads/partners/partner-03.jpg'
        ]);

        $partner4 = Partner::create([
            'title' => 'SAR',
            'logo' => 'uploads/partners/partner-04.jpg'
        ]);

        $partner5 = Partner::create([
            'title' => 'OFFSHORE',
            'logo' => 'uploads/partners/partner-05.jpg'
        ]);

        $partner6 = Partner::create([
            'title' => 'AIR LIQUIDE',
            'logo' => 'uploads/partners/partner-06.jpg'
        ]);

        $partner7 = Partner::create([
            'title' => 'CINE GROUPE',
            'logo' => 'uploads/partners/partner-07.jpg'
        ]);

        $partner8 = Partner::create([
            'title' => 'SITARAIL',
            'logo' => 'uploads/partners/partner-08.jpg'
        ]);

        $partner9 = Partner::create([
            'title' => 'IVOS',
            'logo' => 'uploads/partners/partner-09.jpg'
        ]);
        $partner10 = Partner::create([
            'title' => 'GEMA CONSTRUCT',
            'logo' => 'uploads/partners/partner-10.jpg'
        ]);

        $partner11 = Partner::create([
            'title' => 'ICM',
            'logo' => 'uploads/partners/partner-11.jpg'
        ]);

        $partner12 = Partner::create([
            'title' => 'TONGON',
            'logo' => 'uploads/partners/partner-12.jpg'
        ]);

        $partner13 = Partner::create([
            'title' => 'EGPS',
            'logo' => 'uploads/partners/partner-13.jpg'
        ]);

        $partner14 = Partner::create([
            'title' => 'COBAGEC',
            'logo' => 'uploads/partners/partner-14.jpg'
        ]);

        $partner15 = Partner::create([
            'title' => 'KUYO',
            'logo' => 'uploads/partners/partner-15.jpg'
        ]);

        $partner16 = Partner::create([
            'title' => 'NESTLE',
            'logo' => 'uploads/partners/partner-16.jpg'
        ]);

        $partner17 = Partner::create([
            'title' => 'ONUCI',
            'logo' => 'uploads/partners/partner-17.jpg'
        ]);

        $partner18 = Partner::create([
            'title' => 'ORYX ENERGY',
            'logo' => 'uploads/partners/partner-18.jpg'
        ]);

        $partner19 = Partner::create([
            'title' => 'PACIFIC DRILLING',
            'logo' => 'uploads/partners/partner-19.jpg'
        ]);

        $partner20 = Partner::create([
            'title' => 'SIR',
            'logo' => 'uploads/partners/partner-20.jpg'
        ]);

        $partner21 = Partner::create([
            'title' => 'SOGB',
            'logo' => 'uploads/partners/partner-21.jpg'
        ]);

        $partner22 = Partner::create([
            'title' => 'UNILEVER',
            'logo' => 'uploads/partners/partner-22.jpg'
        ]);
    }
}

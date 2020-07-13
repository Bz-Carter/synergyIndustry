<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = App\User::create([
            'name' => 'Bz Carter',
            'email' => 'hanslelas@yahoo.fr',
            'password' => bcrypt('123456789'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/user.png',
            'about' => 'Synergy Industry Developper',
            'facebook' => 'https://www.facebook.com/BzCarter',
            'youtube' => 'https://www.youtube.com/'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  $this->call(ActvityzonesTableSeeder::class);
     //   $this->call(UsersTableSeeder::class);
     //   $this->call(SettingsTableSeeder::class);
     //   $this->call(SlidesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
    //    $this->call(PostsTableSeeder::class);
     //   $this->call(PartnersTableSeeder::class);
    }
}

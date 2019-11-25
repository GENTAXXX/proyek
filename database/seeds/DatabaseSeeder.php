<?php

use App\lowongan;
use App\admin;
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
        factory(lowongan::class, 100)->create();
        factory(admin::class, 3)->create();
    }
}

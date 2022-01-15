<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\AddressSeeder;
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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(AddressSeeder::class);
    }
}

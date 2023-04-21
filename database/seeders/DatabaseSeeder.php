<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ClientSeeder::class,
            EmployeeSeeder::class,
            PositionSeeder::class,
            AgreementSeeder::class,
            OrderSeeder::class,
            BookSeeder::class
        ]);
    }
}

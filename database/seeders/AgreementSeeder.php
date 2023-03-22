<?php

namespace Database\Seeders;

use App\Models\Agreement;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agreement::factory()
            ->count(10)
            ->create()
        ;
    }
}

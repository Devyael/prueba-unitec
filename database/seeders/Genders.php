<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Genders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            [
                'ge_name' => 'Masculino',
                'created_at' => Carbon::now(),
            ],
            [
                'ge_name' => 'Femenino',
                'created_at' => Carbon::now(),
            ],
            [
                'ge_name' => 'No binario',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}

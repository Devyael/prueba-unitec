<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class MaritalStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marital_status')->insert([
            [
                'ms_name' => 'Soltero (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'ms_name' => 'Casado (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'ms_name' => 'Divorciado (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'ms_name' => 'Viudo (a)',
                'created_at' => Carbon::now(),
            ],
            [
                'ms_name' => 'Otro',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}

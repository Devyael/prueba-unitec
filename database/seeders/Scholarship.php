<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Scholarship extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship')->insert([
            [
                'sc_name' => 'Preparatoria',
                'created_at' => Carbon::now(),
            ],
            [
                'sc_name' => 'Licenciatura',
                'created_at' => Carbon::now(),
            ],
            [
                'sc_name' => 'Posgrado',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}

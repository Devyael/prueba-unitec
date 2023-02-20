<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\{Scholarship};

use Carbon\Carbon;

class Careers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            [
                'ca_scholarship_id' => Scholarship::where('sc_name', 'Licenciatura')->value('sc_id'),
                'ca_name' => 'Lic. en derecho',
                'created_at' => Carbon::now(),
            ],
            [
                'ca_scholarship_id' => Scholarship::where('sc_name', 'Licenciatura')->value('sc_id'),
                'ca_name' => 'Lic. en finanzas',
                'created_at' => Carbon::now(),
            ],
            [
                'ca_scholarship_id' => Scholarship::where('sc_name', 'Posgrado')->value('sc_id'),
                'ca_name' => 'Mtria. Admon. de negocios',
                'created_at' => Carbon::now(),
            ],
            [
                'ca_scholarship_id' => Scholarship::where('sc_name', 'Posgrado')->value('sc_id'),
                'ca_name' => 'Mtria. dirección de proyectos',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}

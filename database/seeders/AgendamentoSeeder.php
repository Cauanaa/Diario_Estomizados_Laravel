<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AgendamentoSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,2) as $index){
            DB::table('agendamento')->insert(
                ['data_agendamento'=>$fake->date,
                 'horario'=>$fake->time,
                ]
            );
        }
    }
}

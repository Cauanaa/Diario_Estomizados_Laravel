<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClinicaSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,2) as $index){
            DB::table('clinica')->insert(
                ['nome'=>$fake->name,
                 'contato'=>$fake->phoneNumber,
                 'email'=>$fake->email,
                 'endereco'=>$fake->address,
                ]
            );
        }
    }
}

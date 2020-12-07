<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = ["Guayas",
                        "Manabi",
                        "Pichincha",
                        "Bolivar",
                        "Esmeraldas"];
        foreach($provincias as $key => $value){
            DB::table('provincia')->insert([
                'Nombre' => $value,
                'IdPais' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

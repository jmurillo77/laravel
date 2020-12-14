<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoOperadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operadoras = ["Claro",
                        "Movistar",
                        "CNT",
                        "Twenti"];
        foreach($operadoras as $key => $value){
            DB::table('telefono_tipo_operadora')->insert([
                'Nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

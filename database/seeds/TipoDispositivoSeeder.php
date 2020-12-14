<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dispositivo = ["Fijo",
                        "Movil"];
        foreach($dispositivo as $key => $value){
            DB::table('telefono_tipo_dispositivo')->insert([
                'Nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

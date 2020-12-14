<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCampaniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipocampania = ["Correo",
                        "SMS",
                        "Whatsapp"];
        foreach($tipocampania as $key => $value){
            DB::table('campania_tipo')->insert([
                'Nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

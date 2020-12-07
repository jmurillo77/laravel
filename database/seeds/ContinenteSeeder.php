<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continentes = ["América",
                        "Europa",
                        "África",
                        "Asia",
                        "Oceania"];
        foreach($continentes as $key => $value){
            DB::table('continente')->insert([
                'Nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

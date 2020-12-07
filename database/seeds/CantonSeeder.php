<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CantonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cantones = ["Guayaquil",
                        "Quito"];
        foreach($cantones as $key => $value){
            DB::table('canton')->insert([
                'Nombre' => $value,
                'IdProvincia' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

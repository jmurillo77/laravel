<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'continente',
            'pais',
            'provincia',
            'canton'
        ]);
        $this->call(ContinenteSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(CantonSeeder::class);
    }

    protected function truncateTablas(array $tablas){
        DB::statement('set foreign_key_checks = 0');
        foreach($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('set foreign_key_checks = 1');
    }
}

<?php

use Illuminate\Database\Seeder;

class routesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
	            [
	                'name' => 'NORTE AZUL',
	                'description' => 'Ruta por el Barrio Valle Sanchez',	                
	                'created_at' => date("Y-m-d H:i:s"),
	                'updated_at' => date("Y-m-d H:i:s")
	            ],
	            [
	                'name' => 'NORTE AMARILLO',
	                'description' => 'Ruta por el Barrio Casco Viejo Warnes',	                
	                'created_at' => date("Y-m-d H:i:s"),
	                'updated_at' => date("Y-m-d H:i:s")
	            ],
			]);
    }
}

<?php

use Illuminate\Database\Seeder;

class clocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clocks')->insert([
            [
                'name' => 'RELOJ 1',
                'address' => 'AV CRISTO REDENTOR 4TO ANILLO',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'RELOJ 2',
                'address' => 'BARRIO SAUSALITO NORTE',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name' => 'RELOJ 3',
                'address' => 'BARRIO TIERRAS NUEVAS',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],            
        ]);
    }
}

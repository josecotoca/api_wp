<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PersonSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(linesSeeder::class);
        $this->call(vehiclesSeeder::class);
        $this->call(clocksSeeder::class);
        $this->call(routesSeeder::class);
        $this->call(linevehiclesSeeder::class);
        $this->call(linepartnersSeeder::class);
        $this->call(driversSeeder::class);
    }
}

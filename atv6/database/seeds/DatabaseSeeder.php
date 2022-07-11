<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(EspecialidadeSeeder::class, false, ['total' => 5]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Etudiant::factory(30)->create();

        //$this->call(ClassesTableSeeder::class);
    }
}

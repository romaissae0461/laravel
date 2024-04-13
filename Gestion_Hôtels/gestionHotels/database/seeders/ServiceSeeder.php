<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'nomS' => 'petit dej',
            'descriptionS' => 'guihgfiyduhgfdssyr',
            'prixS' => 50.00,
        ]);
    }
}

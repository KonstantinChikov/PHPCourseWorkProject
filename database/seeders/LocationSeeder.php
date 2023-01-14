<?php

namespace Database\Seeders;

use App\Models\HouseLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        HouseLocation::create([
            'name' => 'Vraca',
            'description' => '30 km to the Castle',
            'landmarks'=>'Castle'
        ]);
    }
}

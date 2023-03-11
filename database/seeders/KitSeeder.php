<?php

namespace Database\Seeders;

use App\Models\Kit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kit::create(['name'=>'StarterKit']);
        Kit::create(['name'=>'kit5']);
        Kit::create(['name'=>'Educational Robotics Kit']);
        //\App\Models\Kit::factory()->create();
    }
}

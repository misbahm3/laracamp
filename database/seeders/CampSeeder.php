<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        //1st method
        // foreach ($camps as $camp) {
        //     \App\Models\Camp::create($camp);
        // }

        //2nd method
        Camp::insert($camps);
    }
}

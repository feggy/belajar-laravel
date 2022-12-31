<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Extracuricular;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExtracuricularSeeder extends Seeder
{

    public function run()
    {
        Extracuricular::truncate();

        $data = [
            'basket', 'voli', 'pramuka', 'badminton', 'pmr', 'paskibra',
        ];

        foreach ($data as $value) {
            Extracuricular::insert([
                'name' => $value,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nominee;

class NomineeSeeder extends Seeder
{
    public function run()
    {
        $nominees = [
            ['name' => 'أغنية 1', 'category_id' => 1, 'image' => 'song1.jpg'],
            ['name' => 'أغنية 2', 'category_id' => 1, 'image' => 'song2.jpg'],
            ['name' => 'فنان 1', 'category_id' => 2, 'image' => 'artist1.jpg'],
            ['name' => 'فنانة 1', 'category_id' => 3, 'image' => 'artist_female1.jpg'],
            ['name' => 'مسلسل 1', 'category_id' => 6, 'image' => 'series1.jpg'],
        ];

        foreach ($nominees as $nom) {
            Nominee::create($nom);
 }
}
}
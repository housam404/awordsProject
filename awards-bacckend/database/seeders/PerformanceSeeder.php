<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Performance;

class PerformanceSeeder extends Seeder
{
    public function run()
    {
        $performances = [
            ['name' => 'Performance 1', 'description' => 'وصف الأداء 1', 'image' => 'performance1.jpg'],
            ['name' => 'Performance 2', 'description' => 'وصف الأداء 2', 'image' => 'performance2.jpg'],
        ];

        foreach ($performances as $perf) {
            Performance::create($perf);
 }
}
}
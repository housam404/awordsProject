<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'أغنية السنة', 'icon' => 'song.png'],
            ['name' => 'فنان السنة', 'icon' => 'artist.png'],
            ['name' => 'فنانة السنة', 'icon' => 'artist_female.png'],
            ['name' => 'أجمل فيديو كليب', 'icon' => 'video.png'],
            ['name' => 'أجمل كتابة البوم السنة', 'icon' => 'album.png'],
            ['name' => 'مسلسل السنة', 'icon' => 'series.png'],
            ['name' => 'أفضل فنان جديد', 'icon' => 'new_artist.png'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
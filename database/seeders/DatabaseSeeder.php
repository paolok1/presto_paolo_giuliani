<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'Elettronica',
        'Abbigliamento',
        'Salute e Bellezza',
        'casa e giardinaggio',
        'giocattoli',
        'sport',
        'animali domestici',
        'accessori',
        'libri e fumetti',
        'motori',
    ];

    public function run(): void
    {
        
        foreach($this->categories as $category){
            Category::create([
                'name'=>$category
            ]);
        };

    }
}

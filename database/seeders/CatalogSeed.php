<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog;



class CatalogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalog::create([
            'name' => 'Пакупнікам'
        ]);
        Catalog::create([
            'name' => 'Супрацоўніцтва'
        ]);
        
        Catalog::create([
            'name' => 'Напрамкі'
        ]);
        
        Catalog::create([
            'name' => 'Каманда'
        ]);
        Catalog::create([
            'parent_id' => 1,
            'name' => 'Хлябы'
        ]);
        Catalog::create([
            'parent_id' => 1,
            'name' => 'Булачкі'
        ]);
        Catalog::create([
            'parent_id' => 1,
            'name' => 'Пернікі'
        ]);
        Catalog::create([
            'parent_id' => 1,
            'name' => 'Торцікі'
        ]);


    }
}

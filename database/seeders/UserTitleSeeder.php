<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserTitle;

class UserTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserTitle::create([
            'title' => 'Mr',
        ]);
        UserTitle::create([
            'title' => 'Mrs',
        ]);
        UserTitle::create([
            'title' => 'Madam',
        ]);
        UserTitle::create([
            'title' => 'Ms',
        ]);
        UserTitle::create([
            'title' => 'Tan Sri',
        ]);
        UserTitle::create([
            'title' => 'Puan Sri',
        ]);
        UserTitle::create([
            'title' => 'Datuk Seri/Dato Seri',
        ]);
        UserTitle::create([
            'title' => 'Datin Seri',
        ]);
        UserTitle::create([
            'title' => 'Datuk/Dato',
        ]);
        UserTitle::create([
            'title' => 'Datin',
        ]);
        UserTitle::create([
            'title' => 'Professor',
        ]);
        UserTitle::create([
            'title' => 'Dr',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tag::create([
            'name' => 'Single Storey',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Double Storey',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => '2.5 Storey',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => '3 Storey',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => '99 Years Tenure',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => '999 Years Tenure',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Ground Floor',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'First Floor',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Second Floor',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Third Floor',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Corner Unit',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Intermediate Corner Unit',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Intermediate Unit',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Fully Furnished',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Partial Furnished',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Non Furnished',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Bumi Lot',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Non-Bumi Lot',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Vacant Unit',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Occupy Unit',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Low Density',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Medium Density',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'High Density',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'North',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'East',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'West',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'South',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'North East',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'North West',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'South East',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'South West',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Gated & Guarded',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => '2-tier Security',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => '3-tier Security',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Laundry Service',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Lift',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Swimming Pool',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Jogging Track',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'Gym',
            'type' => 'property',
        ]);
        Tag::create([
            'name' => 'BBQ Area',
            'type' => 'property',
        ]);


        Tag::create([
            'name' => 'Water',
            'type' => 'news',
        ]);
        Tag::create([
            'name' => 'Construction',
            'type' => 'news',
        ]);
        Tag::create([
            'name' => 'Sabah',
            'type' => 'news',
        ]);
        Tag::create([
            'name' => 'Papar',
            'type' => 'news',
        ]);
        Tag::create([
            'name' => 'Tourism',
            'type' => 'news',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyType;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PropertyType::create([ // 1
            'type' => 'Agricultural Land',
            'down_payment_percentage' => 30.00,
            'interest_rate_percentage' => 6.80,
            'tenure_year' => '20',
            'ls_financing' => 'land',
            'ls_land_type' => 'agricultural',
            'preference_category' => 'Agricultural',
            'm_pointer' => 'Land',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 2
            'type' => 'Apartment',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => '',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 3
            'type' => 'Bungalow',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 4
            'type' => 'Commercial',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'property',
            'ls_land_type' => 'commercial',
            'preference_category' => 'Commercial',
            'm_pointer' => 'Space',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 5
            'type' => 'Commercial Land',
            'down_payment_percentage' => 30.00,
            'interest_rate_percentage' => 6.30,
            'tenure_year' => '20',
            'ls_financing' => 'land',
            'ls_land_type' => 'commercial',
            'preference_category' => 'Commercial',
            'm_pointer' => 'Land',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 6
            'type' => 'Condominium',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential High Rise',
            'm_pointer' => '',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 7
            'type' => 'Factory',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'property',
            'ls_land_type' => 'industrial',
            'preference_category' => 'Industrial',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 8
            'type' => 'Industrial',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'property',
            'ls_land_type' => 'industrial',
            'preference_category' => 'Industrial',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 9
            'type' => 'Office Space',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'property',
            'ls_land_type' => 'commercial',
            'preference_category' => 'Commercial',
            'm_pointer' => 'Office',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 10
            'type' => 'Residential Land',
            'down_payment_percentage' => 30.00,
            'interest_rate_percentage' => 5.80,
            'tenure_year' => '20',
            'ls_financing' => 'land',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => 'Land',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 11
            'type' => 'Retail Space',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'property',
            'ls_land_type' => 'commercial',
            'preference_category' => 'Commercial',
            'm_pointer' => 'Space',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 12
            'type' => 'Semi-D',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 13
            'type' => 'Serviced Residence',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Commercial',
            'm_pointer' => '',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 14
            'type' => 'SOHO',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Commercial',
            'm_pointer' => '',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 15
            'type' => 'Terrace',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 16
            'type' => 'Warehouse',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'property',
            'ls_land_type' => 'commercial',
            'preference_category' => 'Industrial',
            'm_pointer' => 'Warehouse',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 17
            'type' => 'Villa',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 18
            'type' => 'Mixed Development',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Commercial',
            'm_pointer' => 'Space',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 19
            'type' => 'SOVO',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Commercial',
            'm_pointer' => '',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 20
            'type' => 'Link House',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 21
            'type' => 'Detached House',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 22
            'type' => 'Shoplot',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'property',
            'ls_land_type' => 'commercial',
            'preference_category' => 'Commercial',
            'm_pointer' => 'Space',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 23
            'type' => 'Townhouse',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => '',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 24
            'type' => 'Hotel',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'property',
            'ls_land_type' => 'commercial',
            'preference_category' => 'Commercial',
            'm_pointer' => 'Space',
            'landed_or_highrise' => 'highrise',
        ]);
        PropertyType::create([ // 25
            'type' => 'Industrial Land',
            'down_payment_percentage' => 20.00,
            'interest_rate_percentage' => 4.65,
            'tenure_year' => '25',
            'ls_financing' => 'land',
            'ls_land_type' => 'industrial',
            'preference_category' => 'Industrial',
            'm_pointer' => 'Land',
            'landed_or_highrise' => 'landed',
        ]);
        PropertyType::create([ // 26
            'type' => 'Bungalow Lot',
            'down_payment_percentage' => 30.00,
            'interest_rate_percentage' => 5.80,
            'tenure_year' => '20',
            'ls_financing' => 'land',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential Landed',
            'm_pointer' => 'Land',
            'landed_or_highrise' => '',
        ]);
        PropertyType::create([ // 27
            'type' => 'Room',
            'down_payment_percentage' => 10.00,
            'interest_rate_percentage' => 4.40,
            'tenure_year' => '35',
            'ls_financing' => 'property',
            'ls_land_type' => 'residential',
            'preference_category' => 'Residential High Rise',
            'm_pointer' => '',
            'landed_or_highrise' => '',
        ]);
        PropertyType::create([ // 28
            'type' => 'Tourism Land',
            'down_payment_percentage' => 30.00,
            'interest_rate_percentage' => 6.30,
            'tenure_year' => '20',
            'ls_financing' => 'land',
            'ls_land_type' => 'commercial',
            'preference_category' => 'Commercial',
            'm_pointer' => 'land',
            'landed_or_highrise' => 'landed',
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('properties', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        $sql = "CREATE TABLE IF NOT EXISTS `properties` (
            `id` bigint unsigned not null auto_increment primary key,
            `full_id` varchar(10) null,
            `city` varchar(200) null,
            `d_city` varchar(200) null,
            `neighborhood` varchar(200) null,
            `d_neighborhood` varchar(200) null,
            `transaction_type` varchar(50) null,
            `d_transaction_type` varchar(50) null,
            `property_type_id` bigint unsigned not null,
            `d_property_type_id` bigint unsigned null,
            `name_short` varchar(100) null,
            `d_name_short` varchar(100) null,
            `locality` varchar(200) null,
            `d_locality` varchar(200) null,
            `tenure_year` varchar(10) null,
            `d_tenure_year` varchar(10) null,
            `details` text null,
            `d_details` text null,
            `details_backup` text null,
            `d_details_backup` text null,
            `asking_price` decimal(18, 2) null,
            `d_asking_price` decimal(18, 2) null,
            `special_discount` decimal(18, 2) null,
            `d_special_discount` decimal(18, 2) null,
            `no_agent` varchar(10) null,
            `d_no_agent` varchar(10) null,
            `land_title` varchar(200) null,
            `d_land_title` varchar(200) null,
            `land_area` varchar(200) null,
            `d_land_area` varchar(200) null,
            `land_area_uom` varchar(50) null,
            `d_land_area_uom` varchar(50) null,
            `built_up_area` varchar(200) null,
            `d_built_up_area` varchar(200) null,
            `no_of_b_rooms` varchar(200) null,
            `d_no_of_b_rooms` varchar(200) null,
            `no_of_car_park` varchar(10) null,
            `d_no_of_car_park` varchar(10) null,
            `latitude` varchar(200) null,
            `longitude` varchar(200) null,
            `d_latitude` varchar(200) null,
            `d_longitude` varchar(200) null,
            `google_coordinate_zoom` text null,
            `d_google_coordinate_zoom` text null,
            `management_fee` varchar(18) null,
            `d_management_fee` varchar(18) null,
            `furnished` varchar(200) null,
            `d_furnished` varchar(200) null,
            `orientation` varchar(50) null,
            `d_orientation` varchar(50) null,
            `furnishing_fixture` text null,
            `d_furnishing_fixture` text null,
            `facilities` text null,
            `d_facilities` text null,
            `amenities` text null,
            `d_amenities` text null,
            `storey_type` varchar(20) null,
            `d_storey_type` varchar(20) null,
            `floor_location` varchar(20) null,
            `d_floor_location` varchar(20) null,
            `total_floor` varchar(20) null,
            `d_total_floor` varchar(20) null,
            `density` varchar(20) null,
            `d_density` varchar(20) null,
            `lot_type` varchar(20) null,
            `d_lot_type` varchar(20) null,
            `unit_type` varchar(20) null,
            `d_unit_type` varchar(20) null,
            `occupancy_status` varchar(20) null,
            `d_occupancy_status` varchar(20) null,
            `car_park_type` varchar(20) null,
            `d_car_park_type` varchar(20) null,
            `general_info` varchar(200) null,
            `d_general_info` varchar(200) null,
            `owner_name` varchar(200) null,
            `d_owner_name` varchar(200) null,
            `owner_mobile` varchar(50) null,
            `d_owner_mobile` varchar(50) null,
            `owner_email` varchar(200) null,
            `d_owner_email` varchar(200) null,
            `created_by` bigint unsigned not null,
            `d_created_by` bigint unsigned null,
            `modified_by` bigint unsigned null,
            `d_modified_by` bigint unsigned null,
            `remarks` text null,
            `d_remarks` text null,
            `platform_create` varchar(10) null,
            `d_platform_create` varchar(10) null,
            `platform_modified` varchar(50) null,
            `d_platform_modified` varchar(50) null,
            `created_at` timestamp null,
            `updated_at` timestamp null
        )";
        // ) default character set utf8mb4 collate 'utf8mb4_unicode_ci'";

        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}

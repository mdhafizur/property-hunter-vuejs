<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDevelopmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('developments', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        $sql = "CREATE TABLE IF NOT EXISTS `developments` (
            `id` bigint unsigned not null auto_increment primary key,
            `dev_person_contact_name` varchar(50) null,
            `dev_person_contact_designation` varchar(50) null,
            `dev_person_contact_mobile` varchar(50) null,
            `dev_person_contact_email` varchar(200) null,
            `dev_name` varchar(100) null,
            `project_name` varchar(50) null,
            `alias` varchar(50) null,
            `dev_address` text null,
            `dev_office_phone` varchar(200) null,
            `dev_office_fax` varchar(50) null,
            `dev_office_email` varchar(200) null,
            `dev_website` text null,
            `video_url` text null,
            `type` varchar(50) null,
            `type_ls` varchar(50) null,
            `location_country` varchar(200) null,
            `location_state` varchar(50) null,
            `location_city` varchar(50) null,
            `location_neighbourhood` varchar(50) null,
            `density` varchar(50) null,
            `storey` varchar(50) null,
            `block` varchar(50) null,
            `launching_date` date null,
            `override_launching` varchar(50) null,
            `facilities` text null,
            `amenities` text null,
            `currency` varchar(50) null,
            `listing_price_from_ls` decimal(18, 2) null,
            `listing_price_from` varchar(20) null,
            `listing_price_to` varchar(20) null,
            `booking_fee` varchar(50) null,
            `schemes` varchar(200) null,
            `price_per_sqft_from` varchar(50) null,
            `price_per_sqft_to` varchar(50) null,
            `built_up_sqft_from` varchar(50) null,
            `built_up_sqft_to` varchar(50) null,
            `land_area_sqft_from` varchar(50) null,
            `land_area_sqft_to` varchar(50) null,
            `n_project_land_area` varchar(50) null,
            `map_location` text null,
            `map_location_zoom` varchar(50) null,
            `additional_information` mediumtext null,
            `expiry_date` date null,
            `completed` varchar(2) null,
            `featured_status` varchar(10) null,
            `featured_expiry_date` date null,
            `completion_month` varchar(2) null,
            `completion_year` varchar(4) null,
            `override_completion_month_year` varchar(50) null,
            `sales_rep_1_name` varchar(50) null,
            `sales_rep_1_contact` varchar(50) null,
            `sales_rep_2_name` varchar(50) null,
            `sales_rep_2_contact` varchar(50) null,
            `sales_rep_3_name` varchar(50) null,
            `sales_rep_3_contact` varchar(50) null,
            `sales_rep_4_name` varchar(50) null,
            `sales_rep_4_contact` varchar(50) null,
            `sales_rep_5_name` varchar(50) null,
            `sales_rep_5_contact` varchar(50) null,
            `dt_create` datetime null,
            `created_by` bigint unsigned not null,
            `dt_modified` datetime null,
            `modified_by` bigint unsigned null,
            `remarks` text null,
            `status` varchar(50) null,
            `n_360_image` text null,
            `n_virtual_tour` text null,
            `n_floorplan_views` text null,
            `n_short_desc` text null,
            `n_short_desc_cn` text null,
            `n_quick_location` text null,
            `n_quick_sales_gallery` varchar(200) null,
            `n_map_gallery` text null,
            `n_map_gallery_zoom` varchar(50) null,
            `n_quick_appointment` varchar(200) null,
            `n_maintenance_fee_psf` varchar(50) null,
            `n_sinking_fund_psf` varchar(50) null,
            `n_total_carpark` varchar(50) null,
            `n_type_builtup` text null,
            `n_unit_ceiling_height` varchar(50) null,
            `n_securty_level` varchar(50) null,
            `n_amenities_5km` text null,
            `n_unique_selling_point` text null,
            `n_meta_proximity_guide` text null,
            `n_meta_lot_preferred` text null,
            `n_meta_price_matrix` text null,
            `n_meta_floorplate` text null,
            `n_meta_floorplan` text null,
            `n_meta_building_level_matrix` text null,
            `n_meta_masterplan` text null,
            `n_chart_layer_1` text null,
            `n_chart_layer_2` text null,
            `n_title` varchar(50) null,
            `n_project_progress` text null,
            `n_price_per_sqft_avg` varchar(30) null,
            `n_tenure` varchar(50) null,
            `n_inquire_contact` varchar(50) null,
            `n_theme_rgb` varchar(50) null,
            `n_disclaimer` text null,
            `n_re_print` varchar(5) null,
            `n_meta_ef_bank` text null,

            `created_at` timestamp null,
            `updated_at` timestamp null
        )";
        // ) default character set utf8mb4 collate 'utf8mb4_unicode_ci";

        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developments');
    }
}

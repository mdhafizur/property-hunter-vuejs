<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->nullable();
            $table->string('first_name', 100);
            $table->string('last_name', 100)->nullable();
            $table->string('alias', 50)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('age_group', 10)->nullable();
            $table->string('FK_agency', 10)->nullable(); //foreign key of agency list
            $table->string('company', 200)->nullable();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contact_no', 50)->unique()->nullable();
            $table->integer('isVerified')->default(0);
            $table->string('image')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('password')->nullable();
            $table->string('subscription')->nullable();
            $table->string('agent_no')->nullable();
            $table->string('real_estate_nego_no', 50)->nullable();
            $table->string('OTP')->nullable();
            $table->string('fax', 200)->nullable();
            $table->text('introduction')->nullable();
            $table->text('specialization')->nullable();
            $table->string('country', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('city', 10)->nullable();
            $table->text('location')->nullable();

            $table->string('day_of_birth', 2)->nullable();
            $table->string('month_of_birth', 2)->nullable();
            $table->string('year_of_birth', 10)->nullable();
            $table->string('newsletter_weekly', 10)->nullable();
            $table->string('newsletter_monthly', 10)->nullable();

            $table->string('corr_address', 200)->nullable();
            $table->string('corr_address_l2', 200)->nullable();
            $table->string('postcode', 10)->nullable();
            $table->string('co_address', 10)->nullable();
            $table->string('co_contact', 200)->nullable();
            $table->string('co_fax', 200)->nullable();
            $table->string('co_email', 200)->nullable();
            $table->string('co_website', 200)->nullable();
            $table->tinyInteger('active')->nullable();
            $table->timestamp('date_last_login')->nullable();
            $table->timestamp('date_modified')->nullable();

            $table->string('modified_by')->nullable();
            $table->timestamp('date_expiry')->nullable();
            $table->text('meta_interest_type')->nullable();
            $table->text('meta_interest_area')->nullable();
            $table->text('meta_interest_news')->nullable();
            $table->text('meta_interest_transac')->nullable();
            $table->string('income_avg_yr', 30)->nullable();
            $table->string('one_signal_id', 50)->nullable();
            $table->string('app_android', 5)->nullable();
            $table->string('app_ios', 5)->nullable();
            $table->timestamp('app_dt_last_login')->nullable();





            $table->rememberToken();
            $table->timestamps();
        });
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
        // $createTable = "CREATE TABLE IF NOT EXISTS `users` (
        //     `id` bigint unsigned not null auto_increment primary key,
        //     `level` varchar(10) DEFAULT NULL,
        //     `username` varchar(50) DEFAULT NULL,
        //     `password` varchar(200) NOT NULL,
        //     `title` varchar(50) DEFAULT NULL,
        //     `name` varchar(50) DEFAULT NULL,
        //     `alias` varchar(50) DEFAULT NULL,
        //     `first_name` varchar(100) DEFAULT NULL,
        //     `last_name` varchar(100) DEFAULT NULL,
        //     `preferred_language` varchar(10) DEFAULT NULL COMMENT 'EN,BM,CH',
        //     `gender` varchar(10) DEFAULT NULL COMMENT 'Male,Female',
        //     `age_group` varchar(10) DEFAULT NULL COMMENT '1=<25,2=26-35,3=36-45,4=46-55,5=>56',
        //     `FK_agency` varchar(10) DEFAULT NULL,
        //     `company` varchar(200) DEFAULT NULL,
        //     `contact_no` varchar(50) DEFAULT NULL,
        //     `contact_no_unverified` text,
        //     `contact_no_pref` varchar(50) DEFAULT NULL COMMENT 'no comma separated. 1=whatsapp 2=wechat',
        //     `nric` varchar(50) DEFAULT NULL,
        //     `email` varchar(50) DEFAULT NULL,
        //     `email_2_pref` varchar(50) DEFAULT NULL,
        //     `subscription` varchar(200) DEFAULT NULL COMMENT 'a=public,b=agent,c=developer,d=editor,e=expert,g=auctioneer,z=admin',
        //     `designation` varchar(200) DEFAULT NULL,
        //     `contact_no_2` varchar(200) DEFAULT NULL,
        //     `contact_no_2_pref` varchar(50) DEFAULT NULL COMMENT 'no comma separated. 1=whatsapp 2=wechat',
        //     `fax` varchar(200) DEFAULT NULL,
        //     `agent_no` varchar(50) DEFAULT NULL,
        //     `real_estate_nego_no` varchar(50) DEFAULT NULL COMMENT 'Real Estate Negotiator Number added on 21-08-2014',
        //     `language` text,
        //     `introduction` text CHARACTER SET utf8,
        //     `introduction_utf8` text,
        //     `specialization` text,
        //     `country` varchar(50) DEFAULT NULL,
        //     `state` varchar(50) DEFAULT NULL,
        //     `city` varchar(10) DEFAULT NULL,
        //     `location` text COMMENT 'FK_list_state_area csv',
        //     `dob` date DEFAULT NULL,
        //     `month_of_birth` varchar(2) DEFAULT NULL,
        //     `year_of_birth` varchar(10) DEFAULT NULL,
        //     `newsletter_weekly` varchar(10) DEFAULT NULL,
        //     `newsletter_monthly` varchar(10) DEFAULT NULL,
        //     `bumi` varchar(1) DEFAULT NULL COMMENT 'null,0,1',
        //     `marital_status` varchar(100) DEFAULT NULL,
        //     `occupation` varchar(200) DEFAULT NULL,
        //     `business_industry` varchar(200) DEFAULT NULL,
        //     `corr_address` varchar(200) DEFAULT NULL,
        //     `corr_address_l2` varchar(200) DEFAULT NULL,
        //     `postcode` varchar(10) DEFAULT NULL,
        //     `co_address` text,
        //     `co_contact` varchar(200) DEFAULT NULL,
        //     `co_fax` varchar(200) DEFAULT NULL,
        //     `co_email` varchar(200) DEFAULT NULL,
        //     `co_website` varchar(200) DEFAULT NULL,
        //     `dev_rep_1_name` varchar(50) DEFAULT NULL,
        //     `dev_rep_1_contact` varchar(50) DEFAULT NULL,
        //     `dev_rep_2_name` varchar(50) DEFAULT NULL,
        //     `dev_rep_2_contact` varchar(50) DEFAULT NULL,
        //     `dev_rep_3_name` varchar(50) DEFAULT NULL,
        //     `dev_rep_3_contact` varchar(50) DEFAULT NULL,
        //     `dt_joined` datetime DEFAULT NULL,
        //     `active` tinyint(4) DEFAULT NULL,
        //     `dt_last_login` datetime DEFAULT NULL,
        //     `dt_create` datetime DEFAULT NULL,
        //     `dt_modified` datetime DEFAULT NULL,
        //     `modified_by` varchar(50) DEFAULT NULL,
        //     `dt_expiry` date DEFAULT NULL,
        //     `meta_interest_type` text COMMENT 'apartment,terrace',
        //     `meta_interest_area` text COMMENT 'kota kinabalu,sandakan',
        //     `meta_interest_news` text COMMENT 'sabah,international',
        //     `meta_interest_transac` text COMMENT 'for sale, for rent',
        //     `income_avg_yr` varchar(30) DEFAULT NULL,
        //     `one_signal_id` varchar(50) DEFAULT NULL,
        //     `app_android` varchar(5) DEFAULT NULL,
        //     `app_ios` varchar(5) DEFAULT NULL,
        //     `app_dt_last_login` datetime DEFAULT NULL,

        //     `email_verified_at` datetime DEFAULT NULL,
        //     `isVerified` int DEFAULT 0,
        //     `OTP` varchar(20) DEFAULT NULL,
        //     `remember_token` varchar(200) DEFAULT NULL,

        //     `api_token` text DEFAULT NULL,


        //     `updated_at` datetime DEFAULT NULL,
        //     `created_at` datetime DEFAULT NULL
        //   );";


        // DB::statement($createTable);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

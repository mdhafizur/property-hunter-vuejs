<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->string('d_tag')->nullable();

            $table->string('category')->nullable();
            $table->string('d_category')->nullable();

            $table->string('title')->nullable();
            $table->string('d_title')->nullable();

            $table->string('slug');

            $table->string('content')->nullable();
            $table->string('d_content')->nullable();

            $table->string('article_source_from')->nullable();
            $table->string('d_article_source_from')->nullable();

            $table->string('photo_source_and_credit_to')->nullable();
            $table->string('d_photo_source_and_credit_to')->nullable();

            $table->string('written_by')->nullable();
            $table->string('d_written_by')->nullable();

            $table->string('redirect_url')->nullable();
            $table->string('d_redirect_url')->nullable();

            $table->dateTime('featured_publish_date')->nullable();
            $table->dateTime('d_featured_publish_date')->nullable();

            $table->dateTime('featured_expiry_date')->nullable();
            $table->dateTime('d_featured_expiry_date')->nullable();

            $table->boolean('highlight')->nullable();
            $table->boolean('d_highlight')->nullable();

            $table->string('remarks')->nullable();
            $table->string('d_remarks')->nullable();

            $table->string('status')->nullable();
            $table->string('d_status')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('modified_by')->nullable();

            $table->timestamps();
        });


        // $sql = "CREATE TABLE IF NOT EXISTS `news` (
        //     `id` bigint unsigned not null auto_increment primary key,
        //     `tag` varchar(200) null,
        //     `d_tag` varchar(200) null,
        //     `category` varchar(200) null,
        //     `description` varchar(200) null,
        //     `d_category` varchar(200) null,
        //     `title` varchar(200) null,
        //     `d_title` varchar(200) null,
        //     `content` text null,
        //     `dt_create` date null,
        //     `d_dt_create` date null,
        //     `created_by` bigint unsigned not null,
        //     `d_created_by` bigint unsigned null,
        //     `date_modified` date null,
        //     `d_date_modified` date null,
        //     `modified_by` bigint unsigned null,
        //     `d_modified_by` bigint unsigned null,
        //     `remarks` text null,
        //     `d_remarks` text null,
        //     `status` varchar(50) null,
        //     `d_status` varchar(50) null,
        //     `article_source_from` varchar(200) null,
        //     `d_article_source_from` varchar(200) null,
        //     `written_by` varchar(200) null,
        //     `d_written_by` varchar(200) null,
        //     `photo_source_and_credit_to` varchar(200) null,
        //     `d_photo_source_and_credit_to` varchar(200) null,
        //     `redirect_url` varchar(200) null,
        //     `featured_status` varchar(10) null,
        //     `d_featured_status` varchar(10) null,
        //     `featured_expiry_date` date null,
        //     `d_featured_expiry_date` date null,
        //     `featured_publish_date` timestamp null,
        //     `highlight` tinyint(1) null,
        //     `created_at` timestamp null,
        //     `updated_at` timestamp null
        // )";
        // // ) default character set utf8mb4 collate 'utf8mb4_unicode_ci'";

        // DB::statement($sql);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->unique();
            $table->timestamps();
        });

        Schema::create('property_tag', function (Blueprint $table) {
            $table->integer('property_id');
            $table->integer('tag_id');
            $table->primary(['property_id', 'tag_id']);
        });

        Schema::create('news_tag', function (Blueprint $table) {
            $table->integer('news_id');
            $table->integer('tag_id');
            $table->primary(['news_id', 'tag_id']);
        });

        Schema::create('development_tag', function (Blueprint $table) {
            $table->integer('developments_id');
            $table->integer('tag_id');
            $table->primary(['developments_id', 'tag_id']);
        });


        // $sql = "CREATE TABLE IF NOT EXISTS `tags` (
        //     `id` bigint unsigned not null auto_increment primary key,
        //     `name` varchar(100) not null,
        //     `type` varchar(100) not null,
        //     `created_at` timestamp null,
        //     `updated_at` timestamp null,
        //     unique `tags_name_type_unique`(`name`, `type`)
        // ) default character set utf8mb4 collate 'utf8mb4_unicode_ci";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}

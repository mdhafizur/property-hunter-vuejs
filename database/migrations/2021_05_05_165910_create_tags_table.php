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
        // Schema::create('tags', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        $sql = "CREATE TABLE IF NOT EXISTS `tags` (
            `id` bigint unsigned not null auto_increment primary key,
            `name` varchar(100) not null,
            `type` varchar(100) not null,
            `created_at` timestamp null,
            `updated_at` timestamp null,
            unique `tags_name_type_unique`(`name`, `type`)
        ) default character set utf8mb4 collate 'utf8mb4_unicode_ci";
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

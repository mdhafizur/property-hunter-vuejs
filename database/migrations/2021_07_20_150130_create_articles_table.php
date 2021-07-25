<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->string('d_tag')->nullable();

            $table->string('category')->nullable();
            $table->string('d_category')->nullable();

            $table->string('sub_category')->nullable();
            $table->string('d_sub_category')->nullable();

            $table->string('title')->nullable();
            $table->string('d_title')->nullable();

            $table->string('alias');

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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

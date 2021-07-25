<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_types', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50)->nullable();
            $table->decimal('down_payment_percentage', 18, 2)->nullable();
            $table->decimal('interest_rate_percentage', 18, 2)->nullable();
            $table->string('tenure_year', 5)->nullable();
            $table->string('ls_financing', 20)->nullable();
            $table->string('ls_land_type', 20)->nullable();
            $table->string('preference_category', 50)->nullable();
            $table->string('m_pointer', 50)->nullable();
            $table->string('landed_or_highrise', 50)->nullable();


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
        Schema::dropIfExists('property_types');
    }
}

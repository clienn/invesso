<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentRateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_rate_options', function (Blueprint $table) {
            $table->id();
            $table->integer('talent_id')->default(0);
            $table->decimal('price')->default(0);
            $table->integer('hours_per_day')->default(0);
            $table->decimal('rate_per_hour')->default(0);
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
        Schema::dropIfExists('talent_rate_options');
    }
}

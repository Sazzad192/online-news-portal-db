<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com__countries', function (Blueprint $table) {
            
            $table->smallIncrements('country_id');
            $table->string('country_name', 100)->unique();
            $table->string('country_name_bn', 100)->unique();
            $table->string('country_slug', 100)->unique();
            $table->boolean('deletable')->default(1);
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
        Schema::dropIfExists('com__countries');
    }
}

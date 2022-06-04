<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComUpazilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com__upazilas', function (Blueprint $table) {
            $table->smallIncrements('upazila_id');
            $table->unsignedSmallInteger('division_id');
            $table->foreign('division_id')->references('division_id')->on('com__divisions'); //Divisions foreign key
            $table->unsignedSmallInteger('district_id');
            $table->foreign('district_id')->references('district_id')->on('com_districts'); //Districts foreign key
            $table->string('upazila_name', 255)->unique();
            $table->string('upazila_name_bn', 255)->unique();
            $table->string('upazila_slug', 255)->unique();
            $table->text('upazila_title');
            $table->text('meta_description');
            $table->smallInteger('position')->unsigned();
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
        Schema::dropIfExists('com__upazilas');
    }
}

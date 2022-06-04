<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_districts', function (Blueprint $table) {
            
            $table->smallIncrements('district_id');
            $table->string('district_name', 255)->unique();
            $table->string('district_name_bn', 255)->unique();
            $table->string('district_slug', 255)->unique();
            $table->text('district_title');
            $table->string('img_path', 255);
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
        Schema::dropIfExists('com_districts');
    }
}

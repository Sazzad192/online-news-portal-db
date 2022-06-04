<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com__divisions', function (Blueprint $table) {
            
            $table->smallIncrements('division_id');
            $table->string('division_name', 255)->unique();
            $table->string('division_name_bn', 255)->unique();
            $table->string('division_slug', 255)->unique();
            $table->text('division_title');
            $table->text('meta_description');
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
        Schema::dropIfExists('com__divisions');
    }
}

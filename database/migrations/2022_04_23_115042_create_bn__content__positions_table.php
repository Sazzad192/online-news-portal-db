<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBnContentPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bn__content__positions', function (Blueprint $table) {
            $table->bigIncrements('position_id');
            $table->string('position_name', 255);
            $table->string('position_slug', 255);
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('cat_id')->on('com__categories'); //Categories foreign key
            $table->unsignedSmallInteger('subcat_id');
            $table->foreign('subcat_id')->references('subcat_id')->on('com__subcategories'); //SubCategories foreign key
            $table->string('teg', 255)->nullable();
            $table->string('content_ids', 255)->nullable();
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
        Schema::dropIfExists('bn__content__positions');
    }
}

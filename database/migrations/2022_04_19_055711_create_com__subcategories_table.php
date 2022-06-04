<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com__subcategories', function (Blueprint $table) {
            $table->smallIncrements('subcat_id');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('cat_id')->on('com__categories'); //Categories foreign key
            $table->string('subcat_name', 255)->unique();
            $table->string('subcat_name_bn', 255)->unique();
            $table->string('subcat_title', 255)->unique();
            $table->string('subcat_slug', 255)->unique();
            $table->string('subcat_meta_keyword', 255);
            $table->longText('subcat_meta_description');
            $table->string('img_icon_path', 255)->nullable();
            $table->string('img_menu_path', 255)->nullable();
            $table->string('img_cover_home_path', 255)->nullable();
            $table->string('img_cover_inner_path', 255)->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('com__subcategories');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com__categories', function (Blueprint $table) {
            
            $table->bigIncrements('cat_id');
            $table->boolean('cat_type')->nullable();
            $table->string('cat_name', 255)->unique();
            $table->string('cat_name-bn', 255)->unique();
            $table->string('cat_slug', 255)->unique();
            $table->string('cat_title', 255)->unique()->nullable();
            $table->string('cat_meta_keyword', 255);
            $table->text('cat_meta_description');
            $table->smallInteger('cat_position')->nullable();
            $table->string('img_icon_path', 255)->nullable();
            $table->string('img_menu_path', 255)->nullable();
            $table->string('img_cover_home_path', 255)->nullable();
            $table->string('img_cover_inner_path', 255)->nullable();
            $table->boolean('show_at_apps')->default(1);
            $table->boolean('show_tags')->default(1);
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
        Schema::dropIfExists('com__categories');
    }
}

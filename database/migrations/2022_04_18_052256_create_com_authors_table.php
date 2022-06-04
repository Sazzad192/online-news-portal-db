<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_authors', function (Blueprint $table) {
            
            $table->increments('author_id');
            $table->boolean('author_type')->nullable();
            $table->string('author_name', 255)->unique();
            $table->string('author_name_bn', 255)->unique();
            $table->string('author_name_slug', 255)->unique();
            $table->string('author_initial', 255)->unique()->nullable();
            $table->string('designation', 255)->unique();
            $table->string('designation_en', 255)->unique();
            $table->text('author_bio', 255)->unique();
            $table->text('author_bio_bn', 255)->unique();
            $table->string('facebook_url', 255)->unique()->nullable();
            $table->string('twitter_url', 255)->unique()->nullable();
            $table->string('linkedin_url', 255)->unique()->nullable();
            $table->string('image_path', 255)->unique()->nullable();
            $table->boolean('noindex')->default(1);
            $table->boolean('show_byline')->default(1);
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
        Schema::dropIfExists('com_authors');
    }
}

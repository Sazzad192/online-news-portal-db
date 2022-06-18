<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->bigIncrements('podcast_id');
            $table->unsignedBigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('com__categories'); //Categories foreign key
            $table->string('cloud_url', 255)->unique();
            $table->string('cloud_id',255)->unique();
            $table->text('news_body');
            $table->string('heading', 255);
            $table->string('news_header', 255);
            $table->string('news_img_path', 255)->nullable();
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
        Schema::dropIfExists('podcasts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBnContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bn__contents', function (Blueprint $table) {

            $table->bigIncrements('content_id');
            $table->boolean('content_type');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('cat_id')->on('com__categories'); //Categories foreign key
            $table->unsignedSmallInteger('subcat_id')->nullable();
            $table->foreign('subcat_id')->references('subcat_id')->on('com__subcategories'); //SubCategories foreign key
            $table->unsignedSmallInteger('country_id')->nullable();
            $table->foreign('country_id')->references('country_id')->on('com__countries'); //Counties foreign key
            $table->unsignedSmallInteger('division_id')->nullable();
            $table->foreign('division_id')->references('division_id')->on('com__divisions'); //Divisions foreign key
            $table->unsignedSmallInteger('district_id')->nullable();
            $table->foreign('district_id')->references('district_id')->on('com_districts'); //Districts foreign key
            $table->unsignedSmallInteger('upazila_id')->nullable();
            $table->foreign('upazila_id')->references('upazila_id')->on('com__upazilas'); //upazilas foreign key
            $table->string('photo_ids', 255)->nullable();
            $table->text('content_heading');
            $table->text('content_sub_heading');
            $table->string('reporting_area', 255);
            $table->string('author_slugs', 255);
            $table->string('custom_byname' , 255);
            $table->text('seo_url');
            $table->text('seo_title');
            $table->string('img_bg_path', 255);
            $table->string('img_bg_caption', 255);
            $table->string('img_sm_path', 255);
            $table->string('img_sm_caption', 255);
            $table->text('content_details');
            $table->text('content_brief');
            $table->text('custom_brief');
            $table->string('prev_content_ids', 255);
            $table->text('quatation');
            $table->text('news_meta_keywords');
            $table->boolean('video_type');
            $table->string('sound_cloud_id', 255);
            $table->string('tags', 255);
            $table->string('place_tags', 255);
            $table->string('people_tags', 255);
            $table->string('timeline_tags', 255);
            $table->text('meta_details');
            $table->boolean('standout_tag')->default(2);
            $table->boolean('recent_status')->default(1);
            $table->boolean('instant_article')->default(1);
            $table->boolean('status')->default(1);
            $table->boolean('has_video')->default(1);
            $table->boolean('is_special')->default(2);
            $table->boolean('show_image')->default(1);
            $table->boolean('deletable')->default(1);
            $table->dateTime('show_time')->nullable();
            $table->string('instant_article_id', 50);
            $table->boolean('is_evergreen')->default(2);
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
        Schema::dropIfExists('bn__contents');
    }
}

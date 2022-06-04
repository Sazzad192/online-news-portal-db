<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComAudittrailBncontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_audittrail_bncontents', function (Blueprint $table) {
            
            $table->bigIncrements('audittrail_id');
            $table->string('name', 255);
            $table->ipAddress('ip');
            $table->boolean('action_type')->default(1);
            $table->dateTime('action_datetime')->nullable();
            $table->string('path_name', 255);
            $table->longText('query_details');
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
        Schema::dropIfExists('com_audittrail_bncontents');
    }
}

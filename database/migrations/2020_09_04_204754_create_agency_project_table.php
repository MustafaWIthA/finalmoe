<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_project', function (Blueprint $table) {
            //$table->id();
            $table->integer('agency_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->timestamps();
            $table->foreign('agency_id')->references('id')->on('agencies')
                  ->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('project')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_project');
    }
}

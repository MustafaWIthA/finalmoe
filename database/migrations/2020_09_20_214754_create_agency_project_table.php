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
            $table->bigIncrements('id');
            $table->foreignId('agency_id');
            $table->foreignId('project_id');
            $table->timestamps();

            $table->unique(['project_id','agency_id']);

            $table->foreign('agency_id')->references('id')->on('agencies')
                 ->onDelete('cascade');
             $table->foreign('project_id')->references('id')->on('projects')
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

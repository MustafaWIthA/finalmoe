<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_region', function (Blueprint $table) {
           // $table->id();
            $table->integer('region_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->timestamps();
            $table->foreign('region_id')->references('id')->on('regions')
                  ->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('project_region');
    }
}

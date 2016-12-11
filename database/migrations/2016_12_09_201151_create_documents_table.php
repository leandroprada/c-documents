<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('number',255);
            $table->string('revision',255);
            $table->string('revision_date',255);
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->integer('area_id')->unsigned()->index()->nullable();
            $table->integer('discipline_id')->unsigned()->index()->nullable();
            $table->integer('status_id')->unsigned()->index()->nullable();
            $table->integer('project_id')->unsigned()->index()->nullable();
            $table->integer('transmittal_id')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('documents');
    }
}

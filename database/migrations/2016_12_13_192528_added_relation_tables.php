<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedRelationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('document_user', function (Blueprint $table) {
        //     $table->integer('document_id')->unsigned()->index();
        //     $table->integer('user_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('division_user', function (Blueprint $table) {
        //     $table->integer('division_id')->unsigned()->index();
        //     $table->integer('user_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('document_transmittal', function (Blueprint $table) {
        //     $table->integer('document_id')->unsigned()->index();
        //     $table->integer('transmittal_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('document_status', function (Blueprint $table) {
        //     $table->integer('document_id')->unsigned()->index();
        //     $table->integer('status_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('deliverable_discipline', function (Blueprint $table) {
        //     $table->integer('deliverable_id')->unsigned()->index();
        //     $table->integer('discipline_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('discipline_document', function (Blueprint $table) {
        //     $table->integer('discipline_id')->unsigned()->index();
        //     $table->integer('document_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('discipline_user', function (Blueprint $table) {
        //     $table->integer('discipline_id')->unsigned()->index();
        //     $table->integer('user_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('transmittal_user', function (Blueprint $table) {
        //     $table->integer('transmittal_id')->unsigned()->index();
        //     $table->integer('user_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('project_user', function (Blueprint $table) {
        //     $table->integer('project_id')->unsigned()->index();
        //     $table->integer('user_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('area_project', function (Blueprint $table) {
        //     $table->integer('area_id')->unsigned()->index();
        //     $table->integer('project_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        //
        // Schema::create('division_project', function (Blueprint $table) {
        //     $table->integer('division_id')->unsigned()->index();
        //     $table->integer('project_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        //
        // Schema::create('discipline_division', function (Blueprint $table) {
        //     $table->integer('discipline_id')->unsigned()->index();
        //     $table->integer('division_id')->unsigned()->index();
        //     $table->timestamps();
        // });
        // Schema::create('role_user', function (Blueprint $table) {
        //     $table->integer('role_id')->unsigned()->index();
        //     $table->integer('user_id')->unsigned()->index();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
  Schema::dropIfExists('document_user');
  Schema::dropIfExists('division_user');
  Schema::dropIfExists('document_transmittal');
  Schema::dropIfExists('document_status');
  Schema::dropIfExists('deliverable_discipline');
  Schema::dropIfExists('discipline_document');
  Schema::dropIfExists('discipline_user');
  Schema::dropIfExists('transmittal_user');
  Schema::dropIfExists('project_user');
  Schema::dropIfExists('area_project');
  Schema::dropIfExists('division_project');
  Schema::dropIfExists('discipline_division');
  Schema::dropIfExists('role_user');
    }
}

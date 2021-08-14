<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItsupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itsupports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('office_id');
            $table->string('sid')->nullable();
            $table->string('name')->nullable();
            $table->string('jobdescription')->nullable();
            $table->timestamps();

            $table->index('office_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itsupports');
    }
}

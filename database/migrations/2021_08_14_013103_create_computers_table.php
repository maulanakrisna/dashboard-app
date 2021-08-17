<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('office_id');
            $table->string('employee_name');
            $table->string('sid')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('monitor')->nullable();
            $table->string('processor')->nullable();
            $table->string('memory')->nullable();
            $table->string('storage')->nullable();
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
        Schema::dropIfExists('computers');
    }
}

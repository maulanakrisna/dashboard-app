<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItsupportSppdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itsupport_sppds', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->date('tanggal');
            $table->string('personil');
            $table->string('tujuan');
            $table->integer('lama');
            $table->longText('keperluan');
            $table->double('biaya', 12, 2);
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
        Schema::dropIfExists('itsupport_sppds');
    }
}

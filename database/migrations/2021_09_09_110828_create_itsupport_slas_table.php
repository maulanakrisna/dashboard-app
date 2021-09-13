<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItsupportSlasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itsupport_slas', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->enum('spesifikasi',array('Analyst','Field Engineer','Field Support'));
            $table->string('personil');
            $table->integer('total_ticket');
            $table->integer('tiket_oversla');
            $table->double('pencapaian_sla', 3, 2);
            $table->double('durasi_over', 3, 2);
            $table->double('biaya_restitusi', 12, 2);
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
        Schema::dropIfExists('itsupport_slas');
    }
}

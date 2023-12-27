<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_dai_diens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tai_khoan_id')->unsigned();
            $table->foreign('tai_khoan_id')
            ->references('id')
            ->on('tai_khoans')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('image',255);
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
        Schema::dropIfExists('hinh_dai_diens');
    }
};
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
        Schema::create('cau_hoi_luot_chois', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('luot_choi_id')->unsigned();
            $table->foreign('luot_choi_id')
                ->references('id')
                ->on('luot_chois')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('cau_hoi_id')->unsigned();
            $table->foreign('cau_hoi_id')
                ->references('id')
                ->on('cau_hois')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('phuong_an');
            $table->integer('diem');
            $table->timestamps(); // Dòng này tự động thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cau_hoi_luot_chois');
    }
};
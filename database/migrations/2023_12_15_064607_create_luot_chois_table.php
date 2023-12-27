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
        Schema::create('luot_chois', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nguoi_choi_id')->unsigned();
            $table->foreign('nguoi_choi_id')
                ->references('id')
                ->on('nguoi_chois')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('so_cau');
            $table->integer('diem');
            $table->text('ngay_gio');
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
        Schema::dropIfExists('luot_chois');
    }
};
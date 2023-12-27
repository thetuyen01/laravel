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
        Schema::create('linh_vucs', function (Blueprint $table) {
            $table->id();
            $table -> string('ten_linh_vuc');
            $table-> bigInteger('nhom_linh_vuc_id')->unsigned();
            $table->foreign('nhom_linh_vuc_id')
            ->references('id')
            ->on('nhom_linh_vucs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamp('delete_at')->nullable();
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
        Schema::dropIfExists('linh_vucs');
    }
};
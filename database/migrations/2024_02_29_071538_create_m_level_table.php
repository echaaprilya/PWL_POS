<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_level', function (Blueprint $table) {
            $table->id('level_id'); //membuat kolom primary key dgn nama level_id yg auto increment
            $table->string('level_kode', 10)->unique(); //membuat kolok level_kode dgn tipe data varchar(10) dan unique
            $table->string('level_nama', 100); //membuat kolom_nama dgn tipe data varchar(100)
            $table->timestamps(); //membuat klom create_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_level');
    }
};

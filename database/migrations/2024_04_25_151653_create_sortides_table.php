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
        Schema::create('sortides', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('descripcio');
            $table->string('transport');
            $table->string('adreca');
            $table->dateTime('data_inici');
            $table->dateTime('data_fi');
            $table->double('preu');
            $table->integer('id_estat');
            $table->integer('id_professor_creat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sortides');
    }
};

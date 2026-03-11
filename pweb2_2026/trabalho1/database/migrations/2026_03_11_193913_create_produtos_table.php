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
    Schema::create('produtos', function (Blueprint $table) {
        $table->id();
        $table->string('nome', 50);
        $table->string('descricao', 200);
        $table->integer('preco');
        $table->string('categoria', 50)->default('0');
        $table->string('mecanismo', 50)->default('0');
        $table->unsignedBigInteger('categoria_id')->default(0);
        $table->unsignedBigInteger('mecanismo_id')->default(0);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};

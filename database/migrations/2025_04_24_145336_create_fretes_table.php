<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('fretes', function (Blueprint $table) {
        $table->id();
        $table->string('nome_cliente');
        $table->float('peso');
        $table->float('distancia');
        $table->string('tipo_frete');
        $table->decimal('valor_total', 10, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fretes');
    }
};

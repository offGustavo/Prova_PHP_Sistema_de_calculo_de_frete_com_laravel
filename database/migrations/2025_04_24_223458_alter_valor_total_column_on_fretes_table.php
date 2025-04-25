<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterValorTotalColumnOnFretesTable extends Migration
{
    public function up()
    {
        Schema::table('fretes', function (Blueprint $table) {
            $table->float('valor_total')->change();
        });
    }

    public function down()
    {
        Schema::table('fretes', function (Blueprint $table) {
            $table->decimal('valor_total', 10, 2)->change();
        });
    }
}


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
        /*Schema::table('incomes', function (Blueprint $table) {
            //
        });*/
        Schema::table('incomes', function (Blueprint $table) {
            $table->string('category')->after('amount'); // Campo para categoría
            $table->date('date')->after('category'); // Campo para la fecha del ingreso
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*Schema::table('incomes', function (Blueprint $table) {
            //
        });*/

        Schema::table('incomes', function (Blueprint $table) {
            $table->dropColumn(['category', 'date']);
        });
    }
};

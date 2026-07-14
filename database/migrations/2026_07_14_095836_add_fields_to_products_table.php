<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {

            $table->enum('condition', ['Neu', 'Gebraucht'])
                ->default('Neu')
                ->after('price');

            $table->integer('gross_weight')
                ->nullable()
                ->after('condition');

            $table->tinyInteger('axles')
                ->nullable()
                ->after('gross_weight');

        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            $table->dropColumn([
                'condition',
                'gross_weight',
                'axles'
            ]);

        });
    }
};
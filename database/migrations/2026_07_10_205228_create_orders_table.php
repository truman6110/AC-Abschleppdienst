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
        Schema::create('orders', function (Blueprint $table) {

            $table->id();

            $table->foreignId('product_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('order_number')->unique();

            $table->string('first_name');

            $table->string('last_name');

            $table->string('email');

            $table->string('phone');

            $table->string('street');

            $table->string('postal_code');

            $table->string('city');

            $table->string('country');

            $table->integer('quantity')->default(1);

            $table->text('message')->nullable();

            $table->enum('status', [
                'Neu',
                'In Bearbeitung',
                'Bestätigt',
                'Versendet',
                'Abgeschlossen',
                'Storniert'
            ])->default('Neu');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
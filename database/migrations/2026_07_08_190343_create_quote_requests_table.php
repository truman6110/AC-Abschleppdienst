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
        Schema::create('quote_requests', function (Blueprint $table) {

            $table->id();

            $table->foreignId('product_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('firstname');

            $table->string('lastname');

            $table->string('email');

            $table->string('phone')->nullable();

            $table->string('company')->nullable();

            $table->text('message');

            $table->enum('status', [
                'new',
                'contacted',
                'completed',
                'cancelled'
            ])->default('new');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};
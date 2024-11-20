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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->date('transaction_date')->nullable();
            $table->date('posted_date')->nullable();
            $table->string('card_number')->nullable();
            $table->string('Category')->nullable();
            $table->string('debit')->nullable();
            $table->string('credit')->nullable();
            $table->string('other')->nullable()->default(null);
            $table->foreignIdFor(\App\Models\Csv::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};

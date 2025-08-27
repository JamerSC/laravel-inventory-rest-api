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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // product name
            // $table->string('sku')->unique() // product stock unit keeping
            $table->text('description')->nullable(); // product description
            $table->integer('quantity')->default(0); // product quantity
            //$table->decimal('price', 10, 2); // product price
            $table->string('category')->nullable(); //product category
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

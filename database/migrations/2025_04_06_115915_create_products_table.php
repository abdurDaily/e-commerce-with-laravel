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

            // Product Basic Info
            $table->string('product_title');
            $table->string('product_slug')->unique();
            $table->string('product_code')->unique();
            $table->string('product_img');

            // Pricing
            $table->decimal('product_price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();

            // Stock & status
            $table->unsignedInteger('product_stock')->default(0);
            // $table->unsignedInteger('product_qty')->default(1);
            $table->enum('product_status', ['active', 'inactive'])->default('inactive');

            // Foreign key to categories table (category_id instead of sub_category_title)
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Foreign key

            // Features and content
            $table->json('product_features')->nullable();
            $table->text('product_details')->nullable();
            $table->text('product_qsn')->nullable();
            $table->text('product_review')->nullable();
            
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

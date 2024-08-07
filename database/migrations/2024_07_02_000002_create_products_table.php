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
			$table->string('splcode', 20);
            $table->string('sku', 50);
			
			// NAMEs
			$table->string('enname');
            $table->string('frname')->nullable();
            $table->string('intname')->nullable();
			
			// Categories
			$table->integer('main_cat')->nullable();
			$table->integer('cat')->nullable();
			$table->integer('sub_cat')->nullable();
			
			// Other Attributes
			$table->string('form')->nullable();
			$table->integer('qty_in_box')->default(1);
			$table->integer('pres_needed')->default(0);
			$table->datetime('expiry')->nullable();
			$table->string('brand', 150)->nullable();
			$table->text('dosage')->nullable();
			$table->string('weight')->nullable();
			$table->text('age_wt_recommend')->nullable();
			$table->text('description')->nullable();
			$table->text('usage')->nullable();
			$table->text('contra_indication')->nullable();			
			$table->text('ingredients')->nullable();
			$table->text('precautions')->nullable();
			$table->text('side_effects')->nullable();
			$table->text('route_of_administration')->nullable(); 
			$table->text('storage')->nullable();
			$table->string('lot_number', 150)->nullable();
			
			// Price, TAX, Inventory
			$table->double('unit_price')->default(0);
			$table->double('vendor_price')->default(0);
			$table->double('vat')->default(0);
			$table->biginteger('inventory')->default(0);
			$table->biginteger('minimum_inventory')->default(0);

			$table->integer('status')->default(1);
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

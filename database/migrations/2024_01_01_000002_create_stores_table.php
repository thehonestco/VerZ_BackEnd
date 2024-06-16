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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
			$table->string('splcode', 20);
            $table->string('name');
			$table->string('license_no');
			$table->string('director_name')->nullable();
			$table->string('director_no')->nullable();
			$table->string('pharmacist_id_no')->nullable();
			$table->string('address', 500)->nullable();
			$table->string('niu_no')->nullable();
			$table->integer('status')->default(1);
			$table->timestamps();
        });
		
		Schema::create('store_user', function (Blueprint $table) {
            $table->id();
			$table->integer('store_id');
			$table->integer('user_id');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
        Schema::dropIfExists('store_user');
    }
};

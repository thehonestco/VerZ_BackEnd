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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
			$table->string('splcode', 20);
            $table->string('enname', 255);
            $table->string('frname', 255)->nullable();
			$table->integer('parent_id');
			$table->integer('status')->default(1);
			$table->timestamps();
        });
	
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

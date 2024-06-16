<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
			$table->string('splcode', 20);
            $table->integer('type')->default(1); // 1- Family, 2 - Association, 3 - Company
            $table->string('name')->unique();
            $table->string('nickname')->nullable();
			$table->integer('status')->default(1); // 1- STATUS, 0 - Inactive
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};

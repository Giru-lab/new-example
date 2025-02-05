<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_listings', function (Blueprint $table) { // ✅ Fix `Stable` to `$table`
            $table->id(); // ✅ Fix `→` to `->`
            $table->string('title');
            $table->string('salary');
            $table->timestamps(); // ✅ Fix missing parentheses
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings'); // ✅ Fix incorrect spacing and syntax
    }
};

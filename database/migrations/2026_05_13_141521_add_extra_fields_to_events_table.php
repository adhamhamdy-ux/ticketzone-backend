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
        Schema::table('events', function (Blueprint $table) {
           $table->string('badge')->nullable();
        $table->string('label')->nullable();
        $table->string('currency')->default('EGP');
        $table->integer('sold_pct')->default(0);
        $table->boolean('hot')->default(false);
        $table->boolean('featured')->default(false);
        $table->json('tickets')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
        $table->dropColumn(['badge','label','currency','sold_pct','hot','featured','tickets']);
        });
    }
};

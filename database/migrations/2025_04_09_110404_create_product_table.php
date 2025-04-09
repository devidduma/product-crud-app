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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer("bleachingCode");
            $table->string("defaultLanguage");
            $table->integer("dryCleaningCode");
            $table->integer("dryingCode");
            $table->integer("fasteningTypeCode");
            $table->integer("ironingCode");
            $table->string("productID");
            $table->integer("pulloutTypeCode");
            $table->integer("sapPacket");
            $table->boolean("updateImages");
            $table->integer("waistlineCode");
            $table->integer("washabilityCode");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

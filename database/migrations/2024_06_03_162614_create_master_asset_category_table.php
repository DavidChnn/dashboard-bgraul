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
        Schema::create('master_asset_category', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('assetCategory');
            $table->int('assetClass');
            $table->string('assetGroup');
            $table->int('depreciationCom');
            $table->int('depreciationFis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_asset_category');
    }
};

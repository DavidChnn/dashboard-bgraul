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
        Schema::create('cip', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('assetCodeAccounting')->nullable();
            $table->string('assetCodeEnginery');
            $table->string('assetCategory');
            $table->integer('assetClass');
            $table->string('assetGroup');
            $table->integer('cipCode')->nullable();
            $table->text('assetDescription');
            $table->integer('subAsset');
            $table->string('picAsset');
            $table->date('acquisitionCIP');
            $table->date('deadline');
            $table->date('depreciationStart');
            $table->date('depreciationEnd');
            $table->bigInteger('currentBookValue');
            $table->string('assetCondition');
            $table->string('assetStatus');
            $table->string('costCenter');
            $table->string('product');
            $table->string('department');
            $table->string('departmentDetail');
            $table->string('vendor');
            $table->string('site');
            $table->string('line');
            $table->string('proccess');
            $table->integer('quantity');
            $table->string('uom');
            $table->bigInteger('acquisitionValue');
            $table->string('cipNumber')->nullable();
            $table->string('budgetNumber');
            $table->string('poNumber');
            $table->string('user');
            $table->string('assetPicture')->nullable();
            $table->string('statusRequest');
            $table->boolean('statusConfirmation');
            $table->boolean('outstandingStatus');
            $table->string('inventoryNumber')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cip');
    }
};

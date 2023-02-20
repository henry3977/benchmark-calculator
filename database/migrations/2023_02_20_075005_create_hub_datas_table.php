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
        Schema::create('hub_datas', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('project_name');
            $table->tinyInteger('project_area_code');
            $table->string('project_dimension_code');
            $table->integer('actual_cost_amount');
            $table->float('site_area');
            $table->float('building_area');
            $table->string('structure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hub_datas');
    }
};

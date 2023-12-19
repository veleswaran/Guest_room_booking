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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("property_id")->notNullable();
            $table->foreign('property_id')->references('id')->on("properties")->onDelete("cascade");
            $table->string("room_no");
            $table->integer("num_beds");
            $table->double("rent");
            $table->integer("min_stay");
            $table->integer('max_stay');
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

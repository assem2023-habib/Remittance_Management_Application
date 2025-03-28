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
        Schema::create('parcel__histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parcel_id')->constrained()->onDelete('cascade');
            $table->string('status');
            // $table->unsignedBigInteger('created_by')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->string('created_by_type')->nullable();
            $table->enum('operation', [
                "insert",
                "update",
                "delete"
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcel__histories');
    }
};

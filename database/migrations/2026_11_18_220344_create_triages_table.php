
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('triages', function (Blueprint $table) {

            $table->id();

            // Sinais vitais
            $table->decimal('temperature', 4, 1)->nullable();
            $table->string('bloodPressure')->nullable();
            $table->unsignedSmallInteger('heartRate')->nullable();
            $table->unsignedSmallInteger('respiratoryRate')->nullable();
            $table->decimal('oxygenSaturation', 5, 2)->nullable();
            $table->decimal('weight', 6, 2)->nullable();
            $table->decimal('height', 5, 2)->nullable();
            $table->decimal('bloodGlucose', 6, 2)->nullable();
            $table->text('observations')->nullable();
            $table->enum('riskClassification', ['emergency', 'very_urgent', 'urgent', 'less_urgent', 'non_urgent'])->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('triages');
    }
};

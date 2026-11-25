
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
{
    Schema::create('nurses', function (Blueprint $table) {
        $table->id();

        $table->string('name');
        $table->date('dateOfBirth')->nullable();
        $table->string('gender')->nullable();
        $table->string('BI')->nullable();
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->string('photo')->nullable();

        $table->foreignId('specialty_id')
              ->nullable()
              ->constrained('specialties')
              ->nullOnDelete();

        $table->string('professionalRegistration')->nullable();
        $table->string('position')->nullable();

        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('nurses');
    }
};

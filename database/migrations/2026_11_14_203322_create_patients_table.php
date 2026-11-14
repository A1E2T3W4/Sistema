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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("email")->unique();
            $table->string("address");
            $table->string("BI")->unique();
            $table->string("province");
            $table->string("phone")->nullable();
            $table->string("nationality")->default("Angolana");
            $table->date("birth_date");
            $table->enum("gender", ["Masculino", "Feminino"]);
            $table->enum("status", ["Ativo", "Inativo"])->default("Ativo");
            $table->enum("marital_status", ["Solteiro(a)", "Casado(a)", "Divorciado(a)", "Viúvo(a)"]);
            $table->enum("blood_type", ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"]);
            $table->text("allergies")->nullable();
            $table->text("diseases")->nullable();
            $table->text("medications")->nullable();
            $table->string("foto")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};

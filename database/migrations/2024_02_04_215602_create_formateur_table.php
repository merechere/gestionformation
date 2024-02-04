<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nomFormateur',100);
            $table->string('prenomFormateur',100);
            $table->string('telephoneFormateur',100);
            $table->string('adresseFormateur',100);
            $table->string('emailFormateu',100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formateur');
    }
};

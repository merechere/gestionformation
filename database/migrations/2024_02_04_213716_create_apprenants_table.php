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
        Schema::create('apprenants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('formation_id');
            $table->foreignId('inscription_id');
            $table->string('matriculeApprenenat',30);
            $table->string('nomApprenenat',100);
            $table->string('prenomApprenenat',100);
            $table->string('adresseApprenenat',100);
            $table->string('telephoneApprenenat',100);
            $table->string('emailApprenena',100);
            $table->string('PasswordApprenenat',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php artisan make:migration create_secretaires_table

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants');
    }
};

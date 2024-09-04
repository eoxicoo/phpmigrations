<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new
 class extends Migration
{
    
    public function up(): void
    {
        Schema::create('times', function (Blueprint $table) {
            $table->id('id_credenciamento');
            $table->string('name_team', 80);
            $table->date('date_fundation');
            $table->string('state_team');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('times');
    }
};

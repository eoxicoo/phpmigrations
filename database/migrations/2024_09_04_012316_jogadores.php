<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('jogadores', function (Blueprint $table)
    {
        $table->increments('id');
            		$table->string('nome', 80);
            		$table->string('time', 80);
            		$table->integer('registro');
            		$table->timestamps();
        	});
    }
    public function down()
    {
        	Schema::dropIfExists('jogadores');
    }
};

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
        Schema::create('Rogzites', function(Blueprint $table){
            $table->int('id');
            $table->string('vezeteknev', 20);
            $table->string('kereszt', 20);
            $table->int('szulev',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rogzites');
    }
};

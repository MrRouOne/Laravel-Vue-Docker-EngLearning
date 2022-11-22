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
        Schema::create('word_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('word_id')->constrained('words')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUUid('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status',['learn','learned','knew']);
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
        Schema::dropIfExists('word_users');
    }
};

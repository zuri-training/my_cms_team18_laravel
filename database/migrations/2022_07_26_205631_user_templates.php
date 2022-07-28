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
        Schema::create('user_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('content');
            $table->foreignId('original_template')->references('id')->on('original_templates')->cascadeOnUpdate();
            $table->foreignId('user')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->tinyInteger('status', false)->default(0); // published-1, hidden-0
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
        Schema::dropIfExists('user_templates');
    }
};

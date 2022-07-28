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
        Schema::create('original_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('content');
            $table->string('preview_image')->nullable();
            $table->foreignId('author')->references('id')->on('users')->cascadeOnUpdate();
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
        Schema::dropIfExists('original_templates');
    }
};

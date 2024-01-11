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
        Schema::create('list_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id');
            $table->foreignId('category_id');
            $table->foreignId('publisher_id');
            $table->foreignId('publication_year_id');
            $table->string('cover');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
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
        Schema::dropIfExists('list_books');
    }
};

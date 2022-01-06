<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('url');
            $table->string('type');
            $table->string('language');
            $table->json('genres');
            $table->string('status');
            $table->smallInteger('runtime')->nullable();
            $table->smallInteger('averageRuntime')->nullable();
            $table->date('premiered');
            $table->date('ended')->nullable();
            $table->string('officialSite')->nullable();
            $table->json('schedule');
            $table->json('rating');
            $table->integer('weight');
            $table->json('network')->nullable();
            $table->json('webChannel')->nullable();
            $table->string('dvdCountry')->nullable();
            $table->json('externals');
            $table->json('image')->nullable();
            $table->longText('summary')->nullable();
            $table->timestamp('updated');
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
        Schema::dropIfExists('shows');
    }
}

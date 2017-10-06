<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            /*
             * 1 star: inhoud van het veld fa-stars:
             *   <i class="fa fa-star filled" aria-hidden="true"></i>
             *
             * 4 stars: inhoud van het veld fa-stars
             *    <i class="fa fa-star filled" aria-hidden="true"></i>
             *   <i class="fa fa-star filled" aria-hidden="true"></i>
             *   <i class="fa fa-star filled" aria-hidden="true"></i>
             *   <i class="fa fa-star filled" aria-hidden="true"></i>
             *
             * Wordt bepaald aan de hand van een aantal dat wordt meegegeven in een formulier inputveld van 1 tot 5
             * halfjes zijn ook toegelaten
             */
            $table->text('stars');
            $table->string('rating');
            $table->string('selectkey');
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
        Schema::dropIfExists('resume_skills');
    }
}

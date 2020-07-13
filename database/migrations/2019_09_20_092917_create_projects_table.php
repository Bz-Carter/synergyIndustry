<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('descriptionfr');
            $table->string('slug');
            $table->string('client');
            $table->text('about');
            $table->text('aboutfr');
            $table->string('image_01');
            $table->string('image_02');
            $table->string('image_03');
            $table->integer('service_id');
            $table->softDeletes();
            $table->string('dateproject')->nullable();
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
        Schema::dropIfExists('projects');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("level_id");
            $table->string("code");
            $table->decimal("latitude", 10,7);
            $table->decimal("longitude", 10, 7);
            $table->timestamps();

            $table->foreign("level_id")->references("id")->on("levels")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}

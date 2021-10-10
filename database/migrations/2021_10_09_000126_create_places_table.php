<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("city_id");
            $table->unsignedBigInteger("district_id");
            $table->decimal("latitude", 10,7);
            $table->decimal("longitude", 10, 7);
            $table->timestamps();

            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->foreign("city_id")->references("id")->on("areas")->onDelete("cascade");
            $table->foreign("district_id")->references("id")->on("areas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}

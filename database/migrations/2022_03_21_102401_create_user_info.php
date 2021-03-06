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
        Schema::create('user_info', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string("phone", 32)->nullable();
            $table->string("gender", 10)->nullable();
            $table->date("date_of_birth")->nullable();
            $table->float("weight")->nullable();
            $table->float("height")->nullable();
            $table->timestamps();

            $table->primary("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_info');
    }
};

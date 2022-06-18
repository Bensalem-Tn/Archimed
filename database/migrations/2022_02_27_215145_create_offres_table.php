<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->integer('id_demande');
            $table->integer('architect_id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price',10,5)->nullable();
            $table->text('attached_file_1')->nullable();
            $table->text('attached_file_2')->nullable();
            $table->text('attached_file_3')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('offres');
    }
}

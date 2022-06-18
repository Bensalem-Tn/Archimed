<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->text('title');
            $table->text('description')->nullable();
            $table->integer('id_service');
            $table->decimal('min_budget',10,5)->nullable();
            $table->decimal('max_budget',10,5)->nullable();
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
        Schema::dropIfExists('demandes');
    }
}

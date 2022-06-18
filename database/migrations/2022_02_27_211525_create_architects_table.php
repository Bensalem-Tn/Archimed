<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchitectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('architects', function (Blueprint $table) {
                $table->id();
                 $table->string('name' );
                 $table->string('email')->unique();
                 $table->text('description')->nullable();
                 $table->text('adresse')->nullable();
                 $table->string('phone')->unique();
                 $table->text('photo')->nullable();
                 $table->string('password');
                 $table->integer('status')->default(1);
                 $table->string('last_active_connection')->nullable();
                 $table->string('last_ip_connection')->nullable();
                 $table->integer('category' )->nullable();
                 $table->text('fcm')->nullable();
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
        Schema::dropIfExists('architects');
    }
}

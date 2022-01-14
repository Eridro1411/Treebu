<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grounds', function (Blueprint $table) {
            $table->id();
            $table->string('common')->nullable();
            $table->string('photo')->nullable();
            $table->integer('dimension')->nullable();
            $table->string('cadastral_sheet')->nullable();
            $table->string('cadastral_map')->nullable();
            $table->string('type_ground')->nullable();
            $table->string('irrigation')->nullable();
            $table->string('offer_type')->nullable();
            $table->double('offer_fee')->nullable();
            $table->boolean('availability')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grounds');
    }
}

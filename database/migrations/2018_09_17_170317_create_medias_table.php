<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->string('name');
            $table->string('domain');
            $table->string('promotion_url');
            $table->string('logo')->default('');
            $table->string('description')->default('');
            $table->string('key', 16);
            $table->string('secret', 16);
            $table->string('verification_key', 32);
            $table->boolean('verified')->default(false);
            $table->boolean('providing')->default(true);
            $table->boolean('consuming')->default(true);
            $table->unsignedInteger('consume_bid')->default(1);
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
        Schema::dropIfExists('medias');
    }
}

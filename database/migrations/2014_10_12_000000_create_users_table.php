<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->integer('auction')->default(0);
            $table->integer('auction_q')->default(1);
            $table->integer('role')->default(0);
            $table->integer('eternite1')->default(0);
            $table->integer('flour')->default(0);
            $table->integer('egg')->default(0);
            $table->integer('meat')->default(0);
            $table->integer('oil')->default(0);
            $table->integer('iron')->default(0);
            $table->integer('wood')->default(0);
            $table->integer('bread')->default(0);
            $table->integer('cloth')->default(0);
            $table->integer('bakpao')->default(0);
            $table->integer('omelette')->default(0);
            $table->integer('steak')->default(0);
            $table->integer('sword')->default(0);
            $table->integer('armor')->default(0);
            $table->integer('furniture')->default(0);
            $table->integer('sail')->default(0);
            $table->integer('ration')->default(0);
            $table->integer('coal')->default(0);
            $table->integer('cannon')->default(0);
            $table->integer('cannonball')->default(0);
            $table->integer('news6')->default(0);
            $table->integer('luckydraw')->default(0);
            $table->integer('ship1')->default(0);
            $table->integer('ship2')->default(0);
            $table->integer('ship3')->default(0);
            $table->integer('ship4')->default(0);
            $table->integer('ship5')->default(0);
            $table->integer('ship6')->default(0);
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
        Schema::dropIfExists('users');
    }
}

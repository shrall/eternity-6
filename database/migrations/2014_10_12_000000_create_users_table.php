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
            $table->integer('auction_c')->default(0);
            $table->integer('auction_q')->default(1);
            $table->integer('role')->default(0);
            $table->integer('eternite1')->default(0);
            $table->integer('flour')->default(0);
            $table->integer('egg')->default(0);
            $table->integer('meat')->default(0);
            $table->integer('oil')->default(0);
            $table->integer('iron')->default(0);
            $table->integer('wood')->default(0);
            $table->integer('cloth')->default(0);
            $table->integer('bread')->default(0);
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
            $table->integer('coal_c')->default(0);
            $table->integer('cannon_c')->default(0);
            $table->integer('cannonball_c')->default(0);
            $table->integer('news6')->default(0);
            $table->integer('luckydraw')->default(0);
            $table->integer('ship1')->default(0);
            $table->integer('ship2')->default(0);
            $table->integer('ship3')->default(0);
            $table->integer('ship4')->default(0);
            $table->integer('ship5')->default(0);
            $table->integer('ship6')->default(0);
            $table->integer('escape')->default(0);
            $table->integer('eternite2')->default(0);
            $table->integer('easy')->default(0);
            $table->text('easy1')->nullable();
            $table->text('easy2')->nullable();
            $table->text('easy3')->nullable();
            $table->text('easy4')->nullable();
            $table->text('easy5')->nullable();
            $table->text('easy6')->nullable();
            $table->text('easy7')->nullable();
            $table->text('easy8')->nullable();
            $table->text('easy9')->nullable();
            $table->text('easy10')->nullable();
            $table->integer('easy1_c')->default(0);
            $table->integer('easy2_c')->default(0);
            $table->integer('easy3_c')->default(0);
            $table->integer('easy4_c')->default(0);
            $table->integer('easy5_c')->default(0);
            $table->integer('easy6_c')->default(0);
            $table->integer('easy7_c')->default(0);
            $table->integer('easy8_c')->default(0);
            $table->integer('easy9_c')->default(0);
            $table->integer('easy10_c')->default(0);
            $table->integer('medium')->default(0);
            $table->text('medium1')->nullable();
            $table->text('medium2')->nullable();
            $table->text('medium3')->nullable();
            $table->text('medium4')->nullable();
            $table->text('medium5')->nullable();
            $table->text('medium6')->nullable();
            $table->integer('medium1_c')->default(0);
            $table->integer('medium2_c')->default(0);
            $table->integer('medium3_c')->default(0);
            $table->integer('medium4_c')->default(0);
            $table->integer('medium5_c')->default(0);
            $table->integer('medium6_c')->default(0);
            $table->integer('hard')->default(0);
            $table->text('hard1')->nullable();
            $table->integer('hard1_c')->default(0);
            $table->integer('map')->default(0);
            $table->integer('map1')->default(0);
            $table->integer('map2')->default(0);
            $table->integer('map3')->default(0);
            $table->integer('map4')->default(0);
            $table->integer('map5')->default(0);
            $table->integer('map6')->default(0);
            $table->integer('map7')->default(0);
            $table->integer('map8')->default(0);
            $table->integer('map9')->default(0);
            $table->integer('map10')->default(0);
            $table->integer('map11')->default(0);
            $table->integer('map12')->default(0);
            $table->integer('map13')->default(0);
            $table->integer('map14')->default(0);
            $table->integer('map15')->default(0);
            $table->integer('map16')->default(0);
            $table->integer('map17')->default(0);
            $table->integer('map18')->default(0);
            $table->integer('map19')->default(0);
            $table->integer('map20')->default(0);
            $table->integer('map_type')->default(1);
            $table->integer('question_pack')->default(1);
            $table->integer('referral_code')->default(0);
            $table->integer('referral_answer')->default(0);
            $table->integer('timestwo')->default(0);
            $table->integer('teleport')->default(0);
            $table->integer('freepass')->default(0);
            $table->integer('magnet')->default(0);
            $table->integer('dice1')->default(0);
            $table->integer('dice2')->default(0);
            $table->integer('dice3')->default(0);
            $table->integer('dice4')->default(0);
            $table->integer('dice5')->default(0);
            $table->integer('dice6')->default(0);
            $table->integer('safe')->default(0);
            $table->integer('slide')->default(0);
            $table->integer('circuit')->default(0);
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

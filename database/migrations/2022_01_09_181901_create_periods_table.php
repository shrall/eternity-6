<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->integer('name');
            $table->integer('name2')->default(0);
            $table->text('news');
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
            $table->integer('flour_math')->default(0);
            $table->integer('egg_math')->default(0);
            $table->integer('meat_math')->default(0);
            $table->integer('oil_math')->default(0);
            $table->integer('iron_math')->default(0);
            $table->integer('wood_math')->default(0);
            $table->integer('bread_math')->default(0);
            $table->integer('cloth_math')->default(0);
            $table->integer('bakpao_math')->default(0);
            $table->integer('omelette_math')->default(0);
            $table->integer('steak_math')->default(0);
            $table->integer('sword_math')->default(0);
            $table->integer('armor_math')->default(0);
            $table->integer('furniture_math')->default(0);
            $table->integer('sail_math')->default(0);
            $table->integer('flour_change')->default(0);
            $table->integer('egg_change')->default(0);
            $table->integer('meat_change')->default(0);
            $table->integer('oil_change')->default(0);
            $table->integer('iron_change')->default(0);
            $table->integer('wood_change')->default(0);
            $table->integer('bread_change')->default(0);
            $table->integer('cloth_change')->default(0);
            $table->integer('bakpao_change')->default(0);
            $table->integer('omelette_change')->default(0);
            $table->integer('steak_change')->default(0);
            $table->integer('sword_change')->default(0);
            $table->integer('armor_change')->default(0);
            $table->integer('furniture_change')->default(0);
            $table->integer('sail_change')->default(0);
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
        Schema::dropIfExists('periods');
    }
}

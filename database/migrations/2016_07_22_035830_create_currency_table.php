<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id')->comment('Игровые валюты');
	    $table->string('code',30)->comment('Код');
            $table->string('name',255)->comment('gold, мана, значёк ГТО, рейтин и тп');
            $table->text('description')->nullable()->comment('desc');
            $table->string('function')->nullable()->comment('функции пересчитывает количество начисляемой валюты.null 1=1');
            $table->text('options')->nullable()->comment('прочие настройки');
            //$table->binary('photo')->nullable()->comment('Картинка валюты');//file, name=id
            $table->boolean('top_menu')->default(0)->comment('показывать в меню');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->integer('currency_type_id')->unsigned();
            $table->foreign('currency_type_id')->references('id')->on('currency_types')->onDelete('cascade');
            $table->integer('organization_id')->default(0)->nullable()->unsigned()->comment('Организация');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->unique('code','organization_id');
            $table->unique('name','organization_id');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('currencies', function (Blueprint $table) {
        });
    }
}

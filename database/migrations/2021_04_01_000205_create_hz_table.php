<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // php artisan migrate - делает миграцию
        // php artisan migrate:refresh - переделывает миграцию, если нам необходимо удалить некоторые поля
        Schema::create('hz', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->integer('number');
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
        Schema::dropIfExists('hz');
    }
}

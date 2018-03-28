<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Onlinepets\ConditionalMigrations\Contracts\ConditionalMigration;

class CreateTimedUsersTwoTable extends Migration implements ConditionalMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timed_users_two', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
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
        Schema::dropIfExists('timed_users_two');
    }

    /**
     * @return bool
     */
    public function shouldRun(): bool
    {
        return false;
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_name')->default();
            $table->string('team_name');
            //$table->integer('no_of_members');
            $table->string('Membername_1');
            $table->string('email_1');
            $table->integer('contact_1')->unique();
            $table->string('college_name1');

            $table->string('Membername_2');
            $table->string('email_2');
            $table->integer('contact_2')->unique();
            $table->string('college_name2');

            $table->string('Membername_3');
            $table->string('email_3');
            $table->integer('contact_3')->unique();
            $table->string('college_name3');

            $table->string('Membername_4')->nullable();
            $table->string('email_4')->nullable();
            $table->integer('contact_4')->unique();
            $table->string('college_name4')->nullable();
            
            //$table->integer('payment')->nullable();
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
        Schema::dropIfExists('event_participants');
    }
}

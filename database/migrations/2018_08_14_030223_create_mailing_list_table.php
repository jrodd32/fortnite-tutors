<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailingListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailing_list', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('email')->unique();
          $table->enum('account_type', ['student', 'tutor', 'both']);
          $table->boolean('email_verified');
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
      Schema::dropIfExists('mailing_list');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('membershipNo')->nullable();
            $table->string('name');
            $table->string('nric/passport')->unique();
            $table->string('category');
            $table->string('address');
            $table->string('postcode');
            $table->string('state');
            $table->string('mobile');
            $table->string('email');
            $table->Date('dateJoined');
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
        Schema::dropIfExists('members');
    }
}

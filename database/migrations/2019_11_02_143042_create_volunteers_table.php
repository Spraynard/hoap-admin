<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('firstName');
            $table->string('lastName');
            $table->date('dob');

            $table->enum('gender', ['Male', 'Female', 'Other'])
                ->default('Other');

            $table->string('email'); // validation?
            $table->string('phone'); // validation?

            $table->date('start-date')
                ->nullable();
            $table->boolean('active')
                ->default(false);
            $table->boolean('backgroundCheck')
                ->default(false);

            $table->enum('ethnicity', ['White', 'Hispanic', 'Black', 'Asian or Pacific Islander', 'Native American or Alaskan Native', 'Other'])
                ->default('Other');

            $table->boolean('receiveMarketingMail')
                ->default(true);

            // hasOne address
            // $table->foreign('address_id')->references('id')->on('addresses');

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
        Schema::dropIfExists('volunteers');
    }
}

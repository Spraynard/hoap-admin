<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {

            $genders = [
                'male',
                'female',
                'other',
                'unknown',
            ];

            $table->bigIncrements('id');
            $table->unsignedBigInteger('participant_id');
            $table->foreign('participant_id')->references('id')->on('participants');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->date('dob');
            $table->enum('gender', $genders);
            $table->string('email')->nullable();
            $table->string('phone',12);
            $table->string('county')->nullable();
            $table->string('line_1')->nullable();
            $table->string('line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->text('care_info')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('dad_involved');
            $table->boolean('cps_involvement');
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
        Schema::dropIfExists('children');
    }
}

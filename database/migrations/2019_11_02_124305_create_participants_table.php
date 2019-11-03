<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {

            $grades = [
                '1st', '2nd', '3rd', '4th',
                '5th', '6th', '7th', '8th',
                '9th', '10th', '11th', '12th',
            ];

            $genders = [
                'male',
                'female',
                'other',
            ];

            $ethnicities = [
                'White', 'Hispanic', 'Black', 
                'Asian or Pacific Islander', 
                'Native American or Alaskan Native', 'Other'
            ];

            $employmentStatuses = [
                'employed',
                'unemployed',
            ];

            $statuses = [
                'applicant',
                'participant'
            ];

            $table->bigIncrements('id');
            $table->string('service_interest',512)->nullable();
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->date('dob');
            $table->enum('gender', $genders);
            $table->enum('ethnicity', $ethnicities)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('county')->nullable();
            $table->string('line_1')->nullable();
            $table->string('line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->boolean('ok_to_text');
            $table->enum('last_grade_completed', $grades)->nullable();
            $table->enum('employment_status' ,$employmentStatuses)->nullable();
            $table->integer('number_of_children')->nullable();
            $table->decimal('annual_income', 12, 2)->nullable();
            $table->text('additional_services')->nullable();
            $table->text('referrer')->nullable();
            $table->enum('status' ,$statuses)->default('applicant');
            $table->date('enrollment_date')->nullable();
            $table->date('exit_date')->nullable();
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
        Schema::dropIfExists('participants');
    }
}

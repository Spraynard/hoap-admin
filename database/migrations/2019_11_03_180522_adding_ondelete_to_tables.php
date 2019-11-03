<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingOndeleteToTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_program', function (Blueprint $table) {
            $table->dropForeign('participant_program_program_id_foreign');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->dropForeign('participant_program_participant_id_foreign');
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
        });

        Schema::table('children', function (Blueprint $table) {
            $table->unsignedBigInteger('participant_id')->nullable()->change();
            $table->dropForeign('children_participant_id_foreign');
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('set null');
        });

        Schema::table('time_entries', function (Blueprint $table) {
            $table->dropForeign('time_entries_volunteer_id_foreign');
            $table->foreign('volunteer_id')->references('id')->on('volunteers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant_program', function (Blueprint $table) {
            $table->dropForeign('participant_program_program_id_foreign');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->dropForeign('participant_program_participant_id_foreign');
            $table->foreign('participant_id')->references('id')->on('participants');
        });

        Schema::table('children', function (Blueprint $table) {
            $table->dropForeign('children_participant_id_foreign');
            $table->foreign('participant_id')->references('id')->on('participants');
        });

        Schema::table('time_entries', function (Blueprint $table) {
            $table->dropForeign('time_entries_volunteer_id_foreign');
            $table->foreign('volunteer_id')->references('id')->on('volunteers');
        });

    }
}

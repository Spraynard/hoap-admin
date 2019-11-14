<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpgradePhoneNumberEntryLength extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('children', function (Blueprint $table) {
            $table->string('phone', 25)->change();
        });

        Schema::table('donors', function (Blueprint $table) {
            $table->string('phone_number', 25)->nullable()->change();
        });

        Schema::table('participants', function (Blueprint $table) {
            $table->string('phone', 25)->nullable()->change();
        });

        Schema::table('volunteers', function (Blueprint $table) {
            $table->string('phone', 25)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('children', function (Blueprint $table) {
            $table->string('phone', 12)->change();
        });

        Schema::table('donors', function (Blueprint $table) {
            $table->string('phone_number', 12)->change();
        });

        Schema::table('participants', function (Blueprint $table) {
            $table->string('phone', 12)->change();
        });

        Schema::table('volunteers', function (Blueprint $table) {
            $table->string('phone', 12)->change();
        });
    }
}

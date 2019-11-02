<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('volunteers', function (Blueprint $table) {
            $table->renameColumn('firstName', 'first_name');
            $table->renameColumn('lastName', 'last_name');

            $table->enum('gender', ['male', 'female', 'other', 'unknown'])->default('unknown')->change();

            // address
            $table->string('county')->nullable()->after('phone');
            $table->string('line_1')->nullable()->after('county');
            $table->string('line_2')->nullable()->after('line_1');
            $table->string('city')->nullable()->after('line_2');
            $table->string('state')->nullable()->after('city');
            $table->string('zip')->nullable()->after('state');


            $table->renameColumn('backgroundCheck', 'background_check');
            $table->renameColumn('receiveMarketingMail', 'ok_to_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('volunteers', function (Blueprint $table) {

            $table->renameColumn('first_name', 'firstName');
            $table->renameColumn('last_name', 'lastName');

            $table->enum('gender', ['Male', 'Female', 'Other'])
                ->default('Other')->change();

            $table->renameColumn('background_check', 'backgroundCheck');

            $table->renameColumn('ok_to_text', 'receiveMarketingMail');

            // address
            $table->dropColumn('county');
            $table->dropColumn('line_1');
            $table->dropColumn('line_2');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('zip');
        });
    }
}

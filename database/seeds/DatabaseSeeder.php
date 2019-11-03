<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProgramDataRowTypeSeeder::class);
        $this->call(ParticipantDataRowTypeSeeder::class);
        $this->call(ChildDataRowTypeSeeder::class);
        $this->call(VolunteersTableSeeder::class);
        $this->call(TimeEntriesTableSeeder::class);
        $this->call(DonorDataRowTypeSeeder::class);
    }
}

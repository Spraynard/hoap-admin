<?php

use Illuminate\Database\Seeder;

class DomainTestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(ParticipantSeeder::class);
        $this->call(ChildSeeder::class);
        $this->call(DonationSeeder::class);
        $this->call(DonorSeeder::class);
        $this->call(TimeEntrySeeder::class);
        $this->call(VolunteerSeeder::class);
    }
}

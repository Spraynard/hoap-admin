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
    }
}

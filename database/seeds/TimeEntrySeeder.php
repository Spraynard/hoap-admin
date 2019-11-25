<?php

use App\Models\TimeEntry;
use Illuminate\Database\Seeder;

class TimeEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TimeEntry::class, 50)->create();
    }
}

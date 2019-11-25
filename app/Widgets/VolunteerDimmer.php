<?php

namespace App\Widgets;

use App\Models\TimeEntry;
use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Models\Volunteer;

class VolunteerDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $volunteer_count = Volunteer::count();
        $volunteer_hours_this_year = TimeEntry::whereYear('created_at', date('Y'))->get()
            ->reduce(function( $total_hours, $time_entry ) {
                return $total_hours + $time_entry->duration_hours;
            }, 0);

        $string = trans_choice('dimmer.volunteer', $volunteer_count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-person',
            'title'  => "{$volunteer_count} {$string}",
            'text'   => __('dimmer.volunteer_text', [
                'count' => $volunteer_count,
                'string' => Str::lower($string),
                'volunteer_hour_count' => number_format($volunteer_hours_this_year, 2)
            ]),
            'button' => [
                'text' => __('dimmer.volunteer_button'),
                'link' => route('voyager.volunteers.index'),
            ],
            'image' => asset('images/widgets/volunteers_widget_image.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}

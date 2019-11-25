<?php

namespace App\Widgets;

use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\Models\Donation;

class DonationDimmer extends BaseDimmer
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
        $count = Donation::count();
        $donation_amount_this_year = Donation::whereYear('created_at', date('Y'))->get()
            ->reduce(function ($total_donation_amount, $donation) {
                return $total_donation_amount + $donation->amount;
            });

        $string = trans_choice('dimmer.donation', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-dollar',
            'title'  => "{$count} {$string}",
            'text'   => __('dimmer.donation_text', [
                'count' => $count,
                'donation_amount' => number_format($donation_amount_this_year, 2),
                'string' => Str::lower($string)],
            ),
            'button' => [
                'text' => __('dimmer.donation_button'),
                'link' => route('voyager.donations.index'),
            ],
            'image' => asset('images/widgets/donations_widget_image.jpg'),
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

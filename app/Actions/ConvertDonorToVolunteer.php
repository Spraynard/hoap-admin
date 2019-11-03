<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class ConvertDonorToVolunteer extends AbstractAction
{
    public function getTitle()
    {
        return 'Make Volunteer';
    }

    public function getIcon()
    {
        return 'voyager-credit-card';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary',
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'donors';
    }

    public function getDefaultRoute()
    {
        return route('volunteer.createFromDonor', ['id' => $this->data->id]);
    }
}

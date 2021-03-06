<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class ConvertVolunteerToDonor extends AbstractAction
{
    public function getTitle()
    {
        return 'Make Donor';
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
        return $this->dataType->slug == 'volunteers';
    }

    public function getDefaultRoute()
    {
        return route('donor.createFromVolunteer', ['id' => $this->data->id]);
    }
}

<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class CsvExportSelected extends AbstractAction
{
    public function getTitle()
    {
        return 'Export Selected';
    }

    public function getIcon()
    {
        return 'voyager-cloud-download';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary btn-add-new',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.upload');
    }

    public function massAction($ids, $comingFrom)
    {
        $model = $this->dataType->model_name;
        $columns = Schema::getColumnListing($this->dataType->name);
        $rows = $model::findMany($ids);
        $filename = "{$this->dataType->slug}.csv";

        $handle = fopen($filename, 'w+');
        fputcsv($handle, $columns);

        foreach($rows as $row) {
            fputcsv($handle, $row->toArray());
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return Response::download($filename, $filename, $headers);
    }
}

<?php
namespace App\FormFields;
use TCG\Voyager\FormFields\AbstractHandler;

class NumberFormField extends AbstractHandler

{
    protected $codename = 'number';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.number', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}

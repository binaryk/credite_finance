<?php

namespace Credite\Banci\Form;

class DocumenteNecesareForm extends \Processing\Form\Form
{


    public static function make()
    {
        return self::$instance = new DocumenteNecesareForm();
    }

    protected function setView()
    {
        $this->view('banci.documente_necesare.form');
    }

    protected function setModel()
    {
        $this->model('Credite|Banci|DocumenteNecesare');
    }

    protected function addControls()
    {
    }

}
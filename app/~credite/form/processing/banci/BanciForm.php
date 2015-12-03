<?php
namespace Credite\Banci\Form;
class BanciForm extends \Processing\Form\Form
{

    public static function make()
    {
        return self::$instance = new BanciForm();
    }

    protected function setView()
    {
        $this->view('banci.form');
    }

    protected function setModel()
    {
        $this->model('Credite|Banca');
    }

    protected function addControls()
    {
        $this
        ->addControl(
        \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
            ->name('nume')
            ->caption('<b>Denumire bancă</b>')
            ->class('form-control  data-source')
            ->controlsource('nume')
            ->controltype('textbox')
            ->maxlength(255)
        );
    }


}
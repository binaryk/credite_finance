<?php
namespace Oferta;

class OfertaForm extends \Processing\Form\Form
{

    public static function make()
    {
        return self::$instance = new OfertaForm();
    }

    protected function setView()
    {
        $this->view('oferta.form');
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
                    ->name('nume_client')
                    ->caption('Nume client')
                    ->ng_model('nume_client')
                    ->class('form-control  data-source')
                    ->placeholder('Nume client')
                    ->controlsource('nume_client')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('nr_oferte')
                    ->caption('Numarul de oferte')
                    ->ng_model('nr_oferte')
                    ->ng_init('nr_oferte="1"')
                    ->ng_change('changeNrOferte()')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('nr_oferte')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['1' => '1','2' => '2','3' => '3','4' => '4','5' => '5'])
            )
        ;
    }




}
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
                    ->ng_model('nume_client')
                    ->class('form-control  data-source')
                    ->placeholder('Nume client')
                    ->controlsource('nume_client')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('oferta_banca_1')
                    ->ng_model('oferta_banca_1')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('oferta_banca_1')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(\Credite\PersoaneFizice::getBanca())
            )
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('oferta_banca_2')
                    ->ng_model('oferta_banca_2')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('oferta_banca_2')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(\Credite\PersoaneFizice::getBanca())
            )
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('oferta_banca_3')
                    ->ng_model('oferta_banca_3')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('oferta_banca_3')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(\Credite\PersoaneFizice::getBanca())
            )
        ;
    }




}
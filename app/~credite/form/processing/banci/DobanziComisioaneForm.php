<?php
namespace Credite\Banci\Form;
class DobanziComisioaneForm extends \Processing\Form\Form
{

    public static function make()
    {
        return self::$instance = new DobanziComisioaneForm();
    }

    protected function setView()
    {
        $this->view('banci.produse.dobanzi.form');
    }

    protected function setModel()
    {
        $this->model('Credite|Dobanzi');
    }

    protected function addControls()
    {
        $this
            //0
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('id_produs')
                    ->caption('id_produs')
                    ->class('form-control  data-source')
                    ->controlsource('id_produs')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
            //1
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('dobanda_fixa')
                    ->caption('Dobanda fixa (%)')
                    ->class('form-control  data-source')
                    ->controlsource('dobanda_fixa')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//2
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('dobanda_variabila')
                    ->caption('Dobanda variabila (%)')
                    ->class('form-control  data-source')
                    ->controlsource('dobanda_variabila')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//3
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('marja')
                    ->caption('Marja (%)')
                    ->class('form-control  data-source')
                    ->controlsource('marja')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//4
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('indice_referinta')
                    ->caption('Indice de referinta (%)')
                    ->class('form-control  data-source')
                    ->controlsource('indice_referinta')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//5
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('dae')
                    ->caption('DAE (%)')
                    ->class('form-control  data-source')
                    ->controlsource('dae')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//6
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_comision_analiza')
                    ->caption('Valoare comision de analiza (lei)')
                    ->class('form-control  data-source')
                    ->controlsource('valoare_comision_analiza')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//7
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_acordare_procent')
                    ->caption('Comision de acordare  (%)')
                    ->class('form-control  data-source')
                    ->controlsource('comision_acordare_procent')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//8
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_acordare_lei')
                    ->caption('Cosmision de acordare (lei)')
                    ->class('form-control  data-source')
                    ->controlsource('comision_acordare_lei')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//9
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('taxa_inscriere_arhiva')
                    ->caption('Taxa de inscriere in Arhiva Electronica de Garantii Reale Imobiliare (lei)')
                    ->class('form-control  data-source')
                    ->controlsource('taxa_inscriere_arhiva')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//10
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_rambursare_anticipata')
                    ->caption('Comision de rambursare anticipata( %)')
                    ->class('form-control  data-source')
                    ->controlsource('comision_rambursare_anticipata')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//11
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_prestari_servicii_bancare')
                    ->caption('Comision prestari servicii bancare(%)')
                    ->class('form-control  data-source')
                    ->controlsource('comision_prestari_servicii_bancare')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//12
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_administrare_lunar_procent')
                    ->caption('Comision de administrare lunar( % )')
                    ->class('form-control  data-source')
                    ->controlsource('comision_administrare_lunar_procent')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//13
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_administrare_lunar_lei')
                    ->caption('Comision de administrare lunar (lei)')
                    ->class('form-control  data-source')
                    ->controlsource('comision_administrare_lunar_lei')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//14
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_administrare_anual_procent')
                    ->caption('Comision de administrare anual %')
                    ->class('form-control  data-source')
                    ->controlsource('comision_administrare_anual_procent')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//15
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_administrare_anual_lei')
                    ->caption('Comision de administrare anual (lei)')
                    ->class('form-control  data-source')
                    ->controlsource('comision_administrare_anual_lei')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//16
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('asigurare_viata')
                    ->caption('Asigurare de viata (%)')
                    ->class('form-control  data-source')
                    ->controlsource('asigurare_viata')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//17
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('evaluare')
                    ->caption('Evaluare (lei)')
                    ->class('form-control  data-source')
                    ->controlsource('evaluare')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//18
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('prima_asigurare_imobil')
                    ->caption('Prima Asigurare imobil (%)')
                    ->class('form-control  data-source')
                    ->controlsource('prima_asigurare_imobil')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
//19
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('prima_asigurare_pad')
                    ->caption('Prima de asigurare a imobilului obligatorie (PAD) (Lei)')
                    ->class('form-control  data-source')
                    ->controlsource('prima_asigurare_pad')
                    ->controltype('textbox')
                    ->maxlength(255)
            )
        ;
    }


}
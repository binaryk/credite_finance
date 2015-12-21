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

//20
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('dobanda_fixa_std')
                    ->caption('Dobanda fixa standard')
                    ->class('form-control  data-source decimal')
                    ->controlsource('dobanda_fixa_std')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

//21
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('dobanda_fixa_std_switch')
                    ->caption('Moneda')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('dobanda_fixa_std_switch')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['1' => 'LEI', '2' => 'RON'])
            )

//22
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('dobanda_fixa_preferentiala')
                    ->caption('Dobanda fixa preferentiala ')
                    ->class('form-control  data-source decimal')
                    ->controlsource('dobanda_fixa_preferentiala')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

//23
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('dobanda_fixa_preferentiala_switch')
                    ->caption('Moneda ')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('dobanda_fixa_preferentiala_switch')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['1' => 'LEI', '2' => 'RON'])
            )

//24
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('marja_fixa_std')
                    ->caption('Marja fixa standard ')
                    ->class('form-control  data-source decimal')
                    ->controlsource('marja_fixa_std')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

//25
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('marja_fixa_std_switch')
                    ->caption('Moneda')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('marja_fixa_std_switch')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['1' => 'LEI', '2' => 'RON'])
            )

//26
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('marja_fixa_preferentiala')
                    ->caption('Marja fixa preferentiala ')
                    ->class('form-control  data-source decimal')
                    ->controlsource('marja_fixa_preferentiala')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

//27
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('marja_fixa_preferentiala_switch')
                    ->caption('Moneda')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('marja_fixa_preferentiala_switch')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['1' => 'LEI', '2' => 'RON'])
            )

//28
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('indice_referinta_robor')
                    ->caption('Indice de referinta Robor calculat la:')
                    ->class('form-control  data-source decimal')
                    ->controlsource('indice_referinta_robor')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

//29
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('indice_referinta_robor_months')
                    ->caption('Perioada:')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('indice_referinta_robor_months')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['1' => '3 Luni', '2' => '6 Luni'])
            )

//30
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('indice_referinta_robor_euribor')
                    ->caption('Indice de referinta Euribor calculat la:')
                    ->class('form-control  data-source decimal')
                    ->controlsource('indice_referinta_robor_euribor')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

//31
            ->addControl(
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('indice_referinta_robor_euribor_months')
                    ->caption('Perioada:')
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('indice_referinta_robor_euribor_months')
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['1' => '3 Luni', '2' => '6 Luni'])
            )

//32
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('procent_avans_minim_solicitat')
                    ->caption('Procent avans minim solicitat (%)')
                    ->class('form-control  data-source decimal')
                    ->controlsource('procent_avans_minim_solicitat')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

//33
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_administrare_platibil')
                    ->caption('Comisionul de administrare platibil catre Fondul Nataional de Garantare a Creditelor (credit Prima Casa) - taxa anuala %')
                    ->class('form-control  data-source decimal')
                    ->controlsource('comision_administrare_platibil')
                    ->controltype('textbox')
                    ->maxlength(255)
            )

//34
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('alte_comisione_banca')
                    ->caption('Alte  comisioane ale bancii- sa se poata completa text')
                    ->class('form-control  data-source')
                    ->controlsource('alte_comisione_banca')
                    ->controltype('textbox')
                    ->maxlength(255)
            )


//35
            ->addControl(
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('precizari_suplimentare')
                    ->caption('Precizari suplimentare-sa se poata completa')
                    ->class('form-control  data-source')
                    ->controlsource('precizari_suplimentare')
                    ->controltype('textbox')
                    ->maxlength(255)
            )


        ;
    }


}
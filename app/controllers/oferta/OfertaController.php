<?php
namespace Oferta;

use Credite\PersoaneFizice;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class OfertaController  extends \BaseController{
    protected $layout = 'template.layout';

    public function index(){
        $form = OfertaForm::make();
        $this->layout->content = \View::make('oferta.index')->with([
                'form'          => $form->other_info(['current_org' => $this->current_org]),
                'current_org'   => $this->current_org,
            ]);
    }

    public function rows(){

    }

    public function template()
    {
        $oferte = Input::get('nr_oferte');
        $controls = $this->controls($oferte);
        $html   = View::make('oferta.partials.tabs.index')->with(compact('oferte','controls'))->render();
        return  Response::json(['html' => $html]);
    }

    public function controls($oferte)
    {
        $controls = [];
        for($i = 1; $i <= $oferte; $i++){
            $temp = $this->getInputs($i);
            $controls[$i] = $temp;
        }

        return $controls;
    }

    public function getInputs($i)
    {
        return [
            'banca' =>
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('banca_'.$i)
                    ->caption('Banca')
                    ->ng_model('banca_'.$i)
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('banca_'.$i)
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(PersoaneFizice::getBanca())
                    ->out(),
            'tip_credit' =>
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('tip_credit_'.$i)
                    ->caption('Tipul Creditului')
                    ->ng_model('tip_credit_'.$i)
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('tip_credit_'.$i)
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(PersoaneFizice::tipCredit())
                    ->out(),
            'perioada_max_finantare' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('perioada_max_finantare_'.$i)
                    ->caption('Perioada maxima de finantare (ani)')
                    ->ng_model('perioada_max_finantare_'.$i)
                    ->class('form-control  data-source integer')
                    ->controlsource('perioada_max_finantare_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'perioada_finantare_luata_in_calcul' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('perioada_finantare_luata_in_calcul_'.$i)
                    ->caption('Perioada de finantare luata in calcul (ani)')
                    ->ng_model('perioada_finantare_luata_in_calcul_'.$i)
                    ->class('form-control  data-source integer')
                    ->controlsource('perioada_finantare_luata_in_calcul_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'suma_solicitata' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('suma_solicitata_'.$i)
                    ->caption('Suma solicitata')
                    ->ng_model('suma_solicitata_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('suma_solicitata_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'suma_maxima_incadrare' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('suma_maxima_incadrare_'.$i)
                    ->caption('Suma maxima finantabila la care va incadrati, conform criteriilor de eligibilitate ale bancii')
                    ->ng_model('suma_maxima_incadrare_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('suma_maxima_incadrare_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valuta_creditului' =>
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('valuta_creditului_'.$i)
                    ->caption('Valuta creditului')
                    ->ng_model('valuta_creditului_'.$i)
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('valuta_creditului_'.$i)
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(PersoaneFizice::valuta())
                    ->out(),
            'dobanda_preferentiala' =>
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('dobanda_preferentiala_'.$i)
                    ->caption('Dobanda preferentiala')
                    ->ng_model('dobanda_preferentiala_'.$i)
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('dobanda_preferentiala_'.$i)
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['Da' => 'Da','Nu' => 'Nu',])
                    ->out(),
            'tipul_de_dobanda' =>
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('tipul_de_dobanda_'.$i)
                    ->caption('Tipul de dobanda')
                    ->ng_model('tipul_de_dobanda_'.$i)
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('tipul_de_dobanda_'.$i)
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['fixa' => 'fixa','variabila' => 'variabila',])
                    ->out(),
            'marja_fixa_practicata_banca' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('marja_fixa_practicata_banca_'.$i)
                    ->caption('Marja fixa practicata de banca')
                    ->ng_model('marja_fixa_practicata_banca_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('marja_fixa_practicata_banca_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'tip_indice_referinta' =>
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('tip_indice_referinta_'.$i)
                    ->caption('Tipul indicelui de referinta')
                    ->ng_model('tip_indice_referinta_'.$i)
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('tip_indice_referinta_'.$i)
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(PersoaneFizice::indice_referinta())
                    ->out(),
            'valoare_indice_zi_referinta' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_indice_zi_referinta_'.$i)
                    ->caption('Valoare la zi indice de referinta')
                    ->ng_model('valoare_indice_zi_referinta_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_indice_zi_referinta_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valoare_totala_dobanda' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_totala_dobanda_'.$i)
                    ->caption('Valoarea totala a dobanzii')
                    ->ng_model('valoare_totala_dobanda_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_totala_dobanda_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'tip_anuitati_capital' =>
                \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
                    ->name('tip_anuitati_capital_'.$i)
                    ->caption('Tipul anuitatilor de capital')
                    ->ng_model('tip_anuitati_capital_'.$i)
                    ->class('form-control data-source input-group form-select init-on-update-delete')
                    ->controlsource('tip_anuitati_capital_'.$i)
                    ->controltype('combobox')
                    ->enabled('false')
                    ->options(['anuitati egale' => 'anuitati egale','anuitati descrescatoare' => 'anuitati descrescatoare'])
                    ->out(),
            'avans_minim' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('avans_minim_'.$i)
                    ->caption('Avans minim')
                    ->ng_model('avans_minim_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('avans_minim_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valoare_avans_minim' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_avans_minim_'.$i)
                    ->caption('Valoare avans minim')
                    ->ng_model('valoare_avans_minim_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_avans_minim_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valoare_totala_investitiei' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_totala_investitiei_'.$i)
                    ->caption('Valoare totala a investitiei')
                    ->ng_model('valoare_totala_investitiei_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_totala_investitiei_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'comision_administrare' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_administrare_'.$i)
                    ->caption('Comision de administrare')
                    ->ng_model('comision_administrare_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('comision_administrare_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'rata_luanara_inclusiv_comision_gestionare' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('rata_luanara_inclusiv_comision_gestionare_'.$i)
                    ->caption('Rata lunara inclusiv comisioane de gestiune/administrare')
                    ->ng_model('rata_luanara_inclusiv_comision_gestionare_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('rata_luanara_inclusiv_comision_gestionare_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valoare_comision_analiza' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_comision_analiza_'.$i)
                    ->caption('Valoare comision de analiza')
                    ->ng_model('valoare_comision_analiza_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_comision_analiza_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'comision_acordare' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_acordare_'.$i)
                    ->caption('Comision de acordare')
                    ->ng_model('comision_acordare_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('comision_acordare_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valoare_comision_acordare' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_comision_acordare_'.$i)
                    ->caption('Valoare comision de acordare')
                    ->ng_model('valoare_comision_acordare_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_comision_acordare_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valoare_estimata_rambursare' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_estimata_rambursare_'.$i)
                    ->caption('Valoarea estimata totala de rambursat')
                    ->ng_model('valoare_estimata_rambursare_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_estimata_rambursare_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'dae' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('dae_'.$i)
                    ->caption('D.A.E')
                    ->ng_model('dae_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('dae_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'taxa_evaluare_imobil' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('taxa_evaluare_imobil_'.$i)
                    ->caption('Taxa de evaluare a imobilului care se  aduce in garantie')
                    ->ng_model('taxa_evaluare_imobil_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('taxa_evaluare_imobil_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'taxa_inscriere_arhiva' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('taxa_inscriere_arhiva_'.$i)
                    ->caption('Taxele de înscriere în Arhiva Electronica de Garantii  Reale Mobiliare')
                    ->ng_model('taxa_inscriere_arhiva_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('taxa_inscriere_arhiva_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'taxe_notariale_ante_contract' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('taxe_notariale_ante_contract_'.$i)
                    ->caption('Taxele notariale pentru: autentificarea ante-contractului, contractului de vanzare sau de ipoteca  inclusiv taxe de intabulare')
                    ->ng_model('taxe_notariale_ante_contract_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('taxe_notariale_ante_contract_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'depozit_colateral' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('depozit_colateral_'.$i)
                    ->caption('Depozitul colateral format din trei rate de dobanda (credit prima casa)')
                    ->ng_model('depozit_colateral_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('depozit_colateral_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'prima_asigurare_imobil_anuala' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('prima_asigurare_imobil_anuala_'.$i)
                    ->caption('Prima de asigurare a imobilului - taxa anuala')
                    ->ng_model('prima_asigurare_imobil_anuala_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('prima_asigurare_imobil_anuala_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valoare_prima_asigurare_imobil' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_prima_asigurare_imobil_'.$i)
                    ->caption('Valoare prima de asigurare imobil')
                    ->ng_model('valoare_prima_asigurare_imobil_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_prima_asigurare_imobil_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'prima_asigurare_imobil_pad' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('prima_asigurare_imobil_pad_'.$i)
                    ->caption('Prima de asigurare a imobilului obligatorie PAD')
                    ->ng_model('prima_asigurare_imobil_pad_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('prima_asigurare_imobil_pad_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'prima_asigurare_viata_anuala' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('prima_asigurare_viata_anuala_'.$i)
                    ->caption('Prima de asigurare de viata - taxa anuala')
                    ->ng_model('prima_asigurare_viata_anuala_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('prima_asigurare_viata_anuala_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'valoare_prima_asigurare' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('valoare_prima_asigurare_'.$i)
                    ->caption('Valoare prima de asigurare')
                    ->ng_model('valoare_prima_asigurare_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('valoare_prima_asigurare_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'comision_administrare_fond_national_anuala' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_administrare_fond_national_anuala_'.$i)
                    ->caption('Comisionul de administrare platibil catre Fondul Nataional de Garantare a Creditelor (credit Prima Casa) - taxa anuala')
                    ->ng_model('comision_administrare_fond_national_anuala_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('comision_administrare_fond_national_anuala_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'comision_servicii_bancarea' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_servicii_bancarea_'.$i)
                    ->caption('Comision prestari servicii bancare')
                    ->ng_model('comision_servicii_bancarea_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('comision_servicii_bancarea_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'comision_rambursare_anticipata' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('comision_rambursare_anticipata_'.$i)
                    ->caption('Comision de rambursare anticipata')
                    ->ng_model('comision_rambursare_anticipata_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('comision_rambursare_anticipata_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),
            'alte_comisioane_banca' =>
                \Easy\Form\Textbox::make('~layouts.form.controls.textboxes.textbox')
                    ->name('alte_comisioane_banca_'.$i)
                    ->caption('Alte comisioane ale bancii')
                    ->ng_model('alte_comisioane_banca_'.$i)
                    ->class('form-control  data-source decimal')
                    ->controlsource('alte_comisioane_banca_'.$i)
                    ->controltype('textbox')
                    ->maxlength(255)
                    ->out(),


        ];
    }
}
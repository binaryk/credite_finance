<?php

namespace Oferta;

use Carbon\Carbon;
use Credite\PersoaneFizice;
use Credite\Produs;
use Illuminate\Support\Facades\View;

class CreateOfertaPdf
{
    protected $orientation  = 'L';
    protected $pagesize     = 'A4';
    protected $destionation = 'D';
    protected $data   = NULL;
    protected $redus        = false;

    public function __construct($orientation, $pagesize, $destionation, $data, $redus = false)
    {
        if( is_null($data) )
        {
            throw new \Exception("Nu există date pentru care să se genereze oferta");
        }
        $this->orientation  = $orientation;
        $this->pagesize     = $pagesize;
        $this->destionation = $destionation;
        $this->data   = $data;

        $this->redus        = $redus;
        $this->pdf          = new \ToPDF\topdf();
        $this->pdf->newpage($this->orientation, $this->pagesize);
         $this->pdf->Pdf()->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    }

    public function __call($method, $args)
    {
        $method = strtolower($method);
        if( array_key_exists($method, $attributes = $this->apartament->getAttributes()) )
        {
            return $attributes[$method];
        }
        throw new \Exception("Datele nu au proprietatea [$method]");
    }
    protected function fileName($save = false)
    {
        $file_name = str_replace('\\', '/', public_path() . '/app/oferte/oferta-export-' .\Carbon\Carbon::now()->format('d.m.Y').'.pdf');
        $file_name = str_replace(' ', '_', $file_name);
        if($save){
            return $file_name;
        }
        return basename($file_name);
    }

    public function getName($attr = true)
    {
        return $this->fileName($attr);
    }

    protected function outlogo()
    {
        $logo_file = str_replace('\\', '/', storage_path() . '/app/apartamente/images/logo.png');
        $this->pdf->Pdf()->Image($logo_file, 10, 0, 70, 0, 'PNG', '', 'T', false, 308, '', false, false, 0, false, false, false);
        $this->pdf->Pdf()->SetFontSize(17);
        $this->pdf->cell()->text('Data ofertei: ' . \Carbon\Carbon::now()->format('d.m.Y'))->top(13)->left(220)->width(70)->halign('R')->out()->reset('top')->reset('left');
    }

    protected function outnume()
    {
        $oldFontSize = $this->pdf->Pdf()->getFontSizePt();
        $this->pdf->Pdf()->ln();
        $this->pdf->Pdf()->SetXY(20, 12);
        $this->pdf->Pdf()->SetFontSize(15);
        $this->pdf->Pdf()->SetTextColor(150, 200, 50);
        $nume = strtoupper( 'Oferta' );
        if( ! $nume )
        {
            $this->pdf->Pdf()->SetTextColor(255, 0, 0);
            $nume = 'Numele ofertei nu este definit';
        }
        $this->pdf->Cell()->text( $nume )->width(190)->border('')->halign('C')->out();
        $this->pdf->Pdf()->SetTextColor(0, 0, 0);
        $this->pdf->Pdf()->SetFontSize($oldFontSize);
    }

    protected function outWelcome(){
        $this->pdf->Pdf()->ln();
        $this->pdf->Pdf()->SetFontSize(11);
        $html = View::make('static.pdfwelcome')->with(['nume_client' => $this->data['general']['nume_client'] ])->render();
        $this->pdf->PDF()->writeHTML($html, true, 0, true, 0);
    }

    protected function outfieldcaptions(){
        $captions = [
            '1' => [ 'caption' => 'Banca',  'source' => 'banca', 'source' => 'banca'],
            '2' => [ 'caption' => 'Tipul Creditului', 'source' => 'tip_credit'],
            '3' => [ 'caption' => 'Perioada maxima de finantare (ani)', 'source' => 'perioada_max_finantare'],
            '4' => [ 'caption' => 'Perioada de finantare luata in calcul (ani)', 'source' => 'perioada_finantare_luata_in_calcul'],
            '5' => [ 'caption' => 'Suma solicitata', 'source' => 'suma_solicitata'],
            '6' => [ 'caption' => 'Suma maxima finantabila la care va incadrati, conform criteriilor de eligibilitate ale bancii', 'source' => 'suma_maxima_incadrare'],
            '7' => [ 'caption' => 'Valuta creditului', 'source' => 'valuta_creditului'],
            '8' => [ 'caption' => 'Dobanda preferentiala', 'source' => 'dobanda_preferentiala'],
            '9' => [ 'caption' => 'Tipul de dobanda', 'source' => 'tipul_de_dobanda'],
            '10' => [ 'caption' => 'Marja fixa practicata de banca', 'source' => 'marja_fixa_practicata_banca'],
            '11' => [ 'caption' => 'Tipul indicelui de referinta', 'source' => 'tip_indice_referinta'],
            '12' => [ 'caption' => 'Valoare la zi indice de referinta', 'source' => 'valoare_indice_zi_referinta'],
            '13' => [ 'caption' => 'Valoarea totala a dobanzii', 'source' => 'valoare_totala_dobanda'],
            '15' => [ 'caption' => 'Avans minim', 'source' => 'avans_minim'],
            '16' => [ 'caption' => 'Valoare avans minim', 'source' => 'valoare_avans_minim'],
            '17' => [ 'caption' => 'Valoare totala a investitiei', 'source' => 'valoare_totala_investitiei'],
            '18' => [ 'caption' => 'Comision de administrare', 'source' => 'comision_administrare'],
            '19' => [ 'caption' => 'Rata lunara inclusiv comisioane de gestiune/administrare', 'source' => 'rata_luanara_inclusiv_comision_gestionare'],
            '20' => [ 'caption' => 'Valoare comision de analiza', 'source' => 'valoare_comision_analiza'],
            '21' => [ 'caption' => 'Comision de acordare', 'source' => 'comision_acordare'],
            '22' => [ 'caption' => 'Valoare comision de acordare', 'source' => 'valoare_comision_acordare'],
            '23' => [ 'caption' => 'Valoarea estimata totala de rambursat', 'source' => 'valoare_estimata_rambursare'],
            '24' => [ 'caption' => 'D.A.E', 'source' => 'dae'],
            '25' => [ 'caption' => 'Taxa de evaluare a imobilului care se  aduce in garantie', 'source' => 'taxa_evaluare_imobil'],
            '26' => [ 'caption' => 'Taxele de înscriere în Arhiva Electronica de Garantii  Reale Mobiliare', 'source' => 'taxa_inscriere_arhiva'],
            '27' => [ 'caption' => 'Taxele notariale pentru: autentificarea ante-contractului', 'source' => 'taxe_notariale_ante_contract'],/*, contractului de vanzare sau de ipoteca  inclusiv taxe de intabulare*/
            '28' => [ 'caption' => 'Depozitul colateral format din trei rate', 'source' => 'depozit_colateral'],/* de dobanda (credit prima casa)*/
            '29' => [ 'caption' => 'Prima de asigurare a imobilului - taxa anuala', 'source' => 'prima_asigurare_imobil_anuala'],
            '30' => [ 'caption' => 'Valoare prima de asigurare imobil', 'source' => 'valoare_prima_asigurare_imobil'],
            '31' => [ 'caption' => 'Prima de asigurare a imobilului obligatorie PAD', 'source' => 'prima_asigurare_imobil_pad'],
            '32' => [ 'caption' => 'Prima de asigurare de viata - taxa anuala', 'source' => 'prima_asigurare_viata_anuala'],
            '33' => [ 'caption' => 'Valoare prima de asigurare', 'source' => 'valoare_prima_asigurare'],
            '34' => [ 'caption' => 'Comisionul de administrare platibil catre Fondul Nataional de Garantare a Creditelor', 'source' => 'comision_administrare_fond_national_anuala'],/* (credit Prima Casa) - taxa anuala*/
            '35' => [ 'caption' => 'Comision prestari servicii bancare', 'source' => 'comision_servicii_bancarea'],
            '36' => [ 'caption' => 'Comision de rambursare anticipata', 'source' => 'comision_rambursare_anticipata'],
            /*'37' => [ 'caption' => 'Alte comisioane ale bancii', 'source' => 'alte_comisioane_banca'],*/
        ];
        foreach($captions as $i => $row)
        {
            $this->pdf->Pdf()->ln();
            $this->pdf->Pdf()->SetFont('freeserif', 'N', 9, '', false);
            $this->pdf->Cell()->text( $row['caption'] )->width(130)->border('1')->halign('L')->linefeed(0)->out();
            $this->pdf->Pdf()->SetFont('freeserif', '', 9, '', false);
            if(array_key_exists('source', $row)){
                $this->pdf->Cell()->text( $this->{$row['source']}() )->width(140)->border('1')->halign('L')->linefeed(0)->out();
            }else{
                $this->pdf->Cell()->text( '--' )->width(140)->border('1')->halign('L')->linefeed(0)->out();
            }
        }
    }

    protected function outfooter()
    {
        $this->pdf->Pdf()->SetFont('freeserif', '', 9, '', false);
        $this->pdf->Pdf()->SetXY(10, -25);
        $this->pdf->Cell()->text('Contactatine la telefon 0756633766');
//        $this->pdf->Cell()->text('Pentru informaţii suplimentare sau alte oferte imobiliare mă puteţi contacta la telefon ' . $this->apartament->current_user->telefon . ', pe email ' . $this->apartament->current_user->email . ' sau la sediul nostru pe ' . str_replace([chr(13) . chr(10), chr(10) . chr(13), chr(10), chr(13)], ' ', $this->apartament->current_org->adresa) )->width(190)->border('T')->halign('C')->out()->reset('border')->reset('width')->reset('halign');
    }

    public function banca()
    {
//        dd($this->data['data']);

        return $this->comboval($this->data['data'][0]['banca_1'], PersoaneFizice::getBanca());
    }

    public function tip_credit(){
        return         @Produs::find($this->data['data'][0]['tip_credit_1'])->nume;
    }

    public function perioada_max_finantare(){
        return $this->data['data'][0]['perioada_max_finantare_1'];
    }

    public function perioada_finantare_luata_in_calcul(){
        return $this->data['data'][0]['perioada_finantare_luata_in_calcul_1'];
    }

    public function suma_solicitata(){
        return $this->data['data'][0]['suma_solicitata_1'];
    }

    public function suma_maxima_incadrare(){
        return $this->data['data'][0]['suma_maxima_incadrare_1'];
    }

    public function valuta_creditului(){
        return $this->comboval($this->data['data'][0]['valuta_creditului_1']);
    }

    public function dobanda_preferentiala(){
        return $this->comboval($this->data['data'][0]['dobanda_preferentiala_1']);
    }

    public function tipul_de_dobanda(){
        return $this->comboval($this->data['data'][0]['tipul_de_dobanda_1']);
    }

    public function marja_fixa_practicata_banca(){
        return $this->data['data'][0]['marja_fixa_practicata_banca_1'];
    }

    public function comboval($k, $a = [])
    {
        if($k == "? undefined:undefined ?")
            return '--';
        if( array_key_exists($k,$a)){
            return $a[$k];
        }else{
            return '--';
        }
    }

    public function tip_indice_referinta(){
        return $this->comboval($this->data['data'][0]['tip_indice_referinta_1'], PersoaneFizice::indice_referinta());
    }

    public function valoare_indice_zi_referinta(){
        return $this->data['data'][0]['valoare_indice_zi_referinta_1'];
    }

    public function valoare_totala_dobanda(){
        return $this->data['data'][0]['valoare_totala_dobanda_1'];
    }

    public function avans_minim(){
        return $this->data['data'][0]['avans_minim_1'];
    }

    public function valoare_avans_minim(){
        return $this->data['data'][0]['valoare_avans_minim_1'];
    }

    public function valoare_totala_investitiei(){
        return $this->data['data'][0]['valoare_totala_investitiei_1'];
    }

    public function comision_administrare(){
        return $this->data['data'][0]['comision_administrare_1'];
    }

    public function rata_luanara_inclusiv_comision_gestionare(){
        return $this->data['data'][0]['rata_luanara_inclusiv_comision_gestionare_1'];
    }

    public function valoare_comision_analiza(){
        return $this->data['data'][0]['valoare_comision_analiza_1'];
    }

    public function comision_acordare(){
        return $this->data['data'][0]['comision_acordare_1'];
    }

    public function valoare_comision_acordare(){
        return $this->data['data'][0]['valoare_comision_acordare_1'];
    }

    public function valoare_estimata_rambursare(){
        return $this->data['data'][0]['valoare_estimata_rambursare_1'];
    }

    public function dae(){
        return $this->data['data'][0]['dae_1'];
    }

    public function taxa_evaluare_imobil(){
        return $this->data['data'][0]['taxa_evaluare_imobil_1'];
    }

    public function taxa_inscriere_arhiva(){
        return $this->data['data'][0]['taxa_inscriere_arhiva_1'];
    }

    public function taxe_notariale_ante_contract(){
        return $this->data['data'][0]['taxe_notariale_ante_contract_1'];
    }

    public function depozit_colateral(){
        return $this->data['data'][0]['depozit_colateral_1'];
    }

    public function prima_asigurare_imobil_anuala(){
        return $this->data['data'][0]['prima_asigurare_imobil_anuala_1'];
    }

    public function valoare_prima_asigurare_imobil(){
        return $this->data['data'][0]['valoare_prima_asigurare_imobil_1'];
    }

    public function prima_asigurare_imobil_pad(){
        return $this->data['data'][0]['prima_asigurare_imobil_pad_1'];
    }

    public function prima_asigurare_viata_anuala(){
        return $this->data['data'][0]['prima_asigurare_viata_anuala_1'];
    }

    public function valoare_prima_asigurare(){
        return $this->data['data'][0]['valoare_prima_asigurare_1'];
    }

    public function comision_administrare_fond_national_anuala(){
        return $this->data['data'][0]['comision_administrare_fond_national_anuala_1'];
    }

    public function comision_servicii_bancarea(){
        return $this->data['data'][0]['comision_servicii_bancarea_1'];
    }

    public function comision_rambursare_anticipata(){
        return $this->data['data'][0]['comision_rambursare_anticipata_1'];
    }

    public function alte_comisioane_banca(){
        return $this->data['data'][0]['alte_comisioane_banca_1'];
    }


    protected function createpdf()
    {
        // Pagina 1
        $this->outlogo();
        $this->outnume();
        $this->outWelcome();
        $this->outfieldcaptions();

//        $this->outdetails();
        $this->outfooter();
    }

    public function Output()
    {
        $this->createpdf();
        $this->pdf->Pdf()->Output($this->fileName( $this->destionation == "F" || $this->destionation == "FI" ), $this->destionation);
    }
}
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

    /*public function __call($method, $args)
    {
        $method = strtolower($method);
        if( array_key_exists($method, $attributes = $this->apartament->getAttributes()) )
        {
            return $attributes[$method];
        }
        throw new \Exception("Datele nu au proprietatea [$method]");
    }*/
    protected function fileName($save = false)
    {
        $file_name = str_replace('\\', '/', public_path() . '/app/oferte/oferta-export-' .\Carbon\Carbon::now()->format('d.m.Y H.i.s').'.pdf');
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
        $this->pdf->Pdf()->SetFont('', 'N');
        $this->pdf->Pdf()->SetFontSize(11);
        $this->pdf->cell()->text('Data ofertei: ' . \Carbon\Carbon::now()->format('d.m.Y'))->top(13)->left(220)->width(70)->halign('R')->out()->reset('top')->reset('left');
    }

    protected function outnume()
    {
        $oldFontSize = $this->pdf->Pdf()->getFontSizePt();
        $this->pdf->Pdf()->ln();
        $this->pdf->Pdf()->SetXY(20, 12);
        $this->pdf->Pdf()->SetFontSize(15);
        $this->pdf->Pdf()->SetTextColor(153, 204, 51);
        $nume = 'Oferta Credite';
        if( ! $nume )
        {
            $this->pdf->Pdf()->SetTextColor(153, 204, 51);
            $nume = 'Numele ofertei nu este definit';
        }
        $this->pdf->Cell()->text( $nume )->width(250)->border('')->halign('C')->out();
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
            '1' => [ 'caption' => 'Banca',  'source' => 'banca', 'source' => 'banca', 'format' => 'text'],
            '2' => [ 'caption' => 'Tip credit', 'source' => 'tip_credit', 'format' => 'text'],
            '3' => [ 'caption' => 'Perioada maxima de finantare (ani)', 'source' => 'perioada_max_finantare', 'format' => 'integer'],
            '4' => [ 'caption' => 'Perioada de finantare luata in calcul (ani)', 'source' => 'perioada_finantare_luata_in_calcul', 'format' => 'integer'],
            '5' => [ 'caption' => 'Suma solicitata', 'source' => 'suma_solicitata', 'format' => 'float'],
//            '6' => [ 'caption' => 'Suma maxima finantabila la care va incadrati, conform criteriilor de eligibilitate ale bancii', 'source' => 'suma_maxima_incadrare'],
            '7' => [ 'caption' => 'Valuta credit', 'source' => 'valuta_creditului', 'format' => 'text'],
            '8' => [ 'caption' => 'Dobanda preferentiala', 'source' => 'dobanda_preferentiala', 'format' => 'text'],
            '9' => [ 'caption' => 'Tipul de dobanda', 'source' => 'tipul_de_dobanda', 'format' => 'text'],
            '10' => [ 'caption' => 'Marja fixa practicata de banca(%)', 'source' => 'marja_fixa_practicata_banca', 'format' => 'float'],
            '11' => [ 'caption' => 'Tip indice de referinta', 'source' => 'tip_indice_referinta', 'format' => 'text'],
            '12' => [ 'caption' => 'Valoare la zi indice de referinta(%)', 'source' => 'valoare_indice_zi_referinta', 'format' => 'float'],
            '13' => [ 'caption' => 'Valoare totala dobanda(%)', 'source' => 'valoare_totala_dobanda', 'format' => 'float'],
            '15' => [ 'caption' => 'Avans minim(%)', 'source' => 'avans_minim', 'format' => 'float'],
            '16' => [ 'caption' => 'Valoare avans minim', 'source' => 'valoare_avans_minim', 'format' => 'float'],
            '17' => [ 'caption' => 'Valoare totala investitie', 'source' => 'valoare_totala_investitiei', 'format' => 'float'],
            '18' => [ 'caption' => 'Comision de administrare(%)', 'source' => 'comision_administrare', 'format' => 'float'],
            '19' => [ 'caption' => 'Rata lunara inclusiv comisioane de gestiune/administrare', 'source' => 'rata_luanara_inclusiv_comision_gestionare', 'format' => 'float'],
            '20' => [ 'caption' => 'Valoare comision de analiza', 'source' => 'valoare_comision_analiza', 'format' => 'float'],
            '21' => [ 'caption' => 'Comision de acordare(%)', 'source' => 'comision_acordare', 'format' => 'float'],
            '22' => [ 'caption' => 'Valoare comision de acordare', 'source' => 'valoare_comision_acordare', 'format' => 'float'],
            '23' => [ 'caption' => 'Valoare totala de rambursat - Estimata', 'source' => 'valoare_estimata_rambursare', 'format' => 'float'],
            '24' => [ 'caption' => 'D.A.E(%)', 'source' => 'dae', 'format' => 'float'],
            '25' => [ 'caption' => 'Taxa de evaluare a imobilului care se  aduce in garantie', 'source' => 'taxa_evaluare_imobil', 'format' => 'float'],
            '26' => [ 'caption' => 'Taxe de înscriere în Arhiva Electron. de Garantii  Reale Mobiliare', 'source' => 'taxa_inscriere_arhiva', 'format' => 'float'],
            '27' => [ 'caption' => 'Taxe notariale autentificare contract de vanzare,contract de ipoteca', 'source' => 'taxe_notariale_ante_contract', 'format' => 'float'],/*, contractului de vanzare sau de ipoteca  inclusiv taxe de intabulare*/
            '28' => [ 'caption' => 'Depozit colateral format din trei rate de dobanda', 'source' => 'depozit_colateral', 'format' => 'float'],/* de dobanda (credit prima casa)*/
            '29' => [ 'caption' => 'Prima de asigurare a imobilului - taxa anuala(%)', 'source' => 'prima_asigurare_imobil_anuala', 'format' => 'float'],
            '30' => [ 'caption' => 'Valoare prima de asigurare imobil', 'source' => 'valoare_prima_asigurare_imobil', 'format' => 'float'],
            '31' => [ 'caption' => 'Prima de asigurare a imobilului obligatorie PAD', 'source' => 'prima_asigurare_imobil_pad', 'format' => 'float'],
            '32' => [ 'caption' => 'Prima de asigurare de viata - taxa anuala(%)', 'source' => 'prima_asigurare_viata_anuala', 'format' => 'float'],
            '33' => [ 'caption' => 'Valoare prima de asigurare', 'source' => 'valoare_prima_asigurare', 'format' => 'float'],
            '34' => [ 'caption' => 'Comisionul de admin. platibil catre Fondul National de Garantare', 'source' => 'comision_administrare_fond_national_anuala', 'format' => 'float'],/* (credit Prima Casa) - taxa anuala*/
            '35' => [ 'caption' => 'Comision prestari servicii bancare', 'source' => 'comision_servicii_bancarea', 'format' => 'float'],
            '36' => [ 'caption' => 'Comision de rambursare anticipata(%)', 'source' => 'comision_rambursare_anticipata', 'format' => 'float'],
            /*'37' => [ 'caption' => 'Alte comisioane ale bancii', 'source' => 'alte_comisioane_banca'],*/
        ];

        $this->pdf->Pdf()->SetFillColor(80, 191, 78);
        $this->pdf->Pdf()->SetTextColor(255);
        $this->pdf->Pdf()->SetDrawColor(80, 191, 78);
        $this->pdf->Pdf()->SetLineWidth(0.3);
        $this->pdf->Pdf()->SetFont('', 'B');
        $header = ['Denumire indicator'];
        /*TOTAL WIDTH ==> 260*/
        $w      = [60];
        for($i = 1; $i <= $this->data['general']['nr_oferte']; $i++){
            $header[] = "Oferta ".$i;
            $w[] = 200 / $this->data['general']['nr_oferte'];
        }

        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->pdf->Pdf()->Cell($w[$i], 6, $header[$i], 1, 0, 'C', 1);
//            $this->pdf->Pdf()->Cell(55 , 6, $header[$i], 1, 0, 'C', 1);
        }

        $this->pdf->Pdf()->Ln();
        // Color and font restoration
        $this->pdf->Pdf()->SetFillColor(224, 235, 255);
        $this->pdf->Pdf()->SetTextColor(0);
        $this->pdf->Pdf()->SetFont('');
        // Data
        $fill = 0;
        $count =  0;
        foreach($captions as $i => $row)
        {
            $count++;
            if($count % 14 == 0){
                $this->pdf->newpage($this->orientation, $this->pagesize);
            }
            $this->pdf->Pdf()->SetDrawColor(0,0,0);
            $this->pdf->Cell()->text( $row['caption'] )->width($w[0])->height(10)->border('1')->halign('L')->linefeed(0)->out();
            for($i = 1; $i <= $this->data['general']['nr_oferte']; $i++){
                $visible = $this->{$row['source']}($i);
                $visible = $this->prepare_format($visible, $row);
                if( $visible !== null &&  $visible != '-1' ){
                    $this->pdf->Cell()->text( $visible )->width($w[$i])->border('1')->halign('R')->linefeed(0)->out();
                }

            }
            $fill=!$fill;
            $this->pdf->Pdf()->Ln();
        }
    }

    public function prepare_format($visible, $row)
    {
        $out = 0;
        if($row['format'] == 'text'){
            return $visible;
        }
        if(floatval($visible) != 0 && array_key_exists('format', $row) && method_exists($this, 'format_'.$row['format'])){

            if($row['source'] == 'comision_administrare'){
                $out = $this->{'format_'.$row['format']}($visible, 3);
            }else{
                $out = $this->{'format_'.$row['format']}($visible);
            }
        }

        return $out;
    }

    public function format_float($val, $decimals = 2)
    {
        $val = floatval($val);
        if($decimals == 3){
        }
        return number_format($val,$decimals,',','.');
    }

    public function format_integer($val)
    {
        return floatval($val);
    }

    public function format_text($val)
    {
        return $val;
    }

    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(40, 35, 40, 45);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        foreach($data as $row) {
            $this->Cell($w[0], 6, $row[0], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $row[1], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, number_format($row[2]), 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, number_format($row[3]), 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }

    protected function outfooter()
    {
        $this->pdf->Pdf()->ln();
        $this->pdf->Pdf()->SetFontSize(11);
        $this->pdf->Pdf()->SetTextColor(20, 106, 135);
        $html = "Oferta este intocmita in concordanta cu informatiile furnizate de catre partenerii bancari si valabile la data intocmirii prezentei oferte, precum si pe baza informatiilor furnizate de catre dumneavoastra. Nu ne asumam raspunderea ofertei daca informatiile furnizate nu au fost corecte sau nu corespund cu cele precizate in actele de venit.
In momentul in care veti lua o decizie in ceea ce priveste banca a carei oferta considerati ca vi se potriveste, va vom trimite lista cu actele necesare pentru a putea intocmi dosarul de credit.
Pentru orice nelamuriri sau intrebari va rugam sa ne contactati.";
        $this->pdf->PDF()->writeHTML($html, true, 0, true, 0);
    }

    protected function contact()
    {
        $user = \Sentry::getUser();
        $fullname = $user->nume . ' '. $user->prenume;
        $this->pdf->Pdf()->ln();
        $this->pdf->Pdf()->ln();
        $this->pdf->Pdf()->SetFontSize(11);
        $this->pdf->Pdf()->SetTextColor(20, 106, 135);
        $this->pdf->PDF()->writeHTML($fullname, true, 0, true, 0);
        $this->pdf->PDF()->writeHTML($user->telefon, true, 0, true, 0);
        $this->pdf->PDF()->writeHTML($user->email, true, 0, true, 0);
    }

    protected function legenda()
    {
        $this->pdf->Pdf()->ln();
        $this->pdf->Pdf()->SetFontSize(11);
        $this->pdf->Pdf()->SetTextColor(20, 106, 135);
        $html = "*Valorile din prezenta oferta sunt exprimate in Lei. (asta sa o pui sa fie exact sub tabel in prima linie)";
        $this->pdf->PDF()->writeHTML($html, true, 0, true, 0);
    }

    public function banca($i)
    {
//        dd($this->data['data']);
        return $this->comboval($this->data['data'][$i-1]['banca_'.$i], PersoaneFizice::getBanca());
    }

    public function tip_credit($i){
        return @Produs::find($this->data['data'][$i-1]['tip_credit_'.$i])->nume;
    }

    public function perioada_max_finantare($i){
        return $this->data['data'][$i-1]['perioada_max_finantare_'.$i];
    }

    public function perioada_finantare_luata_in_calcul($i){
        return $this->data['data'][$i-1]['perioada_finantare_luata_in_calcul_'.$i];
    }

    public function suma_solicitata($i){
        return $this->data['data'][$i-1]['suma_solicitata_'.$i];
    }

    public function suma_maxima_incadrare($i){
        return $this->data['data'][$i-1]['suma_maxima_incadrare_'.$i];
    }

    public function valuta_creditului($i){

        return $this->comboval('valuta_creditului_'.$i,$this->data['data'][$i-1]);
    }

    public function dobanda_preferentiala($i){
        return $this->comboval('dobanda_preferentiala_'.$i,$this->data['data'][$i-1]);
    }

    public function tipul_de_dobanda($i){
        return $this->comboval('tipul_de_dobanda_'.$i,$this->data['data'][$i-1]);
    }

    public function marja_fixa_practicata_banca($i){
        return $this->data['data'][$i-1]['marja_fixa_practicata_banca_'.$i];
    }

    public function comboval($k, $a = [])
    {
        if($k == "? undefined:undefined ?")
            return '--';
        if( array_key_exists($k,$a) && $a[$k] != "? undefined:undefined ?"){
            return $a[$k];
        }else{
            return '--';
        }
    }

    public function tip_indice_referinta($i){
        return $this->comboval($this->data['data'][$i-1]['tip_indice_referinta_'.$i], PersoaneFizice::indice_referinta());
    }

    public function valoare_indice_zi_referinta($i){
        return $this->data['data'][$i-1]['valoare_indice_zi_referinta_'.$i];
    }

    public function valoare_totala_dobanda($i){
        return $this->data['data'][$i-1]['valoare_totala_dobanda_'.$i];
    }

    public function avans_minim($i){
        return $this->data['data'][$i-1]['avans_minim_'.$i];
    }

    public function valoare_avans_minim($i){
        $fl = floatval($this->data['data'][$i-1]['valoare_avans_minim_'.$i]);

        return $this->data['data'][$i-1]['valoare_avans_minim_'.$i];
    }

    public function valoare_totala_investitiei($i){
        $fl =  floatval($this->data['data'][$i-1]['valoare_totala_investitiei_'.$i]);
//        dd(number_format($fl,2));
        return  $this->data['data'][$i-1]['valoare_totala_investitiei_'.$i];
    }

    public function comision_administrare($i){
        return  $this->data['data'][$i-1]['comision_administrare_'.$i];
    }

    public function rata_luanara_inclusiv_comision_gestionare($i){
        return $this->data['data'][$i-1]['rata_luanara_inclusiv_comision_gestionare_'.$i];
    }

    public function valoare_comision_analiza($i){
        return $this->data['data'][$i-1]['valoare_comision_analiza_'.$i];
    }

    public function comision_acordare($i){
        return $this->data['data'][$i-1]['comision_acordare_'.$i];
    }

    public function valoare_comision_acordare($i){
        return $this->data['data'][$i-1]['valoare_comision_acordare_'.$i];
    }

    public function valoare_estimata_rambursare($i){
        return $this->data['data'][$i-1]['valoare_estimata_rambursare_'.$i];
    }

    public function dae($i){
        return $this->data['data'][$i-1]['dae_'.$i];
    }

    public function taxa_evaluare_imobil($i){
        return $this->data['data'][$i-1]['taxa_evaluare_imobil_'.$i];
    }

    public function taxa_inscriere_arhiva($i){
        return $this->data['data'][$i-1]['taxa_inscriere_arhiva_'.$i];
    }

    public function taxe_notariale_ante_contract($i){
        return $this->data['data'][$i-1]['taxe_notariale_ante_contract_'.$i];
    }

    public function depozit_colateral($i){
        return $this->data['data'][$i-1]['depozit_colateral_'.$i];
    }

    public function prima_asigurare_imobil_anuala($i){
        return $this->data['data'][$i-1]['prima_asigurare_imobil_anuala_'.$i];
    }

    public function valoare_prima_asigurare_imobil($i){
        return $this->data['data'][$i-1]['valoare_prima_asigurare_imobil_'.$i];
    }

    public function prima_asigurare_imobil_pad($i){
        return $this->data['data'][$i-1]['prima_asigurare_imobil_pad_'.$i];
    }

    public function prima_asigurare_viata_anuala($i){
        return $this->data['data'][$i-1]['prima_asigurare_viata_anuala_'.$i];
    }

    public function valoare_prima_asigurare($i){
        return $this->data['data'][$i-1]['valoare_prima_asigurare_'.$i];
    }

    public function comision_administrare_fond_national_anuala($i){
        return $this->data['data'][$i-1]['comision_administrare_fond_national_anuala_'.$i];
    }

    public function comision_servicii_bancarea($i){
        return $this->data['data'][$i-1]['comision_servicii_bancarea_'.$i];
    }

    public function comision_rambursare_anticipata($i){
        return $this->data['data'][$i-1]['comision_rambursare_anticipata_'.$i];
    }

    public function alte_comisioane_banca($i){
        return $this->data['data'][$i-1]['alte_comisioane_banca_'.$i];
    }


    protected function createpdf()
    {
        // Pagina 1
        $this->outlogo();
        $this->outnume();
        $this->outWelcome();
        $this->outfieldcaptions();

//        $this->outdetails();
        $this->legenda();
        $this->outfooter();
        $this->contact();
    }

    public function Output()
    {
        $this->createpdf();
        $this->pdf->Pdf()->Output($this->fileName( $this->destionation == "F" || $this->destionation == "FI" ), $this->destionation);
    }
}
<?php

namespace Oferta;

use Carbon\Carbon;

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
//        $logo_file = str_replace('\\', '/', public_path() . '/assets/admin/layout/img/log_creditfin.png');
        $this->pdf->Pdf()->Image($logo_file, 10, 0, 70, 0, 'PNG', '', 'T', false, 308, '', false, false, 0, false, false, false);
        $this->pdf->Pdf()->SetFontSize(17);
//        $this->pdf->Cell()->text('OFERTA')->top(21)->left(75)->out()->reset('top')->reset('left');
        $this->pdf->cell()->text('Data ofertei: ' . \Carbon\Carbon::now()->format('d.m.Y'))->top(13)->left(220)->width(70)->halign('R')->out()->reset('top')->reset('left');
    }

    protected function outnume()
    {
        $oldFontSize = $this->pdf->Pdf()->getFontSizePt();
        $this->pdf->Pdf()->ln();
        $this->pdf->Pdf()->SetXY(20, 29);
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
        $txt = 'Stimate d-le '. $this->data['general']['nume_client'] .'
                   Asa cum am stabilit, in urma informatiilor furnizate de dumneavoastra, echipa noastra a realizat calcule comparative la mai multe banci pentru a obtine conditii de creditare competitive. Va prezentam in continuare cateva oferte ale bancilor care le-am considerat cele mai potrivite pentru dumneavoastra din punct de vedere al costurilor.';
        $this->pdf->Cell()->text( $txt )->border('')->halign('L')->out();
    }

    protected function outfieldcaptions(){
        $captions = [

        ];
    }

    protected function outdetails()
    {
        $this->pdf->Pdf()->ln();
         $rows = [
         	 '1' => ['caption' => 'Banca: ', 'source' => 'banca'],
//         	'2' => ['caption' => 'Suprafaţa:', 'source' => 'suprafataApartament'],
//         	'3' => ['caption' => 'Loc parcare: ', 'source' => 'locparcare'],
//         	'4' => ['caption' => 'Etaj: ', 'source' => 'etaj'],
//         	'5' => ['caption' => 'Număr de balcoane: ', 'source' => 'balcoane'],
//         	'6' => ['caption' => 'Grad de finisare: ', 'source' => 'finisare'],
//         	'7' => ['caption' => 'Garaj: ', 'source' => 'garaj'],
//         	'8' => ['caption' => 'Centrală termică: ', 'source' => 'centralatermica'],
//         	'9' => ['caption' => 'Compartimentare: ', 'source' => 'compartimentare'],
//            '10' => ['caption' => 'Număr de băi: ', 'source' => 'bai'],
//            '11' => ['caption' => 'Număr de camere: ', 'source' => 'camere'],
            // '12' => ['caption' => 'Detalii: ', 'source' => 'detaliiApartament'],
         ];

         foreach($rows as $i => $row)
         {
         	$this->pdf->Pdf()->SetFont('freeserif', 'B', 12, '', false);
         	$this->pdf->Cell()->text( $row['caption'] )->width(50)->border('')->halign('R')->linefeed(0)->out();
         	$this->pdf->Pdf()->SetFont('freeserif', '', 12, '', false);
         	$this->pdf->Cell()->text( $this->{$row['source']}() )->width(140)->border('')->halign('L')->linefeed(1)->out();
         }

        /*if( $detalii = $this->detalii()) // afisarea campului detalii
        {
            $this->pdf->Pdf()->ln();
            $this->pdf->Pdf()->ln();
            $this->pdf->Cell()->text($detalii)->width(190)->border('')->halign('L')->out();
        }

        if( $detalii = $this->detalii_private()) // afisarea campului detalii
        {
            if(!$this->redus)
            {
                $this->pdf->Pdf()->ln();
                $this->pdf->Cell()->text($detalii)->width(190)->border('')->halign('L')->out();
            }
        }*/
    }

    protected function outfooter()
    {
        $this->pdf->Pdf()->SetFont('freeserif', '', 11, '', false);
        $this->pdf->Pdf()->SetXY(10, -25);
        $this->pdf->Cell()->text('Contactatine la telefon 0756633766');
//        $this->pdf->Cell()->text('Pentru informaţii suplimentare sau alte oferte imobiliare mă puteţi contacta la telefon ' . $this->apartament->current_user->telefon . ', pe email ' . $this->apartament->current_user->email . ' sau la sediul nostru pe ' . str_replace([chr(13) . chr(10), chr(10) . chr(13), chr(10), chr(13)], ' ', $this->apartament->current_org->adresa) )->width(190)->border('T')->halign('C')->out()->reset('border')->reset('width')->reset('halign');
    }

    public function banca()
    {
        return 'Alfa banc';
    }

    protected function createpdf()
    {
        // Pagina 1
        $this->outlogo();
        $this->outnume();
        $this->outWelcome();
//        $this->outdetails();
        $this->outfooter();
    }

    public function Output()
    {
        $this->createpdf();
        $this->pdf->Pdf()->Output($this->fileName( $this->destionation == "F" || $this->destionation == "FI" ), $this->destionation);
    }
}
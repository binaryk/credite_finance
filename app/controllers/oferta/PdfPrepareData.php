<?php
namespace Oferta;

use Credite\PersoaneFizice;
use Credite\UploadedDoc;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

trait PdfPrepareData
{
    public function pdf()
    {
        $data = (array) Input::get('data');
        $pdf = new CreateOfertaPdf('L', 'A4', 'F', $data, true);
        $pdf->Output();

        /*
         * getName(true) -> sa-mi dea calea
         * */
        $this->insertUploadDoc($pdf);

        return URL::to("app/oferte/" . $pdf->getName(false));
    }

    public function insertUploadDoc($pdf)
    {
        $location = $pdf->getName(true);
        UploadedDoc::createRecord(
            [
                'id_client' => '0',
                'file_name' => $pdf->getName(false),
                'file_url' => $pdf->getName(true),
                'file_extension' => 'pdf',
                'file_size' => '10',
                'id_document_necesar' => '0',
                'id_manual' => '0',
                'id_instructiuni' => '0',
                'id_acte_produse' => '0',
                'oferte_generate' => '1',
            ]
        );
    }


}
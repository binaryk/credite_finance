<?php
namespace Oferta;

use Credite\PersoaneFizice;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

trait PdfPrepareData
{
    public function pdf()
    {
        $data = Input::all();
        $pdf = new CreateOfertaPdf('P', 'A4', 'F', $data, true);
        $pdf->Output();
        return URL::to("app/oferte/" . $pdf->getName(false));
    }


}
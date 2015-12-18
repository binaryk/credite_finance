<?php
namespace Oferta;

use Credite\PersoaneFizice;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

trait PdfPrepareData
{
    public function pdf()
    {
        dd( Input::get('data')[0] );
    }
}
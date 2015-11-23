<?php
namespace Credite\Clienti;
use Credite\PersoaneFizice;
use Credite\PersoaneFizice\Form\PersoaneFiziceForm;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Credite\PersoaneFizice\Form\PrimaCasaForm;

class PrepareControlsExternController  extends PersoaneFiziceForm{
    protected $layout = 'template.layout';


    public function controls(){
    	
    	return ['controls' => $this->controls, 'model' => $this->model()];
    } 



}
<?php
namespace Credite\Clienti;
use Credite\PersoaneFizice;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Credite\PersoaneFizice\Form\PrimaCasaForm;

class PrepareControlsExternController  extends PrimaCasaForm{
    protected $layout = 'template.layout';


    public function controls(){
    	
    	return ['controls' => $this->controls, 'model' => $this->model()];
    } 



}
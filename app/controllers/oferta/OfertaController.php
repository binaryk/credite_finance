<?php
namespace Oferta;

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
}
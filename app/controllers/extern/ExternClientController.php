<?php
namespace Credite\Clienti;
use Credite\PersoaneFizice;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Credite\Clienti\PrepareControlsExternController;


class ExternClientController  extends \BaseController{
    protected $layout = 'template.layout';

    public function link_generate(){

        $breadcrumbs = [
            [
            'name' => 'Generare link',
            'url'  => "generate-link",
            'ids' => ''
            ]  
        ];
        return View::make('extern.generate_link')->with(compact('breadcrumbs'));

    }

    public function link_generate_post(){
        $link = URL::route('confirm_link') . '/' .$this->generateRandomString();

        /*va trebui bagat in bd si confirmat*/
         return $link;
     }

     public function confirm($code){
        $controller = new PrepareControlsExternController();
          $controls = $controller->controls()['controls'];
          $model    = $controller->controls()['model'];
          return View::make('extern.form')->with(compact('controls', 'model'));
      }  



    function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    } 
}
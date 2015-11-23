<?php
use Credite\PersoaneFizice;

class PrepareHelloController extends BaseController {

	public function __construct(){
		parent::__construct();
	} 
	
	public function prepare_clients() {
		$rows 	 = [];
		$clienti = PersoaneFizice::where('id_organizatie', $this->current_org->id)->orderBy('id', 'DESC')->get();
		$tips    = PersoaneFizice::getTipClient();
		$out_tip = [];
		$count   = 0;
		foreach ($tips as $key => $tip) {
			$out['clients'] = PersoaneFizice::where('id_organizatie', $this->current_org->id)->where('tip_client', $key)->count();
			$count += $out['clients'];
			$out['nume_tip']= $tip;
			$out['tip']	    = $key;
			$out_tip[] = $out;
		}

		foreach ($out_tip as $key => $tip) {
			$rows[]  = \View::make('hello_page.partials.portofolio')->with(['tip' => $tip])->render();
		}
		return compact('rows', 'count');
	}


}
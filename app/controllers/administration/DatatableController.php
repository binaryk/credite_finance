<?php

namespace Imobiliare\Datatable;

class DatatableController extends \Datatable\DatatableController
{
	protected $layout 		= 'template.layout';

    /**
     * @param $id
     * @throws \Exception
     */
    public function index($id)
	{
        $this->show( \Credite\Grids::make($id)->toIndexConfig($id) );
	}

    public function test($cevq){

    }
    /**
     * @param $id
     * @return mixed
     */
    public function rows($id)
	{
		return $this->dataset( \Credite\Grids::make($id)->toRowDatasetConfig($id) );
	}

    /**
     * @param $id
     * @return mixed
     */
    public function loadForm($id)
	{
		return $this->get_dtform_properties( \Credite\Forms::make($id)->toFormConfig($id), \Input::all() );
	}

    /**
     * @return mixed
     */
    public function doAction()
	{
        // dd(\Input::all());
		return $this->do_action(\Credite\Forms::make($id = \Input::get('code') )->toActionConfig($id), \Input::all() );
	}
}
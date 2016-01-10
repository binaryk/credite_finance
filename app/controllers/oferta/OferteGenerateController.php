<?php
namespace Credite\Datatable;

use Credite\UploadedDoc;

class OferteGenerateController extends \Datatable\DatatableController
{
    protected $layout = 'template.layout';

    public function __construct()
    {

    }

    public function index($id){
        $config = \Credite\Grids::make($id)->toIndexConfig($id);
        $config['breadcrumbs'] = [];
        $this->show( $config + ['other-info' => [] ]);
    }

    public function rows($id){
        $config = \Credite\Grids::make($id)->toRowDatasetConfig($id);
        $filters = $config['source']->custom_filters();
        $config['source']->custom_filters( $filters + [ 'is_oferta' => 'uploaded_docs.oferte_generate = 1'  ]);
        return $this->dataset( $config );
    }

    public function download($id)
    {
        return UploadedDoc::downloadFile($id);
    }

    public function delete()
    {
        return UploadedDoc::deleteFile(\Input::get('id'));
    }



}
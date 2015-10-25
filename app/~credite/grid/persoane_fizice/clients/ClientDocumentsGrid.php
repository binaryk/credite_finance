<?php
namespace Credite\PersoaneFizice\Grid;

class ClientDocumentsGrid extends \Credite\GridsRecord
{

	public function __construct($id)
	{
		parent::__construct($id);
		$this->view           = 'persoane_fizice.client_document.index'; 
		$this->icon           = 'admin/img/icons/dt/gali.png';
		$this->caption        = 'Documente';
		$this->toolbar        = 'persoane_fizice.client_document.toolbar';
		$this->name           = 'dt';
		$this->display_start  = 0;
		$this->display_length = 10;
		$this->default_order  = "1,'asc'";
		$this->form           = 'Credite\PersoaneFizice\Form\ClientDocumentForm';
		$this->css            = 'admin/css/dt/dt.css, admin/css/dt/toolbar.css, 
								 admin/css/dt/dtform.css, 
								 packages/fileinput/css/fileinput.min.css,
								 admin/css/fileinput/fileinput.css, 
								 packages/bxslider/jquery.bxslider.css,
								 assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css';
		$this->js             = 'admin/js/libraries/form/dtform.js,
								 packages/fileinput/js/fileinput.min.js, 
								 packages/bxslider/jquery.bxslider.js,
								 assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js';
		$this->row_source     = 'client-documents-row-source';  //'apartament_photo-row-source'; ////////Schimbare
		$this->rows_source_sql 				= 
			"
			SELECT 
				uploaded_docs.* 
			FROM uploaded_docs
			:where:
			:order:
			";
		$this->count_filtered_records_sql 	= 
			"
			SELECT 
				COUNT(*) as cnt 
			FROM uploaded_docs 
			:where:
			";
		$this->count_total_records_sql     	= 
			"
			SELECT 
				COUNT(*) as cnt 
			FROM uploaded_docs
			";

		$this->columns        = [
			'1' => [
				'id'        => '#',
				'orderable' => 'no',
				'class'     => 'td-record-count td-align-right',
				'visible'   => 'yes',
				'header'    => ['caption' => '#', 'style'   => 'width:5%',],
				'type'      => 'row-number',
				'source'    => 'row-number',
			],
			'2' => [
				'id'        => 'nume',
				'orderable' => 'yes',
				'class'     => 'td-align-left',
				'visible'   => 'yes',
				'header'    => ['caption' => 'Nume fişier', 'style'   => 'width:55%',],
				'type'      => 'view',
				'source'    => 'persoane_fizice.client_document.~file_name', //'proprietari.apartamente.photos.~file_name',
			],
			'3' => [
				'id'        => 'created_at',
				'orderable' => 'yes',
				'class'     => 'td-align-center',
				'visible'   => 'yes',
				'header'    => ['caption' => 'Data creării', 'style'   => 'width:15%',],
				'type'      => 'field-date-time',
				'source'    => 'created_at',
			],
			'4' => [
				'id'        => 'size',
				'orderable' => 'yes',
				'class'     => 'td-align-right',
				'visible'   => 'yes',
				'header'    => ['caption' => 'Mărime', 'style'   => 'width:10%',],
				'type'      => 'field-file-size',
				'source'    => 'file_size',
			],
			'5' => [
				'id'        => 'type',
				'orderable' => 'yes',
				'class'     => 'td-align-center',
				'visible'   => 'yes',
				'header'    => ['caption' => 'Tip fişier', 'style'   => 'width:10%',],
				'type'      => 'view',
				'source'    => 'persoane_fizice.client_document.~file_type',
			],
			'6' => [
				'id'        => 'action',
				'orderable' => 'no',
				'class'     => 'td-align-center td-actions',
				'visible'   => 'yes',
				'header'    => ['caption' => 'Acţiuni', 'style'   => 'width:5%',],
				'type'      => 'view',
				'source'    => 'persoane_fizice.client_document.~actions',
			],
		];
		$this->fields = [
			'fields'      => '',
			'searchables' => 'uploaded_docs.file_name',
			'orderables'  => [
				1 => 'uploaded_docs.file_name', 
				2 => 'uploaded_docs.file_size', 
				3 => 'uploaded_docs.file_extension', 
			],
		];
		$this->filters = [
			'deleted' => 'uploaded_docs.deleted_at is null',
		];

	}

    public static function create()
	{
		//dd("1");
		return self::$instance = new ClientDocumentsGrid('client-documents');
	}
	
}
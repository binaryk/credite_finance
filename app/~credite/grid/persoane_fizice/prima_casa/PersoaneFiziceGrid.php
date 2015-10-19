<?php
namespace Credite\PersoaneFizice\Grid;

class PersoaneFiziceGrid extends \Credite\GridsRecord
{

    public function __construct($id)
    {
        parent::__construct($id);
        $this->view           = 'persoane_fizice.prima_casa.index'; 
        $this->icon           = 'admin/img/icons/dt/settings.png';
        $this->caption        = 'Prima Casa';
        $this->toolbar        = 'persoane_fizice.prima_casa.toolbar';
        $this->name           = 'dt';
        $this->display_start  = 0;
        $this->display_length = 10;
        $this->default_order  = "1,'asc'";
        $this->form           = 'Credite\PersoaneFizice\Form\PrimaCasaForm';
        $this->css            = 'admin/css/dt/dt.css, admin/css/dt/toolbar.css, admin/css/dt/dtform.css, assets/global/plugins/icheck/skins/all.css';
        $this->js             = 'admin/js/libraries/form/dtform.js, assets/global/plugins/icheck/icheck.min.js, assets/admin/pages/scripts/form-icheck.js';
        $this->row_source     = 'persoane-fizice-row-source';
        $this->rows_source_sql 				= 'SELECT
                                                * 
                                                FROM persoane_fizice
                                                :where: :order:';
        $this->count_filtered_records_sql 	= 'SELECT COUNT(*) as cnt FROM persoane_fizice :where:';
        $this->count_total_records_sql     	= 'SELECT COUNT(*) AS cnt FROM persoane_fizice';
        $this->columns        = [
            '1' => [
                'id'        => '#',
                'orderable' => 'no',
                'class'     => 'td-record-count td-align-center',
                'visible'   => 'yes',
                'header'    => ['caption' => '#', 'style'   => 'width:3%',],
                'type'      => 'row-number',
                'source'    => 'row-number',
            ],
            '2' => [
                'id'        => 'nume',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Nume persoana fizica', 'style'   => 'width:90%',],
                'type'      => 'field',
                'source'    => 'nume',//numele coloanei din tabelul din BD
            ], 
            '4' => [
                'id'        => 'action',
                'orderable' => 'no',
                'class'     => 'td-align-left td-actions',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Acţiuni', 'style'   => 'width:7%',],
                'type'      => 'view',
                'source'    => 'persoane_fizice.prima_casa.~actions',
            ],
        ];
        $this->fields = [
            'fields'      => '',
            'searchables' => 'id, nume',
            'orderables'  => [1 => "id"],
        ];
        $this->filters = [
            'deleted' => 'deleted_at is null',
        ];

    }

    public static function create()
    {
        return self::$instance = new PersoaneFiziceGrid('prima-casa');
    }

}
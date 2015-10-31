<?php
namespace Credite\PersoaneFizice\Grid;

class PersoaneFiziceGrid extends \Credite\GridsRecord
{

    public function __construct($id)
    {
        parent::__construct($id);
        $this->view           = 'persoane_fizice.prima_casa.index'; 
        $this->icon           = 'admin/img/icons/dt/settings.png';
        $this->caption        = 'Clienti';
        $this->toolbar        = 'persoane_fizice.prima_casa.toolbar';
        $this->name           = 'dt';
        $this->display_start  = 0;
        $this->display_length = 10;
        $this->default_order  = "1,'asc'";
        $this->form           = 'Credite\PersoaneFizice\Form\PrimaCasaForm';
        $this->css            = 'packages/datatables/css/1.10.4/datatable.css,
                                        packages/datatables/css/1.10.4/dataTables.bootstrap.css,
                                      admin/css/dt/dt.css,
                                      admin/css/dt/toolbar.css,
                                      admin/css/dt/dtform.css,
                                      assets/global/plugins/icheck/skins/all.css,
                                      assets/global/plugins/bootstrap-datepicker/css/datepicker3.css,
                                      assets/global/plugins/bootstrap-select/bootstrap-select.min.css,
                                      assets/global/plugins/select2/select2.css,
                                      assets/global/css/plugins.css
                                       ';
                                       /*
                                       packages/datatables/css/1.10.4/datatable.css
packages/datatables/css/1.10.4/dataTables.bootstrap.css
admin/css/dt/dt.css
admin/css/dt/toolbar.css
admin/css/dt/dtform.css
assets/global/plugins/icheck/skins/all.css
assets/global/plugins/bootstrap-datepicker/css/datepicker3.css
assets/global/plugins/bootstrap-select/bootstrap-select.min.css
assets/global/plugins/select2/select2.css
assets/global/css/plugins.css
                                        */
      $this->js             = 'admin/js/libraries/form/dtform.js,
                               assets/global/plugins/icheck/icheck.min.js,
                               assets/admin/pages/scripts/form-icheck.js,
                               assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js,
                               assets/global/plugins/bootstrap-select/bootstrap-select.min.js,
                               assets/global/plugins/select2/select2.min.js,
                               assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js,
                               assets/admin/pages/scripts/components-pickers.js,
                               assets/admin/pages/scripts/portlet-draggable.js';
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
                'header'    => ['caption' => 'Nume persoană fizică', 'style'   => 'width:22%',],
                'type'      => 'field',
                'source'    => 'nume',//numele coloanei din tabelul din BD
            ], 
            '3' => [
                'id'        => 'prenume',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Prenume persoană fizică', 'style'   => 'width:22%',],
                'type'      => 'field',
                'source'    => 'prenume',//numele coloanei din tabelul din BD
            ], 
            '4' => [
                'id'        => 'email',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'E-mail', 'style'   => 'width:23%',],
                'type'      => 'field',
                'source'    => 'email',//numele coloanei din tabelul din BD
            ], 
            '5' => [
                'id'        => 'telefon',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Telefon', 'style'   => 'width:23%',],
                'type'      => 'field',
                'source'    => 'telefon',//numele coloanei din tabelul din BD
            ], 
            '6' => [
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
            'orderables'  => [],//[1 => "id"],
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
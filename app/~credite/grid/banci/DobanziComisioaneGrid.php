<?php
namespace Credite\Banci\Grid;

class DobanziComisioaneGrid extends \Credite\GridsRecord
{

    public function __construct($id)
    {
        parent::__construct($id);
        $this->view           = 'banci.produse.dobanzi.index';
        $this->icon           = 'admin/img/icons/dt/settings.png';
        $this->caption        = 'Dobânzi și comisioane';
        $this->toolbar        = 'banci.produse.dobanzi.toolbar';
        $this->name           = 'dt';
        $this->display_start  = 0;
        $this->display_length = 10;
        $this->default_order  = "1,'asc'";
        $this->form           = 'Credite\Banci\Form\DobanziComisioaneForm';
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
        $this->js             = 'admin/js/libraries/form/dtform.js,
                               assets/global/plugins/icheck/icheck.min.js,
                               assets/admin/pages/scripts/form-icheck.js,
                               assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js,
                               assets/global/plugins/bootstrap-select/bootstrap-select.min.js,
                               assets/global/plugins/select2/select2.min.js,
                               assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js,
                               assets/admin/pages/scripts/components-pickers.js,
                               assets/admin/pages/scripts/portlet-draggable.js';
        $this->row_source     = 'dobanzi_comisioane_row_source';
        $this->rows_source_sql 				= 'SELECT
                                                *
                                                FROM dobanzi_comisioane
                                                :where: :order:';
        $this->count_filtered_records_sql 	= 'SELECT COUNT(*) as cnt FROM dobanzi_comisioane :where:';
        $this->count_total_records_sql     	= 'SELECT COUNT(*) AS cnt FROM dobanzi_comisioane';
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
                'id'        => 'created_at',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Data adăugării', 'style'   => 'width:12%',],
                'type'      => 'view',
                'source'    => 'banci.produse.dobanzi.created_at',//numele coloanei din tabelul din BD
            ],
            '3' => [
                'id'        => 'dobanda_fixa_std_lei',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Dobanda fixa (lei)', 'style'   => 'width:12%',],
                'type'      => 'field',
                'source'    => 'dobanda_fixa_std_lei',//numele coloanei din tabelul din BD
            ],
            '4' => [
                'id'        => 'dobanda_fixa_std_eur',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Dobanda fixa (euro)', 'style'   => 'width:12%',],
                'type'      => 'field',
                'source'    => 'dobanda_fixa_std_eur',//numele coloanei din tabelul din BD
            ],
            '5' => [
                'id'        => 'dobanda_fixa_preferentiala_lei',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Dobanda fixa pref (lei)', 'style'   => 'width:12%',],
                'type'      => 'field',
                'source'    => 'dobanda_fixa_preferentiala_lei',//numele coloanei din tabelul din BD
            ],

            '6' => [
                'id'        => 'dobanda_fixa_preferentiala_eur',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'obanda fixa pref (eur)', 'style'   => 'width:12%',],
                'type'      => 'field',
                'source'    => 'dobanda_fixa_preferentiala_eur',//numele coloanei din tabelul din BD
            ],

            '7' => [
                'id'        => 'marja_fixa_std_lei',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Marja fixa std (lei)', 'style'   => 'width:12%',],
                'type'      => 'field',
                'source'    => 'marja_fixa_std_lei',//numele coloanei din tabelul din BD
            ],

            '8' => [
                'id'        => 'marja_fixa_std_eur',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Marja fixa std (eur)', 'style'   => 'width:12%',],
                'type'      => 'field',
                'source'    => 'marja_fixa_std_eur',//numele coloanei din tabelul din BD
            ],

            '9' => [
                'id'        => 'marja_fixa_preferentiala_lei',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Marja fixa pref (lei)', 'style'   => 'width:12%',],
                'type'      => 'field',
                'source'    => 'marja_fixa_preferentiala_lei',//numele coloanei din tabelul din BD
            ],

            '10' => [
                'id'        => 'marja_fixa_preferentiala_eur',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Marja fixa pref (eur)', 'style'   => 'width:12%',],
                'type'      => 'field',
                'source'    => 'marja_fixa_preferentiala_eur',//numele coloanei din tabelul din BD
            ],
            '11' => [
                'id'        => 'action',
                'orderable' => 'no',
                'class'     => 'td-align-left td-actions',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Acţiuni', 'style'   => 'width:7%',],
                'type'      => 'view',
                'source'    => 'banci.produse.conditii.~actions',
            ],
        ];
        $this->fields = [
            'fields'      => '',
            'searchables' => 'id, nume',
            'orderables'  => [],
        ];
        $this->filters = [
            'deleted' => 'deleted_at is null',
        ];

    }

    public static function create()
    {
        return self::$instance = new DobanziComisioaneGrid('dobanzi_comisioane');
    }

}
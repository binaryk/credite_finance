<?php
namespace Credite\Banci\Grid;

class ConditiiEligibilitateGrid extends \Credite\GridsRecord
{

    public function __construct($id)
    {
        parent::__construct($id);
        $this->view           = 'banci.produse.conditii.index';
        $this->icon           = 'admin/img/icons/dt/settings.png';
        $this->caption        = 'Condiții de eligibilitate';
        $this->toolbar        = 'banci.produse.conditii.toolbar';
        $this->name           = 'dt';
        $this->display_start  = 0;
        $this->display_length = 10;
        $this->default_order  = "1,'asc'";
        $this->form           = 'Credite\Banci\Form\ConditiiEligibilitateForm';
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
        $this->row_source     = 'conditii_eligibilitate_row_source';
        $this->rows_source_sql 				= 'SELECT
                                                *
                                                FROM conditii_eligibilitate
                                                :where: :order:';
        $this->count_filtered_records_sql 	= 'SELECT COUNT(*) as cnt FROM conditii_eligibilitate :where:';
        $this->count_total_records_sql     	= 'SELECT COUNT(*) AS cnt FROM conditii_eligibilitate';
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
                'header'    => ['caption' => 'Data adăugării', 'style'   => 'width:12.8%',],
                'type'      => 'view',
                'source'    => 'banci.produse.dobanzi.created_at',//numele coloanei din tabelul din BD
            ],
            '3' => [
                'id'        => 'vechime_munca_actual',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Vechime la locul de munca actual( luni)', 'style'   => 'width:12.8%',],
                'type'      => 'field',
                'source'    => 'vechime_munca_actual',//numele coloanei din tabelul din BD
            ],
            '4' => [
                'id'        => 'vechime_munca_total',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Vechime totala in munca (luni)', 'style'   => 'width:12.8%',],
                'type'      => 'field',
                'source'    => 'vechime_munca_total',//numele coloanei din tabelul din BD
            ],
            '5' => [
                'id'        => 'venit_minim',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Venit net minim(lei)', 'style'   => 'width:12.8%',],
                'type'      => 'field',
                'source'    => 'venit_minim',//numele coloanei din tabelul din BD
            ],
            '6' => [
                'id'        => 'perioada_contractului_munca',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Perioada contractului de munca (determinata/nedeterminata)', 'style'   => 'width:12.8%',],
                'type'      => 'field',
                'source'    => 'perioada_contractului_munca',//numele coloanei din tabelul din BD
            ],
            '7' => [
                'id'        => 'varsta_minima',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Varsta minima (18 ani)', 'style'   => 'width:12.8%',],
                'type'      => 'field',
                'source'    => 'varsta_minima',//numele coloanei din tabelul din BD
            ],
            '8' => [
                'id'        => 'varsta_maxima',
                'orderable' => 'yes',
                'class'     => 'td-align-left',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Varsta maxima (70 ani)', 'style'   => 'width:12.8%',],
                'type'      => 'field',
                'source'    => 'varsta_maxima',//numele coloanei din tabelul din BD
            ],
            '9' => [
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
        return self::$instance = new ConditiiEligibilitateGrid('conditii_eligibilitate');
    }

}
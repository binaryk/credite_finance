<?php
namespace Credite\Banci\Grid;

class ProduseGrid extends \Credite\GridsRecord
{

    public function __construct($id)
    {
        parent::__construct($id);
        $this->view           = 'banci.produse.index';
        $this->icon           = 'admin/img/icons/dt/settings.png';
        $this->caption        = 'Bănci';
        $this->toolbar        = 'banci.produse.toolbar';
        $this->name           = 'dt';
        $this->display_start  = 0;
        $this->display_length = 10;
        $this->default_order  = "1,'asc'";
        $this->form           = 'Credite\Banci\Form\BanciForm';
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
        $this->row_source     = 'banca_produse_row_source';
        $this->rows_source_sql 				= 'SELECT
                                                *
                                                FROM produse
                                                LEFT JOIN
                                                banca_produs
                                                ON banca_produs.id_produs = produse.id
                                                :where: :order:';
        $this->count_filtered_records_sql 	= 'SELECT COUNT(*) as cnt FROM produse LEFT JOIN banca_produs ON banca_produs.id_produs = produse.id :where:';
        $this->count_total_records_sql     	= 'SELECT COUNT(*) AS cnt FROM produse';
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
                'header'    => ['caption' => 'Denumire', 'style'   => 'width:90%',],
                'type'      => 'field',
                'source'    => 'nume',//numele coloanei din tabelul din BD
            ],
            '3' => [
                'id'        => 'action',
                'orderable' => 'no',
                'class'     => 'td-align-left td-actions',
                'visible'   => 'yes',
                'header'    => ['caption' => 'Acţiuni', 'style'   => 'width:7%',],
                'type'      => 'view',
                'source'    => 'banci.produse.~actions',
            ],
        ];
        $this->fields = [
            'fields'      => '',
            'searchables' => 'id, nume',
            'orderables'  => [],
        ];
        $this->filters = [
            'deleted' => 'banca_produs.deleted_at is null',
        ];

    }

    public static function create()
    {
        return self::$instance = new ProduseGrid('banca_produse');
    }

}
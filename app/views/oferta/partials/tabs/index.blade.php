<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>Oferte
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title="">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <h3>Oferte</h3>
        <div class="tabbable-line">
            <ul class="nav nav-tabs ">
                @for($i = 1; $i <= $oferte; $i++)
                    @include('oferta.partials.tabs.header',['count' => $i])
                @endfor
                
            </ul>
            <div class="tab-content">

                @for($i = 1; $i <= $oferte; $i++)
                    @include('oferta.partials.tabs.tab_1',['count' => $i,'control' => $controls[$i]])
                @endfor

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="button" ng-click="pdf({{@$client_id}})" class="btn blue">Generaza pdf</button>
            </div>
        </div>
    </div>
    <div class="portlet-footer">
        Datele au fost completate cu succes.
    </div>
</div>
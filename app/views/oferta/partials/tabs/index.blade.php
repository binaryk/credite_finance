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
    </div>
</div>
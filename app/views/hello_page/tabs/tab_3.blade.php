<div class="tab-pane" id="tab_1_4">
    <div class="row">
        <div class="col-md-12">
            <div class="add-portfolio">
                <span>
                {{ $rows['count'] }} clienți sunt în baza de date </span>
                <a href="{{ URL::route('clienti-index') }}" class="btn icn-only green">
                Adaugă client nou <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
    </div>
    <!--end add-portfolio-->
    @foreach($rows['rows'] as $k => $row)

        {{ $row }}

    @endforeach
</div>
<!--end tab-pane-->
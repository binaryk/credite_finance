<div class="row portfolio-block">
    <div class="col-md-5">
        <div class="portfolio-text">
            <img src="{{ asset('admin/img/icons/dt/beneficiari.png') }}" alt=""/>
            <div class="portfolio-text-info">
                <h4>  {{ $tip['nume_tip'] }}  </h4>
                <p>
                Ceva informatie
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-5 portfolio-stat">
        <div class="portfolio-info">
            Număr clienți
             <span>
                {{ $tip['clients'] }}
             </span>
        </div>
        <div class="portfolio-info">
            Număr clienți în așteptare <span>
            22</span>
        </div>
        <div class="portfolio-info">
            Sume totale acordate <span>
            $37.240 </span>
        </div>
    </div>
    <div class="col-md-2">
        <div class="portfolio-btn">
            <a href="{{ URL::route('clienti-index', ['tip'=> $tip['tip'] ]) }}" class="btn bigicn-only">
            <span>
            Intră la categorie </span>
            </a>
        </div>
    </div>
</div>
<div class="tab-pane active" id="tab_{{$count}}">
    <form action="" id="oferta_{{$count}}">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                {{ $control['banca']  }}
            </div>
            <div class="col-md-6">
                {{ $control['tip_credit']  }}
            </div>
        </div>
        <div class="col-md-12" ng-show="tip_credit_{{$count}} != ''">
            <div class="col-md-6">
                {{ $control['perioada_max_finantare'] }}
            </div>
            <div class="col-md-6">
                {{ $control['perioada_finantare_luata_in_calcul'] }}
            </div>
            <div class="col-md-6">
                {{ $control['suma_solicitata'] }}
            </div>
            <div class="col-md-6">
                {{ $control['suma_maxima_incadrare'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valuta_creditului'] }}
            </div>
            <div class="col-md-6">
                {{ $control['dobanda_preferentiala'] }}
            </div>
            <div class="col-md-6">
                {{ $control['tipul_de_dobanda'] }}
            </div>
            <div class="col-md-6">
                {{ $control['marja_fixa_practicata_banca'] }}
            </div>
            <div class="col-md-6">
                {{ $control['tip_indice_referinta'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_indice_zi_referinta'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_totala_dobanda'] }}
            </div>
            <div class="col-md-6">
                {{ $control['avans_minim'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_avans_minim'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_totala_investitiei'] }}
            </div>
            <div class="col-md-6">
                {{ $control['comision_administrare'] }}
            </div>
            <div class="col-md-6">
                {{ $control['rata_luanara_inclusiv_comision_gestionare'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_comision_analiza'] }}
            </div>
            <div class="col-md-6">
                {{ $control['comision_acordare'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_comision_acordare'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_estimata_rambursare'] }}
            </div>
            <div class="col-md-6">
                {{ $control['dae'] }}
            </div>
            <div class="col-md-6">
                {{ $control['taxa_evaluare_imobil'] }}
            </div>
            <div class="col-md-6">
                {{ $control['taxa_inscriere_arhiva'] }}
            </div>
            <div class="col-md-6">
                {{ $control['taxe_notariale_ante_contract'] }}
            </div>
            <div class="col-md-6">
                {{ $control['depozit_colateral'] }}
            </div>
            <div class="col-md-6">
                {{ $control['prima_asigurare_imobil_anuala'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_prima_asigurare_imobil'] }}
            </div>
            <div class="col-md-6">
                {{ $control['prima_asigurare_imobil_pad'] }}
            </div>
            <div class="col-md-6">
                {{ $control['prima_asigurare_viata_anuala'] }}
            </div>
            <div class="col-md-6">
                {{ $control['valoare_prima_asigurare'] }}
            </div>
            <div class="col-md-6">
                {{ $control['comision_administrare_fond_national_anuala'] }}
            </div>
            <div class="col-md-6">
                {{ $control['comision_servicii_bancarea'] }}
            </div>
            <div class="col-md-6">
                {{ $control['comision_rambursare_anticipata'] }}
            </div>
            <div class="col-md-6">
                {{ $control['alte_comisioane_banca'] }}
            </div>
        </div>
    </div>
    </form>
</div>
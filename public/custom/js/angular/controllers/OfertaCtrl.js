app.controller('OfertaCtrl',['$scope','$http','$rootScope','$compile','$timeout','oferta','FormService',
    function OfertaCtrl($scope, $http, $rootScope, $compile, $timeout,oferta,FormService){
        console.log("OfertaCtrl");
        $scope.dobanzi_com;
        
        $scope.changeNrOferte = function(){

            oferta.create($scope.nr_oferte).then(function(data){
                console.log(data);
                $('#tabs').html(data.html);
                $compile($('#tabs').contents())($scope);
                if($scope.nr_oferte > 1){
                    $('a[href=#tab_2]').click();
                    $('a[href=#tab_1]').click();
                }
                FORMAT.init();
            });

            $scope.initShowHide();
            
        }
        
        $scope.changeBanca = function(oferta_id){
            console.log($scope['banca_'+oferta_id]);
            /*1 ==> trebuie sa iau produsele bancii*/
                var combobox = new COMBOBOX({
                    'url'     : $rootScope.config.r_post_produse_by_banca,
                    'id'      : $scope['banca_'+oferta_id],
                    'control' : '#tip_credit_'+oferta_id,
                    'model'   : '\\Credite\\Produs',
                    'field'   : 'name'
                });
                combobox.populate(0);
                $compile($('#tip_credit_'+oferta_id).contents())($scope);
        }

        $scope.$watch('[valuta_creditului_1,dobanda_preferentiala_1,tipul_de_dobanda_1,tip_indice_referinta_1]', function () {
            console.log($scope.dobanda_preferentiala_1);
            console.log($scope.tipul_de_dobanda_1);
            if( $scope.valuta_creditului_1 == "RON" && $scope.dobanda_preferentiala_1 == "Da" && $scope.tipul_de_dobanda_1 == "fixa" )
            {
                $scope.valoare_totala_dobanda_1 = $scope.dobanzi_com.dobanda_fixa_preferentiala_lei;
            }
            if( $scope.valuta_creditului_1 == "EUR" && $scope.dobanda_preferentiala_1 == "Da" && $scope.tipul_de_dobanda_1 == "fixa" )
            {
                $scope.valoare_totala_dobanda_1 = $scope.dobanzi_com.dobanda_fixa_preferentiala_eur;
            }
            if( $scope.valuta_creditului_1 == "RON" && $scope.dobanda_preferentiala_1 == "NU" && $scope.tipul_de_dobanda_1 == "fixa" )
            {
                $scope.valoare_totala_dobanda_1 = $scope.dobanzi_com.dobanda_fixa_std_lei;
            }
            if( $scope.valuta_creditului_1 == "EUR" && $scope.dobanda_preferentiala_1 == "NU" && $scope.tipul_de_dobanda_1 == "fixa" )
            {
                $scope.valoare_totala_dobanda_1 = $scope.dobanzi_com.dobanda_fixa_std_eur;
            }
            if( $scope.valuta_creditului_1 == "RON" && $scope.dobanda_preferentiala_1 == "Da" && $scope.tipul_de_dobanda_1 == "variabila" )
            {
                $scope.marja_fixa_practicata_banca_1 = $scope.dobanzi_com.marja_fixa_preferentiala_lei;
                $scope.valoare_indice_zi_referinta_1 = $scope.dobanzi_com[$scope.tip_indice_referinta_1];
                $scope.valoare_totala_dobanda_1 = $scope.valoare_indice_zi_referinta_1 + $scope.marja_fixa_practicata_banca_1;

            }
            if( $scope.valuta_creditului_1 == "RON" && $scope.dobanda_preferentiala_1 == "NU" && $scope.tipul_de_dobanda_1 == "variabila" )
            {
                $scope.marja_fixa_practicata_banca_1 = $scope.dobanzi_com.marja_fixa_std_lei;
                $scope.valoare_indice_zi_referinta_1 = $scope.dobanzi_com[$scope.tip_indice_referinta_1];
                $scope.valoare_totala_dobanda_1 = $scope.valoare_indice_zi_referinta_1 + $scope.marja_fixa_practicata_banca_1;

            }
            if( $scope.valuta_creditului_1 == "EUR" && $scope.dobanda_preferentiala_1 == "NU" && $scope.tipul_de_dobanda_1 == "variabila" )
            {
                $scope.marja_fixa_practicata_banca_1 = $scope.dobanzi_com.marja_fixa_std_eur;
                $scope.valoare_indice_zi_referinta_1 = $scope.dobanzi_com[$scope.tip_indice_referinta_1];
                $scope.valoare_totala_dobanda_1 = $scope.valoare_indice_zi_referinta_1 + $scope.marja_fixa_practicata_banca_1;

            }
            if( $scope.valuta_creditului_1 == "EUR" && $scope.dobanda_preferentiala_1 == "Da" && $scope.tipul_de_dobanda_1 == "variabila" )
            {
                $scope.marja_fixa_practicata_banca_1 = $scope.dobanzi_com.marja_fixa_preferentiala_eur;
                $scope.valoare_indice_zi_referinta_1 = $scope.dobanzi_com[$scope.tip_indice_referinta_1];
                $scope.valoare_totala_dobanda_1 = $scope.valoare_indice_zi_referinta_1 + $scope.marja_fixa_practicata_banca_1;

            }
        }, true);

        $scope.$watch('[suma_solicitata_1,avans_minim_1]', function () {
            $scope.valoare_avans_minim_1 = ( $scope.avans_minim_1 / 100 ) * $scope.suma_solicitata_1 / ( ( 100 - $scope.avans_minim_1 ) / 100);
            $scope.valoare_totala_investitiei_1 = $scope.valoare_avans_minim_1 + $scope.suma_solicitata_1;
        }, true);

        $scope.$watch('[comision_acordare_1,suma_solicitata_1]', function () {
             $scope.valoare_comision_acordare_1 = $scope.comision_acordare_1 * $scope.suma_solicitata_1;
        }, true);

        $scope.$watch('[perioada_finantare_luata_in_calcul_1,tip_anuitati_capital_1,rata_luanara_inclusiv_comision_gestionare_1,valoare_comision_analiza_1,valoare_comision_acordare_1 ]', function () {
                 $scope.valoare_estimata_rambursare_1 = Number.parseFloat($scope.rata_luanara_inclusiv_comision_gestionare_1) * Number.parseFloat($scope.perioada_finantare_luata_in_calcul_1) * 12;   //Number.parseFloat($scope.valoare_comision_acordare_1) + Number.parseFloat($scope.valoare_comision_analiza_1) + Number.parseFloat($scope.rata_luanara_inclusiv_comision_gestionare_1) * Number.parseFloat($scope.perioada_finantare_luata_in_calcul_1) * 12;
        }, true);

        $scope.$watch('[prima_asigurare_imobil_anuala_1,valoare_totala_investitiei_1]', function () {
                 $scope.valoare_prima_asigurare_imobil_1 = Number.parseFloat($scope.prima_asigurare_imobil_anuala_1) * Number.parseFloat($scope.valoare_totala_investitiei_1);
        }, true);

        $scope.changeProdus = function(oferta_id){
           /*trebuie sa iau toate regulile de la dobanzi si comisioane*/
            oferta.dobanzi($scope['tip_credit_'+oferta_id]).then(function(data){
                console.log(data);
                if(!data.data){
                    /*nu exista dobanda*/
                    swal('Info', 'Nu exista dobanzi setate pentru acest produs','info');
                    return false;
                }
                $scope.dobanzi_com = data.data;
                $scope.avans_minim_1 = $scope.dobanzi_com.procent_avans_minim_solicitat;
                $scope.valoare_comision_analiza_1 = $scope.dobanzi_com.valoare_comision_analiza;
                $scope.dae_1 = $scope.dobanzi_com.dae;
                $scope.taxa_evaluare_imobil_1 = $scope.dobanzi_com.evaluare;
                $scope.taxa_inscriere_arhiva_1 = $scope.dobanzi_com.taxa_inscriere_arhiva;
                $scope.prima_asigurare_imobil_anuala_1 = $scope.dobanzi_com.prima_asigurare_imobil;
                $scope.prima_asigurare_imobil_pad_1 = $scope.dobanzi_com.prima_asigurare_pad;
                $scope.prima_asigurare_viata_anuala_1 = $scope.dobanzi_com.asigurare_viata;
                $scope.comision_administrare_fond_national_anuala_1 = $scope.dobanzi_com.comision_administrare_platibil;
                $scope.comision_servicii_bancarea_1 = $scope.dobanzi_com.comision_prestari_servicii_bancare;
                $scope.comision_rambursare_anticipata_1 = $scope.dobanzi_com.comision_rambursare_anticipata;
                $scope.alte_comisioane_banca_1 = $scope.dobanzi_com.precizari_suplimentare;

                if($scope.dobanzi_com.comision_administrare_months == "luna" && $scope.dobanzi_com.comision_administrare_units== "procent"){
                    $scope.comision_administrare_1 = $scope.dobanzi_com.comision_administrare;
                }
                if($scope.dobanzi_com.comision_administrare_months == "luna" && $scope.dobanzi_com.comision_administrare_units == "lei"){
                    $scope.comision_administrare_1 = $scope.dobanzi_com.comision_administrare;
                }
                if($scope.dobanzi_com.comision_administrare_months == "an" && $scope.dobanzi_com.comision_administrare_units == "procent"){
                    $scope.comision_administrare_1 = $scope.dobanzi_com.comision_administrare / 12;
                }
                if($scope.dobanzi_com.comision_administrare_months == "an" && $scope.dobanzi_com.comision_administrare_units == "lei"){
                    $scope.comision_administrare_1 = $scope.dobanzi_com.comision_administrare / 12;
                }

                if($scope.dobanzi_com.comision_acordare_units == "procent"){
                    $scope.comision_acordare_1 = $scope.dobanzi_com.comision_acordare;
                }else{
                    $scope.comision_acordare_1 = $scope.dobanzi_com.comision_acordare;
                }
            });


        }

        $scope.pdf = function(){
            var data = FormService.allDataSource($scope.nr_oferte);
            var send = {};
            send['general'] = {
                'nume_client' : $('#nume_client').val(),
                'nr_oferte'   : $('#nr_oferte').val()
            }
            send['data'] = data;
            console.log(send);
            
            oferta.pdf(send).then(function(data){
                window.open(
                    data,
                    '_blank' // <- This is what makes it open in a new window.
                );
            });
        }

        $scope.initShowHide = function(){
            $(document).on('click','label', function(){
                var selector = $(this).attr('for'),
                    control  = $('#'+selector);
                if(control.is(':visible')){
                    control.attr('data-val',control.val());
                    control.val(-1).hide(100);
                }else{
                    control.show(100);
                    control.val( control.data('val') );
                }

            });
        }

        FORMAT.init();
        
}]);
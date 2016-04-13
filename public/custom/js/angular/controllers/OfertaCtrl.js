app.controller('OfertaCtrl',['$scope','$http','$rootScope','$compile','$timeout','oferta','FormService',
    function OfertaCtrl($scope, $http, $rootScope, $compile, $timeout,oferta,FormService){
        console.log("OfertaCtrl", $scope.client_id);
        $scope.dobanzi_com;
        $scope.dobanzi_com_1;
        $scope.dobanzi_com_2;
        $scope.dobanzi_com_3;
        $scope.dobanzi_com_4;
        $scope.dobanzi_com_5;
        $scope.current_oferta_id = 1;

        $scope.changeNrOferte = function(client_id){
            oferta.create($scope.nr_oferte, client_id).then(function(data){
                console.log(data);
                $('#tabs').html(data.html);
                $compile($('#tabs').contents())($scope);
                $timeout(function(){
                    if($scope.nr_oferte > 1){
                        $('a[href=#tab_2]').click();
                        $('a[href=#tab_1]').click();
                    }
                },500);
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

        $scope.initGeneralWatcher = function(){

            $scope.$watch('[valuta_creditului_'+$scope.current_oferta_id+',dobanda_preferentiala_'+$scope.current_oferta_id+',tipul_de_dobanda_'+$scope.current_oferta_id+',tip_indice_referinta_'+$scope.current_oferta_id+']', function () {
                console.log($scope['dobanda_preferentiala_'+$scope.current_oferta_id]);
                console.log($scope['tipul_de_dobanda_'+$scope.current_oferta_id]);
                if( $scope.lower($scope['valuta_creditului_'+$scope.current_oferta_id]) == "ron" && $scope.lower($scope['dobanda_preferentiala_'+$scope.current_oferta_id]) == "da" && $scope.lower($scope['tipul_de_dobanda_'+$scope.current_oferta_id]) == "fixa" )
                {
                    $scope['valoare_totala_dobanda_'+$scope.current_oferta_id] = $scope.dobanzi_com.dobanda_fixa_preferentiala_lei;
                }
                if( $scope.lower($scope['valuta_creditului_'+$scope.current_oferta_id]) == "eur" && $scope.lower($scope['dobanda_preferentiala_'+$scope.current_oferta_id]) == "da" && $scope.lower($scope['tipul_de_dobanda_'+$scope.current_oferta_id]) == "fixa" )
                {
                    $scope['valoare_totala_dobanda_'+$scope.current_oferta_id] = $scope.dobanzi_com.dobanda_fixa_preferentiala_eur;
                }
                if( $scope.lower($scope['valuta_creditului_'+$scope.current_oferta_id]) == "ron" && $scope.lower($scope['dobanda_preferentiala_'+$scope.current_oferta_id]) == "nu" && $scope.lower($scope['tipul_de_dobanda_'+$scope.current_oferta_id]) == "fixa" )
                {
                    $scope['valoare_totala_dobanda_'+$scope.current_oferta_id] = $scope.dobanzi_com.dobanda_fixa_std_lei;
                }
                if( $scope.lower($scope['valuta_creditului_'+$scope.current_oferta_id]) == "eur" && $scope.lower($scope['dobanda_preferentiala_'+$scope.current_oferta_id]) == "nu" && $scope.lower($scope['tipul_de_dobanda_'+$scope.current_oferta_id]) == "fixa" )
                {
                    $scope['valoare_totala_dobanda_'+$scope.current_oferta_id] = $scope.dobanzi_com.dobanda_fixa_std_eur;
                }
                if( $scope.lower($scope['valuta_creditului_'+$scope.current_oferta_id]) == "ron" && $scope.lower($scope['dobanda_preferentiala_'+$scope.current_oferta_id]) == "da" && $scope.lower($scope['tipul_de_dobanda_'+$scope.current_oferta_id]) == "variabila" )
                {
                    $scope['marja_fixa_practicata_banca_'+$scope.current_oferta_id] = $scope.dobanzi_com.marja_fixa_preferentiala_lei;
                    $scope['valoare_indice_zi_referinta_'+$scope.current_oferta_id] = $scope.dobanzi_com[$scope['tip_indice_referinta_'+$scope.current_oferta_id]];
                    $scope['valoare_totala_dobanda_'+$scope.current_oferta_id] = $scope['valoare_indice_zi_referinta_'+$scope.current_oferta_id] + $scope['marja_fixa_practicata_banca_'+$scope.current_oferta_id];

                }
                if( $scope.lower($scope['valuta_creditului_'+$scope.current_oferta_id]) == "ron" && $scope.lower($scope['dobanda_preferentiala_'+$scope.current_oferta_id]) == "nu" && $scope.lower($scope['tipul_de_dobanda_'+$scope.current_oferta_id]) == "variabila" )
                {
                    $scope['marja_fixa_practicata_banca_'+$scope.current_oferta_id] = $scope.dobanzi_com.marja_fixa_std_lei;
                    $scope['valoare_indice_zi_referinta_'+$scope.current_oferta_id] = $scope.dobanzi_com[$scope['tip_indice_referinta_'+$scope.current_oferta_id]];
                    $scope['valoare_totala_dobanda_'+$scope.current_oferta_id] = $scope['valoare_indice_zi_referinta_'+$scope.current_oferta_id] + $scope['marja_fixa_practicata_banca_'+$scope.current_oferta_id];

                }
                if( $scope.lower($scope['valuta_creditului_'+$scope.current_oferta_id]) == "eur" && $scope.lower($scope['dobanda_preferentiala_'+$scope.current_oferta_id]) == "nu" && $scope.lower($scope['tipul_de_dobanda_'+$scope.current_oferta_id]) == "variabila" )
                {
                    $scope['marja_fixa_practicata_banca_'+$scope.current_oferta_id] = $scope.dobanzi_com.marja_fixa_std_eur;
                    $scope['valoare_indice_zi_referinta_'+$scope.current_oferta_id] = $scope.dobanzi_com[$scope['tip_indice_referinta_'+$scope.current_oferta_id]];
                    $scope['valoare_totala_dobanda_'+$scope.current_oferta_id] = $scope['valoare_indice_zi_referinta_'+$scope.current_oferta_id] + $scope['marja_fixa_practicata_banca_'+$scope.current_oferta_id];

                }
                if( $scope.lower($scope['valuta_creditului_'+$scope.current_oferta_id]) == "eur" && $scope.lower($scope['dobanda_preferentiala_'+$scope.current_oferta_id]) == "da" && $scope.lower($scope['tipul_de_dobanda_'+$scope.current_oferta_id]) == "variabila" )
                {
                    $scope['marja_fixa_practicata_banca_'+$scope.current_oferta_id] = $scope.dobanzi_com.marja_fixa_preferentiala_eur;
                    $scope['valoare_indice_zi_referinta_'+$scope.current_oferta_id] = $scope.dobanzi_com[$scope.tip_indice_referinta_1];
                    $scope['valoare_totala_dobanda_'+$scope.current_oferta_id] = $scope.valoare_indice_zi_referinta_1 + $scope.marja_fixa_practicata_banca_1;

                }
            }, true);

            $scope.$watch('[suma_solicitata_'+$scope.current_oferta_id+',avans_minim_'+$scope.current_oferta_id+']', function () {
                $scope['valoare_avans_minim_'+$scope.current_oferta_id] = ( Number.parseFloat($scope['avans_minim_'+$scope.current_oferta_id]) / 100 ) * Number.parseFloat($scope['suma_solicitata_'+$scope.current_oferta_id]) / ( ( 100 - Number.parseFloat($scope['avans_minim_'+$scope.current_oferta_id]) ) / 100);
                var tmp = Number.parseFloat($scope['valoare_avans_minim_'+$scope.current_oferta_id]) + Number.parseFloat($scope['suma_solicitata_'+$scope.current_oferta_id]);
                $scope['valoare_totala_investitiei_'+$scope.current_oferta_id] = tmp;
            }, true);

            $scope.$watch('[comision_acordare_'+$scope.current_oferta_id+',suma_solicitata_'+$scope.current_oferta_id+']', function () {
                $scope['valoare_comision_acordare_'+$scope.current_oferta_id] = Number.parseFloat($scope['comision_acordare_'+$scope.current_oferta_id]) * Number.parseFloat($scope['suma_solicitata_'+$scope.current_oferta_id]);
            }, true);

            $scope.$watch('[perioada_finantare_luata_in_calcul_'+$scope.current_oferta_id+',tip_anuitati_capital_'+$scope.current_oferta_id+',rata_luanara_inclusiv_comision_gestionare_'+$scope.current_oferta_id+',valoare_comision_analiza_'+$scope.current_oferta_id+',valoare_comision_acordare_'+$scope.current_oferta_id+' ]', function () {
                $scope['valoare_estimata_rambursare_'+$scope.current_oferta_id] = Number.parseFloat($scope['rata_luanara_inclusiv_comision_gestionare_'+$scope.current_oferta_id]) * Number.parseFloat($scope['perioada_finantare_luata_in_calcul_'+$scope.current_oferta_id]) * 12;   //Number.parseFloat($scope.valoare_comision_acordare_1) + Number.parseFloat($scope.valoare_comision_analiza_1) + Number.parseFloat($scope.rata_luanara_inclusiv_comision_gestionare_1) * Number.parseFloat($scope.perioada_finantare_luata_in_calcul_1) * 12;
            }, true);

            $scope.$watch('[prima_asigurare_imobil_anuala_'+$scope.current_oferta_id+',valoare_totala_investitiei_'+$scope.current_oferta_id+']', function () {
                $scope['valoare_prima_asigurare_imobil_'+$scope.current_oferta_id] = Number.parseFloat($scope['prima_asigurare_imobil_anuala_'+$scope.current_oferta_id]) * Number.parseFloat($scope['valoare_totala_investitiei_'+$scope.current_oferta_id]);
            }, true);
        }

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
                $scope['avans_minim_'+$scope.current_oferta_id] = $scope.dobanzi_com.procent_avans_minim_solicitat;
                $scope['valoare_comision_analiza_'+$scope.current_oferta_id] = $scope.dobanzi_com.valoare_comision_analiza;
                $scope['dae_'+$scope.current_oferta_id] = $scope.dobanzi_com.dae;
                $scope['taxa_evaluare_imobil_'+$scope.current_oferta_id] = $scope.dobanzi_com.evaluare;
                $scope['taxa_inscriere_arhiva_'+$scope.current_oferta_id] = $scope.dobanzi_com.taxa_inscriere_arhiva;
                $scope['prima_asigurare_imobil_anuala_'+$scope.current_oferta_id] = $scope.dobanzi_com.prima_asigurare_imobil;
                $scope['prima_asigurare_imobil_pad_'+$scope.current_oferta_id] = $scope.dobanzi_com.prima_asigurare_pad;
                $scope['prima_asigurare_viata_anuala_'+$scope.current_oferta_id] = $scope.dobanzi_com.asigurare_viata;
                $scope['comision_administrare_fond_national_anuala_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_administrare_platibil;
                $scope['comision_servicii_bancarea_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_prestari_servicii_bancare;
                $scope['comision_rambursare_anticipata_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_rambursare_anticipata;
                $scope['alte_comisioane_banca_'+$scope.current_oferta_id] = $scope.dobanzi_com.precizari_suplimentare;

                if($scope.lower($scope.dobanzi_com.comision_administrare_months) == "luna" && $scope.lower($scope.dobanzi_com.comision_administrare_units)== "procent"){
                    $scope['comision_administrare_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_administrare;
                }
                if($scope.lower($scope.dobanzi_com.comision_administrare_months) == "luna" && $scope.lower($scope.dobanzi_com.comision_administrare_units) == "lei"){
                    $scope['comision_administrare_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_administrare;
                }
                if($scope.lower($scope.dobanzi_com.comision_administrare_months) == "an" && $scope.lower($scope.dobanzi_com.comision_administrare_units) == "procent"){
                    $scope['comision_administrare_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_administrare / 12;
                }
                if($scope.lower($scope.dobanzi_com.comision_administrare_months) == "an" && $scope.lower($scope.dobanzi_com.comision_administrare_units) == "lei"){
                    $scope['comision_administrare_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_administrare / 12;
                }

                if($scope.lower($scope.dobanzi_com.comision_acordare_units) == "procent"){
                    $scope['comision_acordare_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_acordare;
                }else{
                    $scope['comision_acordare_'+$scope.current_oferta_id] = $scope.dobanzi_com.comision_acordare;
                }
            });

            $scope.initGeneralWatcher();


        }

        $scope.pdf = function(client_id){
            var data = FormService.allDataSource($scope.nr_oferte);
            var send = {};
            send['general'] = {
                'nume_client' : $('#nume_client').val(),
                'nr_oferte'   : $('#nr_oferte').val()
            }
            send['data'] = data;
            send['client_id'] = client_id;
            console.log(send);

            oferta.pdf(send).then(function(data){
                window.open(
                    data,
                    '_blank'
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

        $scope.lower = function(val){
            if(val){
                return val.toLowerCase();
            }else{
                return '';
            }
        }

        FORMAT.init();

    }]);
app.controller('OfertaCtrl',['$scope','$http','$rootScope','$compile','$timeout','oferta',
    function OfertaCtrl($scope, $http, $rootScope, $compile, $timeout,oferta){
        console.log("OfertaCtrl");
        
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
            
        }

        $scope.pdf = function(){
            var data = [];
            for(var i = 1; i <= $scope.nr_oferte; i++){
                data.push( JSON.stringify( $('form#oferta_'+i).serialize() ) );
            }
            console.log(JSON.stringify(data));
            oferta.pdf(data).then(function(data){
                console.log(data);
            });
        }


        FORMAT.init();
        
}]);
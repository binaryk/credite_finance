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
            });
            
        }
        
        
}]);
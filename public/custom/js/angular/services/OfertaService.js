;
app.factory('oferta', ['$rootScope','$http','$timeout', function($rootScope, $http, $timeout){
    var mixin      = {};
    mixin.revenues = [];

    mixin.create = function(nr_oferte, client_id){
        var promise = $http.post($rootScope.config.r_post_oferte_template, { nr_oferte: nr_oferte, client_id: client_id }).then(function(response){
            return response.data;
        });
        return promise;
    }

    mixin.dobanzi = function(produs_id){
        var promise = $http.post($rootScope.config.r_post_banca_dobanzi, { produs_id: produs_id }).then(function(response){
            return response.data;
        });
        return promise;
    }

    mixin.pdf = function(data){
        var promise = $http.post($rootScope.config.r_post_oferte_pdf, { data: data }).then(function(response){
            return response.data;
        });
        return promise;
    }

    return mixin;

}])
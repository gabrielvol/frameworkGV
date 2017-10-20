(function(){
    var gabDataApp = angular.module("gabData", []);
    
    var elizabeth = {
        nombre: "Elizabeth",
        cervezasPorHora: 2,
        cerveza1: "una cerveza tirada rubia",
        cerveza2: "una Heineken de litro",
        cerveza3: "una Budweiser de 330cm3",
        cerveza4: "una pinta stout"
    };
    
    var gabDataCtrl = function($scope, $http){
    
        
        var infoDeGabriel = function(response){
            $scope.datosDelUsuario = response.data;    
        };
        
        var onError = function(){
            $scope.errorData = "No pudimos obtener la info";
        };

        $scope.titulo = "Página de datos de gabriel";
        $scope.elizabethDatos = elizabeth;
        
        $scope.busquedaDeUsuario = function(username){
            $http.get('https://api.github.com/users/' + username)
                .then(infoDeGabriel, onError);
        };
    };
    
    gabDataApp.controller("gabDataCtrl", ["$scope", "$http", gabDataCtrl]);
}());
angular.module('imbaxadm')
    .factory('Authenticate', function($resource){
        return $resource("/admin/login")
    });

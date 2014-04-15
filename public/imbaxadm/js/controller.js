angular.module('imbaxadm')
    .controller('loginController',function($scope,$sanitize,$location,Authenticate){
        $scope.login = function(){
            Authenticate.save({
                'email': $sanitize($scope.email),
                'password': $sanitize($scope.password)
            },function(response) {
                console.log(response);
                if(response.error)
                {
                    return false;
                }

                $scope.flash = ''
                $location.path('/home');
            },function(response){
                $scope.flash = response.data.flash
            })
        }
})
    .controller('homeController',function($scope,$location,Authenticate){
        $scope.logout = function (){
            console.log('asdasd');
            Authenticate.get({},function(){
                $location.path('/logout');
            })
        }
})



angular.module('imbaxadm')

function AccordionDemoCtrl($scope) {
  $scope.oneAtATime = true;

  $scope.groups = [
    {
      title: "Dynamic Group Header - 1",
      content: "Dynamic Group Body - 1"
    },
    {
      title: "Dynamic Group Header - 2",
      content: "Dynamic Group Body - 2"
    }
  ];

  $scope.items = ['Item 1', 'Item 2', 'Item 3'];

  $scope.addItem = function() {
    var newItemNo = $scope.items.length + 1;
    $scope.items.push('Item ' + newItemNo);
  };
}
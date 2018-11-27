<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Angular js</title>
</head>
<body>
    

   <!-- <div ng-app="myApp" ng-controller="myCtrl">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
Full Name: {{firstName + " " + lastName}}

<P>total marks are {{50+50}}</p>

</div> -->

<!-- <div ng-app="" ng-init="myCol='green'">

<input style="background-color:{{myCol}}" ng-model="myCol">

</div> -->

<!-- <div ng-app="" ng-init="quantity=2;cost=5">

    <p>total doller : <span ng-bind="quantity*cost"></span></p>

</div> -->

<!-- <div ng-app=""ng-init="person={firstName:'Nisho',lastName:'kumaran'}" >

<p>the person Last Name is {{person.lastName}}</p>

<p>the person First Name is <span ng-bind="person.firstName"></span></p>

</div> -->


<!-- <div ng-app="" ng-init="points=[10,20,30,40,70]">

    <p> random points number is {{points[2]}}</p>

    <p> random points number is <span ng-bind="points[4]"></span></p>

</div> -->

<!-- <div ng-app="myApp" ng-controller="myCtrl">

    <span ng-bind="firstName" ></span>

</div>

<div ng-app="">

<p>second one</P>

</div>


<div ng-app="">

<p>thirt one</P>

</div>



<div ng-app="myApp" >

<p>fourth one </P>

</div> -->


<!-- <div ng-app="myApp" ng-controller="myCtrl">

    

    
    <span ng-bind="summed"></span>

</div> -->


<!-- <div ng-app="myApp" ng-controller="myCtrl" >

    {{firstName+" "+lastName}}

</div> -->


<!-- <div ng-app="" ng-init="names=['Jani','Hege','Kai']">
  <ol>
    <li ng-repeat="u in names">
      {{ u }}
    </li>
  </ol>
</div> -->



<!-- <div ng-app="" ng-init="names=[
{name:'Jani',country:'Norway'},
{name:'Hege',country:'Sweden'},
{name:'Kai',country:'Denmark'}]">

<ul>
  <li ng-repeat="x in names">
    {{ x.name + ', ' + x.country }}
  </li>
</ul> 

 </div> -->

<!-- <div ng-app="" ng-init="name=[
{first:'nisho',last:'kumaran'},
{first:'raja',last:'logan'},
{first:'paddasu',last:'baalu'}
]">

<ul>
    <li ng-repeat="x in name">
    {{x.first+" "+x.last}}
    </li>

</ul>

</div> -->


<!-- <body ng-app="myApp">

<w3o-test-directivel></w3o-test-directivel>



</body>  -->


<!-- <img src="4-4-4.png" alt="Avatar"> -->



<div ng-app="myApp" ng-controller="myCtrl">

    <h1 ng-Click="changeName()">{{firstName}}</h1>

</div>



</body>

<script>

// var app = angular.module("myApp",[]);

// app.controller("myCtrl", function($scope){


//     $scope.firstName="Nisho";
//     $scope.lastName="Kumaran";

// });

// var app = angular.module("myApp",[]);

// app.controller("myCtrl", function($scope){


//   $scope.firstNumber=20;
//     $scope.lastNumber=60;

//     $scope.summed = $scope.firstNumber+$scope.lastNumber;

//  });



// var app = angular.module("myApp", []);
// app.directive("w3TestDirective", function() {
//     return {
//         template : "I was made in a directive constructor!"
//     };
// });
</script>


<!-- <script src="myApp.js"></script>
<script src="myCtrl.js"></script> -->

<!-- <script>
var app = angular.module("myApp", []);
app.directive("w3oTestDirectivel", function() {
    return {
       template :  "<h1>nothing happend </h1>"
    };
});
</script> -->


<script>


var app = angular.module("myApp",[]);

app.controller("myCtrl",function($scope){

    $scope.firstName="Nisho";

    $scope.changeName = function(){

        $scope.firstName = "kumaran";
    }

});

</script>




</html>
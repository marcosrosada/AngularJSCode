<!DOCTYPE html>
<html ng-app="store">
    <head>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" />
    </head>
    
    <body ng-controller="StoreController as store">
        
        <div class="list-group" ng-repeat="item in store.produto">
            
            <div class="list-group-item" ng-hide="item.vendido">
                <h1>{{item.name}}</h1>
                <h2>${{item.preco}}</h2>
                <p>{{item.descricao}}</p>
                <button ng-show="item.btnEnabled"> Add no carrinho </button>
            </div>
            
        </div>
        <script type="text/javascript" src="./js/angular.min.js"></script>
        <script type="text/javascript" src="./js/app.js"></script>
    </body>
</html>
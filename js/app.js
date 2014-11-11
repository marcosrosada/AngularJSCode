(function(){
    var app = angular.module('store', [ ]);
    
    app.controller("StoreController", function(){
        this.produto = itens;
    });
    
    
    var itens = [
        {
            name: "Whey Protein",
            preco: 300,
            descricao: "Blah Blah Blah Blah ...",
            btnEnabled: true,
            vendido: false
        },
        {
            name: "Dextrose",
            preco: 30,
            descricao: "Testano descricao",
            btnEnabled: false,
            vendido: false
        }
        ];
})();

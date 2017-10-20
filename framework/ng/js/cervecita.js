var elizabeth = {
    nombre: "Elizabeth",
    cervezasPorHora: 2,
    cerveza1: "una cerveza tirada rubia",
    cerveza2: "una Heineken de litro",
    cerveza3: "una Budweiser de 330cm3",
    cerveza4: "una pinta stout"
};

var adriana = {
    nombre: "Adriana",
    cervezasPorHora: 1,
    cerveza1: "una cerveza roja",
    cerveza2: "un porrón Estrella Roja",
    cerveza3: "una pinta IPA",
    cerveza4: "una lata de Heineken"
};

var carolina = {
    nombre: "Carolina",
    cervezasPorHora: 3,
    cerveza1: "una pinta Kolsch",
    cerveza2: "una jarra de Quilmes tirada",
    cerveza3: "una lata de Isenbeck",
    cerveza4: "dos pintas rojas"
};

var gabriel = {
    nombre: "Gabriel",
    cervezasPorHora: 0.5,
    cerveza1: "una Quilmes de litro",
    cerveza2: "una Stella Artois de 330cm3",
    cerveza3: "una pinta Stout",
    cerveza4: "un porrón Leffe"
};

var horasPasadas = 3;
var tomador1 = adriana;
var tomador2 = gabriel;
var tomador3 = carolina;
var tomador4 = elizabeth;

var nombreTomador1 = tomador1.nombre;
var nombreTomador2 = tomador2.nombre;
var nombreTomador3 = tomador3.nombre;
var nombreTomador4 = tomador4.nombre;

var detalleCervezasTomadasTomador1 = function(horas) {    
    if(horas < horasPasadas){
        var cervezasTomadasTomador1 = [
            tomador1.cerveza1
        ];        
    } else if (horas === horasPasadas) {
        var cervezasTomadasTomador1 = [
            tomador1.cerveza1,
            " y " + tomador1.cerveza2
        ];        
    } else {
        var cervezasTomadasTomador1 = [
            tomador1.cerveza1,
            " " + tomador1.cerveza2,
            " " + tomador1.cerveza3,
            " y " + tomador1.cerveza4
        ];
    };
    
    return cervezasTomadasTomador1;
};

var detalleCervezasTomadasTomador2 = function(horas) {    
    if(horas < horasPasadas){
        var cervezasTomadasTomador2 = [
            tomador2.cerveza1
        ];        
    } else if (horas === horasPasadas) {
        var cervezasTomadasTomador2 = [
            tomador2.cerveza1,
            " " + tomador2.cerveza2
        ];        
    } else {
        var cervezasTomadasTomador2 = [
            tomador2.cerveza1,
            " " + tomador2.cerveza2,
            " " + tomador2.cerveza3,
            " y " + tomador2.cerveza4
        ];
    };
    
    return cervezasTomadasTomador2;
};

var detalleCervezasTomadasTomador3 = function(horas) {    
    if(horas < horasPasadas){
        var cervezasTomadasTomador3 = [
            tomador3.cerveza1
        ];        
    } else if (horas === horasPasadas) {
        var cervezasTomadasTomador3 = [
            tomador3.cerveza1,
            " " + tomador3.cerveza2
        ];        
    } else {
        var cervezasTomadasTomador3 = [
            tomador3.cerveza1,
            " " + tomador3.cerveza2,
            " " + tomador3.cerveza3,
            " y " + tomador3.cerveza4
        ];
    };
    
    return cervezasTomadasTomador3;
};

var detalleCervezasTomadasTomador4 = function(horas) {    
    if(horas < horasPasadas){
        var cervezasTomadasTomador4 = [
            tomador4.cerveza1
        ];        
    } else if (horas === horasPasadas) {
        var cervezasTomadasTomador4 = [
            tomador4.cerveza1,
            " " + tomador4.cerveza2
        ];        
    } else {
        var cervezasTomadasTomador4 = [
            tomador4.cerveza1,
            " " + tomador4.cerveza2,
            " " + tomador4.cerveza3,
            " y " + tomador4.cerveza4
        ];
    };
    
    return cervezasTomadasTomador4;
};

var cantCervezasTomadasTomador1 = detalleCervezasTomadasTomador1();
var cantCervezasTomadasTomador2 = detalleCervezasTomadasTomador2();
var cantCervezasTomadasTomador3 = detalleCervezasTomadasTomador3();
var cantCervezasTomadasTomador4 = detalleCervezasTomadasTomador4();
var totalCervezasTomadas = function(a,b,c,d){
    var totalC = a + b + c + d;
    return totalC;
};

var totalCervezasTomadasParaDiv = totalCervezasTomadas(cantCervezasTomadasTomador1, "; " + cantCervezasTomadasTomador2, "; " + cantCervezasTomadasTomador3, "; " + cantCervezasTomadasTomador4);

horasDiv.innerHTML = horasPasadas;

nombreTomador1Div.innerHTML = nombreTomador1;
nombreTomador2Div.innerHTML = nombreTomador2;
nombreTomador3Div.innerHTML = nombreTomador3;
nombreTomador4Div.innerHTML = nombreTomador4;

cantCervezasTomadasTomador1Div.innerHTML = cantCervezasTomadasTomador1;
cantCervezasTomadasTomador2Div.innerHTML = cantCervezasTomadasTomador2;
cantCervezasTomadasTomador3Div.innerHTML = cantCervezasTomadasTomador3;
cantCervezasTomadasTomador4Div.innerHTML = cantCervezasTomadasTomador4;

totalCervezasTomadasDiv.innerHTML = totalCervezasTomadasParaDiv;

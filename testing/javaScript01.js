function cuadrado(cuadradoValue){
    return cuadradoValue * cuadradoValue;
}

function hipotenusa(a, b){
    return Math.sqrt(cuadrado(a) + cuadrado(b));
}

resultado.innerHTML=hipotenusa(3,4);
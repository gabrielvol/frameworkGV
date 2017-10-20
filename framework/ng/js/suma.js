var add = function(x, y){
    var z = x + y;
    return z;
};

var sustract = function(x, y){
    var z = x - y;
    return z;
};

var sum = add(5,5) + sustract(10,1);

resultado.innerHTML = sum;
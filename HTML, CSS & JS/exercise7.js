var czynnik1 = prompt("Give me a number:")
var czynnik2 = prompt("Give me a second number:")
var num1 = Number(czynnik1)
var num2 = Number(czynnik2)
var dzialanie = prompt("What you want to do? (+,-,*,/,%)")
if (dzialanie == "+"){
    var suma = num1+num2;
    alert(suma);
}
else if (dzialanie == "-"){
    var roznica = num1-num2;
    alert(roznica);
}
else if (dzialanie == "*"){
    var mnozenie = num1*num2;
    alert(mnozenie);
}
else if (dzialanie == "/"){
    var dzielenie = num1/num2;
    alert(dzielenie);
}
else if (dzialanie == "%"){
    var modulo = num1%num2;
    alert(modulo);
}
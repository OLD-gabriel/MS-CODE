/* ************************************************************ */
// FEITO POR GABRIEL CIRQUEIRA
/* ************************************************************ */


var btnS = document.getElementById("somar");
var btnM = document.getElementById("menos");
var btnMULT = document.getElementById("MULT");

btnS.addEventListener("click", function () {

    var number1 = document.getElementById("number1").value;
    var number2 = document.getElementById("number2").value;
    if (number1 == null || number2 == null) {
        window.alert("Preencha os campos s");
        return;
    }
    imprimir_resultado("somar", number1, number2);
});

btnM.addEventListener("click", function () {

    var number1 = document.getElementById("number1").value;
    var number2 = document.getElementById("number2").value;
    if (number1 == null || number2 == null) {
        window.alert("Preencha os campos m");
        return;
    }
    imprimir_resultado("menos", number1, number2);
});

btnMULT.addEventListener("click", function () {

    var number1 = document.getElementById("number1").value;
    var number2 = document.getElementById("number2").value;
    if (number1 == null || number2 == null) {
        window.alert("Preencha os campos m");
        return;
    }
    imprimir_resultado("MULT", number1, number2);
});

function imprimir_resultado(operacao, number1, number2) {

    if (operacao == "somar") {
        var resultado = parseInt(number1) + parseInt(number2);
        var msg = "A SOMA ENTRE " + number1 + " E " + number2 + "  = " + resultado;
    } else if (operacao == "menos") {
        var resultado = parseInt(number1) - parseInt(number2);
        var msg = "A SUBTRAÇAÕ ENTRE " + number1 + " E " + number2 + "  =  " + resultado;

    } else {
        var resultado = parseInt(number1) * parseInt(number2);
        var msg = "A MULTIPLICAÇÃO ENTRE " + number1 + " E " + number2 + "  =  " + resultado;
    }

    CampoResultado = document.getElementById("resultado").innerHTML = msg;
}

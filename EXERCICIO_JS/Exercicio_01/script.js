/* ************************************************************ */
//              FEITO POR GABRIEL CIRQUEIRA
/* ************************************************************ */

$(document).ready(function () {
    var btnS = $("#somar");
    var btnM = $("#menos");
    var btnMULT = $("#MULT");
    var btnDIV = $("#DIV");
    var btnNome = $("#enviar_nome");

    btnS.on("click", function () {
        calcular("somar");
    });

    btnM.on("click", function () {
        calcular("menos");
    });

    btnMULT.on("click", function () {
        calcular("MULT");
    });

    btnDIV.on("click", function () {
        calcular("DIV");
    });

    function calcular(operacao) {
        var number1 = $("#number1").val();
        var number2 = $("#number2").val();

        if (number1 === "" || number2 === "") {
            alert("Preencha os campos corretamente.");
            return;
        }

        imprimir_resultado(operacao, number1, number2);
    }

    function imprimir_resultado(operacao, number1, number2) {
        var resultado, msg;

        number1 = parseFloat(number1);
        number2 = parseFloat(number2);

        if (operacao == "somar") {
            resultado = number1 + number2;
            msg = `A SOMA ENTRE ${number1} E ${number2} = <b>${resultado}</b>`;
        } else if (operacao == "menos") {
            resultado = number1 - number2;
            msg = `A SUBTRAÇÃO ENTRE ${number1} E ${number2} = <b>${resultado}</b>`;
        } else if (operacao == "MULT") {
            resultado = number1 * number2;
            msg = `A MULTIPLICAÇÃO ENTRE ${number1} E ${number2} = <b>${resultado}</b>`;
        } else if (operacao == "DIV") {
            if (number2 === 0) {
                msg = "Não é possível dividir por zero.";
            } else {
                resultado = number1 / number2;
                msg = `A DIVISÃO ENTRE ${number1} E ${number2} = <b>${resultado}</b>`;
            }
        }

        $("#resultado").html(msg);
    }

    btnNome.on("click", function () {
        var nome = $("#nome").val();
        if (nome) {
            $("#nome-display").text(`Bem-vindo, ${nome}!`);
        } else {
            alert("Preencha o campo nome!");
        }
    });
});

/* ************************************************************ */
//              FEITO POR GABRIEL CIRQUEIRA
/* ************************************************************ */

        var btnS = document.getElementById("somar");
        var btnM = document.getElementById("menos");
        var btnMULT = document.getElementById("MULT");
        var btnDIV = document.getElementById("DIV");
        var btnNome = document.getElementById("enviar_nome");

        btnS.addEventListener("click", function () {
            calcular("somar");
        });

        btnM.addEventListener("click", function () {
            calcular("menos");
        });

        btnMULT.addEventListener("click", function () {
            calcular("MULT");
        });

        btnDIV.addEventListener("click", function () {
            calcular("DIV");
        });

        function calcular(operacao) {
            var number1 = document.getElementById("number1").value;
            var number2 = document.getElementById("number2").value;

            if (number1 === "" || number2 === "") {
                window.alert("Preencha os campos corretamente.");
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
                    msg = `A DIVISÃO ENTRE ${number1} E ${number2} = <b> ${resultado} </b>`;
                }
            }

            document.getElementById("resultado").innerHTML = msg;
        }

        btnNome.addEventListener("click", function () {
            var nome = document.getElementById("nome").value;
            document.getElementById("nome-display").innerText = nome ? `Bem-vindo, ${nome}!` : window.alert("Preencha o capo nome!");
        });
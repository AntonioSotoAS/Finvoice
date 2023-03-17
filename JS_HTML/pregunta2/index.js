/*
2. Crea una función que permita sumar, restar,
 multiplicar y dividir. Los valores para calcular 
 deben ser enviados mediante inputs que solo permitan
 números enteros, el evento se iniciará a la pulsación
  de un botón llamado "calcular", Imprimir resultados por pantalla.
*/

function calcular(){
    var num1 = parseInt(document.getElementById("num1").value);
    var num2 = parseInt(document.getElementById("num2").value);

    var sum = num1 + num2
    var rest = num1 - num2
    var mul = num1 * num2
    var div = num1 / num2

    var res = document.getElementById("respuesta");

    res.innerHTML=`<table border="1">
    <tr>
    <th>Suma</th>
    <th>Resta</th>
    <th>mul</th>
    <th>div</th>
    </tr>
    <tr>
    <th>${sum}</th>
    <th>${rest}</th>
    <th>${mul}</th>
    <th>${div}</th>
    </tr>
    </table>`;

}
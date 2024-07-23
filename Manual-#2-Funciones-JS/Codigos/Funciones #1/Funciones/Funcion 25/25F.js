/**
 * Función para hacer las tablas de multiplicar que desee el usuario hasta donde el usuario indique
 * Autor: Juan Pablo Saavedra
 * Fecha: Lunes 01 de abril de 2024
*/

function mult(pnum1, pnum2){
    let num1 = pnum1;
    let num2 = pnum2;
    let par = 0;
    let imp = 0;
    let multi;
    let res="";
    for (let con1 = 1; con1 <= num1; con1++){
        res += "\n  TABLA DEL "+con1+"\n";
        for (let con2 = 1; con2 <= num2; con2++){
            multi = con1*con2;
            res += con1+" x "+con2+" = "+multi+"\n";
            if(multi %2 == 0){
                par = par+1;
                res = res+"Buzz\n";
            }else{
                imp = imp+1
                res = res+"Bass\n";
            }
        }
    }
    return res+"\nhay "+par+" pares"+"\n"+"hay "+imp+" impares";
}
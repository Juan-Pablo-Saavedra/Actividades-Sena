/**
 * Tablas De Multiplicar array
 * Autor: Juan Pablo Saavedra Chambo
 * fecha: 09/06/2024
 */

document.addEventListener('DOMContentLoaded',function () {
    let tabla=[];
    let multiplo=[];
    let iteracionTabla;
    let iteracionMultiplo;
    let resultado;
    let numeroTabla;
    let numeroMultiplo;
    let print='';

    for (iteracionTabla = 0; iteracionTabla < 5; iteracionTabla++) {
        numeroTabla=iteracionTabla+1;
        multiplo=[];
        for (iteracionMultiplo = 0; iteracionMultiplo <10; iteracionMultiplo++) {
            numeroMultiplo=iteracionMultiplo+1;
            resultado= numeroTabla * numeroMultiplo;
            multiplo.push(resultado);
        }
        tabla.push(multiplo);
    }

    for (iteracionTabla = 0; iteracionTabla < 5; iteracionTabla++) {
        numeroTabla=iteracionTabla+1;

        print+='<div class="card" style="width: 14rem; margin:5px;">'
        print+='<div class="card-body">'
        print+='<table class="table">';
        print+='<tr><th scope="col" colspan="2">Tabla'+numeroTabla+'<th></tr>'
        for (iteracionMultiplo = 0; iteracionMultiplo <10; iteracionMultiplo++) {
            numeroMultiplo=iteracionMultiplo +1;
            print+='<tr><td>'+numeroTabla +'X'+numeroMultiplo+'='+tabla[iteracionTabla][iteracionMultiplo]+'</td> </tr>'
        }
        print+='</table>'
        print+='</div>'
        print+='</div>'
    }
    document.getElementById('pagina').innerHTML=print
})
/*
4. A partir del siguiente listado filtre los vehículos 
que tengan una capacidad mayor a 10 y sean de color azul.

*/

let vehiculo = [{ "color": "rojo", "marca": "bmw", "capacidad": 11 },
{ "color": "azul", "marca": "fiat", "capacidad": 2 },
{ "color": "negro", "marca": "hyundai", "capacidad": 6 },
{ "color": "amarillo", "marca": "jeep", "capacidad": 15 },
{ "color": "azul", "marca": "citroen", "capacidad": 20 },
{ "color": "azul", "marca": "renault", "capacidad": 12 },
{ "color": "rojo", "marca": "ford", "capacidad": 4 },
{ "color": "gris", "marca": "toyota", "capacidad": 8 }];


function vehiculoFiltrado() {
    let vehiculoFiltrado = vehiculo.filter(function (veh) {
        return veh.capacidad > 10 && veh.color === "azul";
    })

    let fila = '';
    for (let vehiculo of vehiculoFiltrado) {
        let th = `<tr>
        <th>${vehiculo.color}</th>
        <th>${vehiculo.marca}</th>
        <th>${vehiculo.capacidad}</th>
        </tr>`;
        fila = fila.concat(th) ;
    }

    console.log(fila)

    let contenido = `<table border="1">
    <tr>
    <th>Color</th>
    <th>Marca</th>
    <th>Capacidad</th>
    </tr>
    `+ fila + `
    </table>`

    document.write(contenido)
}



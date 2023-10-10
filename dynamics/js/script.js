window.addEventListener("load",()=>{

let tbod = document.querySelector("#tabla_tacos");
let creador;
let ayudador;

fetch("../php/fetch.php").then(res => res.json()).then(tacos =>{

    tacos.forEach(fila =>{
        creador = document.createElement("tr");
        tbod.appendChild(creador);  
        ayudador = creador;
        creador = document.createElement("td");
        creador.innerHTML = fila.nombre;
        ayudador.appendChild(creador);
        creador = document.createElement("td");
        creador.innerHTML = fila.precio;
        ayudador.appendChild(creador);
        creador = document.createElement("td");
        creador.innerHTML = fila.info;
        ayudador.appendChild(creador);
        creador = document.createElement("td");
        creador.innerHTML = "<form action = 'pedidos.php' method = 'POST'><input type = 'hidden' name = 'id_taco' value = '"+fila.id_taco+"'></input><button type = 'submit'>Pedir</button></form>";
        ayudador.appendChild(creador);
    });
    

}).catch(error => console.log(error));

ayudador = document.createElement("br");
document.body.appendChild(ayudador);
document.body.appendChild(ayudador);
document.body.appendChild(ayudador);
creador = document.createElement("div");
creador.classList.add("centrar");
document.body.appendChild(creador);
ayudador = creador;
creador = document.createElement("button");
creador.innerHTML = "Atras";
creador.addEventListener("click",function(){
    window.location.href = "../../templates/index.html";
});

ayudador.appendChild(creador);


})
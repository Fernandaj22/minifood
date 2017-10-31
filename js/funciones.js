function cerrarSesion(){
	document.querySelector('alerta_cs').classList.toggle('ver-acs');
}
function mostrarmas(){
	document.querySelector('.masopciones').classList.toggle('veropciones');
	document.querySelector('.header').classList.toggle('headermostmas');
	document.querySelector('.contenedor').classList.toggle('contmin');
	alert("Hola")
}
function desplegarAlertas(){
	document.querySelector('.alertas_des').classList.toggle('veralertas');
}
function desplegarOpciones(){
	document.querySelector('.opciones').classList.toggle('ver-opciones');
}
function tablarecientes(){
	document.querySelector('.recientes').classList.remove('ver-recientes');
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector('.enproceso').classList.remove('ver-enproceso');
	document.querySelector('.entregados').classList.remove('ver-entregados');
	document.getElementById("idn").innerHTML = "Pedidos recientes";
}
function tablaproceso(){
	document.querySelector('.enproceso').classList.add('ver-enproceso');
	document.querySelector('.recientes').classList.add('ver-recientes');
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector('.entregados').classList.remove('ver-entregados');
	document.getElementById("idn").innerHTML = "Pedidos en proceso";
}
function tablaentregados(){
	document.querySelector('.entregados').classList.add('ver-entregados');
	document.querySelector('.recientes').classList.add('ver-recientes');
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector('.enproceso').classList.remove('ver-enproceso');
	document.getElementById("idn").innerHTML = "Pedidos entregados";
}

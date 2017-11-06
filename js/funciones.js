function cerrarSesion(){
	document.querySelector('.bg').classList.toggle('ver-bg');
	document.querySelector('.alerta_cs').classList.toggle('ver-acs');
}
function permanecer(){
	document.querySelector('.bg').classList.remove('ver-bg');
	document.querySelector('.alerta_cs').classList.remove('ver-acs');
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
function desplegarOp2(){
	document.querySelector('.opciones2').classList.toggle('ver-opciones2');
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
function gcafeterias(){
	document.querySelector('.cafeterias').classList.remove('ver-cafeterias');
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector('.tipo').classList.remove('ver-tipo');
	document.querySelector('.cafeventa').classList.remove('ver-cafeventa');
	document.querySelector('.pedidos').classList.remove('ver-pedidos');
	document.getElementById("idn").innerHTML = "Cafeterías";
}
function gtipo(){
	document.querySelector('.cafeterias').classList.add("ver-cafeterias");
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector(".tipo").classList.add("ver-tipo");
	document.querySelector(".cafeventa").classList.remove("ver-cafeventa");
	document.querySelector(".pedidos").classList.remove("ver-pedidos");
	document.getElementById("idn").innerHTML = "Tipo de producto";
}
	function general(){
		document.querySelector('.categoriag').classList.remove('ver-categoriag');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "General";
	}
	function frutasyverduras(){
		document.querySelector('.categoriag').classList.add('ver-categoriag');
		document.querySelector('.categoriafv').classList.add('ver-categoriafv');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "General";
	}
function gventa(){
	document.querySelector('.cafeterias').classList.add("ver-cafeterias");
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector(".tipo").classList.remove("ver-tipo");
	document.querySelector(".cafeventa").classList.add("ver-cafeventa");
	document.querySelector(".pedidos").classList.remove("ver-pedidos");
	document.getElementById("idn").innerHTML = "Venta general de la cafetería";
}
function gpedidos(){
	document.querySelector('.cafeterias').classList.add("ver-cafeterias");
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector(".tipo").classList.remove("ver-tipo");
	document.querySelector(".cafeventa").classList.remove("ver-cafeventa");
	document.querySelector(".pedidos").classList.add("ver-pedidos");
	document.getElementById("idn").innerHTML = "Pedidos";
}


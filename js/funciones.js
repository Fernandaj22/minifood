function cerrarSesion(){
	document.querySelector('.bg').classList.toggle('ver-bg');
	document.querySelector('.alerta_g').classList.toggle('ver-ag');
}
function permanecer(){
	document.querySelector('.bg').classList.remove('ver-bg');
	document.querySelector('.alerta_g').classList.remove('ver-ag');
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
	document.querySelector('.opciones3').classList.remove('ver-opciones3');
	document.querySelector('.opciones2').classList.remove('ver-opciones2');
}
function desplegarOp2(){
	document.querySelector('.opciones2').classList.toggle('ver-opciones2');
	document.querySelector('.opciones3').classList.remove('ver-opciones3');
	document.querySelector('.opciones').classList.remove('ver-opciones');
}
function desplegarOp3(){
	document.querySelector('.opciones3').classList.toggle('ver-opciones3');
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector('.opciones2').classList.remove('ver-opciones2');
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

/*Funciones de la sección Estadísticas*/
function gcafeterias(){
	document.querySelector('.cafeterias').classList.remove('ver-cafeterias');
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector('.tipo').classList.remove('ver-tipo');
	document.querySelector('.cafeventa').classList.remove('ver-cafeventa');
	document.querySelector('.pedidos').classList.remove('ver-pedidos');
	document.getElementById("idn").innerHTML = "Cafeterías";
}
/*Funciones de las diferentes gráficas de la cafetería*/
	function ca1(){
		document.querySelector('.ca1').classList.remove('ver-ca1');
		document.querySelector('.opciones3').classList.remove('ver-opciones3');
		document.getElementById("idn3").innerHTML = "Cafetería 1";
	}
/*FIN*/

function gtipo(){
	document.querySelector('.cafeterias').classList.add("ver-cafeterias");
	document.querySelector('.opciones').classList.remove('ver-opciones');
	document.querySelector(".tipo").classList.add("ver-tipo");
	document.querySelector(".cafeventa").classList.remove("ver-cafeventa");
	document.querySelector(".pedidos").classList.remove("ver-pedidos");
	document.getElementById("idn").innerHTML = "Tipo de producto";
}
/*Funciones del submenu de Tipo de producto*/
	function general(){
		document.querySelector('.categoriag').classList.remove('ver-categoriag');
		document.querySelector('.categoriafv').classList.remove('ver-categoriafv');
		document.querySelector('.categoriacr').classList.remove('ver-categoriacr');
		document.querySelector('.categoriafr').classList.remove('ver-categoriafr');
		document.querySelector('.categoriad').classList.remove('ver-categoriad');
		document.querySelector('.categoriar').classList.remove('ver-categoriar');
		document.querySelector('.categoriagu').classList.remove('ver-categoriagu');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "General";
	}
	function frutasyverduras(){
		document.querySelector('.categoriag').classList.add('ver-categoriag');
		document.querySelector('.categoriafv').classList.add('ver-categoriafv');
		document.querySelector('.categoriacr').classList.remove('ver-categoriacr');
		document.querySelector('.categoriafr').classList.remove('ver-categoriafr');
		document.querySelector('.categoriad').classList.remove('ver-categoriad');
		document.querySelector('.categoriar').classList.remove('ver-categoriar');
		document.querySelector('.categoriagu').classList.remove('ver-categoriagu');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "Frutas y verduras";
	}
	function comidarapida(){
		document.querySelector('.categoriag').classList.add('ver-categoriag');
		document.querySelector('.categoriafv').classList.remove('ver-categoriafv');
		document.querySelector('.categoriacr').classList.add('ver-categoriacr');
		document.querySelector('.categoriafr').classList.remove('ver-categoriafr');
		document.querySelector('.categoriad').classList.remove('ver-categoriad');
		document.querySelector('.categoriar').classList.remove('ver-categoriar');
		document.querySelector('.categoriagu').classList.remove('ver-categoriagu');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "Comida rápida";
	}
	function frituras(){
		document.querySelector('.categoriag').classList.add('ver-categoriag');
		document.querySelector('.categoriafv').classList.remove('ver-categoriafv');
		document.querySelector('.categoriacr').classList.remove('ver-categoriacr');
		document.querySelector('.categoriafr').classList.add('ver-categoriafr');
		document.querySelector('.categoriad').classList.remove('ver-categoriad');
		document.querySelector('.categoriar').classList.remove('ver-categoriar');
		document.querySelector('.categoriagu').classList.remove('ver-categoriagu');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "Frituras";
	}
	function dulces(){
		document.querySelector('.categoriag').classList.add('ver-categoriag');
		document.querySelector('.categoriafv').classList.remove('ver-categoriafv');
		document.querySelector('.categoriacr').classList.remove('ver-categoriacr');
		document.querySelector('.categoriafr').classList.remove('ver-categoriafr');
		document.querySelector('.categoriad').classList.add('ver-categoriad');
		document.querySelector('.categoriar').classList.remove('ver-categoriar');
		document.querySelector('.categoriagu').classList.remove('ver-categoriagu');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "Dulces";
	}
	function refresco(){
		document.querySelector('.categoriag').classList.add('ver-categoriag');
		document.querySelector('.categoriafv').classList.remove('ver-categoriafv');
		document.querySelector('.categoriacr').classList.remove('ver-categoriacr');
		document.querySelector('.categoriafr').classList.remove('ver-categoriafr');
		document.querySelector('.categoriad').classList.remove('ver-categoriad');
		document.querySelector('.categoriar').classList.add('ver-categoriar');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "Refrescos";
	}
	function agua(){
		document.querySelector('.categoriag').classList.add('ver-categoriag');
		document.querySelector('.categoriafv').classList.remove('ver-categoriafv');
		document.querySelector('.categoriacr').classList.remove('ver-categoriacr');
		document.querySelector('.categoriafr').classList.remove('ver-categoriafr');
		document.querySelector('.categoriad').classList.remove('ver-categoriad');
		document.querySelector('.categoriar').classList.remove('ver-categoriar');
		document.querySelector('.categoriagu').classList.add('ver-categoriagu');
		document.querySelector('.opciones2').classList.remove('ver-opciones2');
		document.getElementById("idn2").innerHTML = "Agua";
	}
/*FIN*/

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


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

function registrarCafe(){
	nom=document.getElementById(nomCaf);
	acargo=document.getElementById(acargo);
	cor=document.getElementById(correo);
	esc=document.getElementById(escuela);
	des=document.getElementById(desc);

	if(nom.value==""){
		nom.classList.add('error')
		noms=false
	}else{
		nom.classList.remove('error')
		noms=true
	}

	if(acargo.value==""){
		acargo.classList.add('error')
		acargos=false
	}else{
		acargo.classList.remove('error')
		acargos=true
	}

	if(cor.value==""){
		cor.classList.add('error')
		cors=false
	}else{
		cor.classList.remove('error')
		cors=true
	}

	if(esc.value==""){
		esc.classList.add('error')
		escs=false
	}else{
		esc.classList.remove('error')
		escs=true
	}

	if(des.value==""){
		des.classList.add('error')
		dess=false
	}else{
		des.classList.remove('error')
		dess=true
	}

	if(noms==true && acargos==true && cors==true && escs==true && dess==true){
		registroAjax = new XMLHttpRequest();
		registroAjax.open('GET','php/registrarCafeteria.php?nom='+nom.value+'&acargo='+acargo.value+'&cor='+cor.value+'&esc='+esc.value+'&des='+des.value);
		registroAjax.send();
		registroAjax.onreadystatechange = function(){
			if (registroAjax.readyState==4 && registroAjax.status==200) {
				console.log(registroAjax.responseText)
				alert('Cafetería Registrada!');
			}
		}
	}
}

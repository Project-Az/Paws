var database = firebase.database();

const nome = document.getElementById('nome');
const dia = document.getElementById('dia');
const gender = document.getElementById('gender');
const porte = document.getElementById('porte');
const tipo = document.getElementById('tipo');
const raca = document.getElementById('raca');
const foto = document.getElementById('foto');

function gravarDados(onclick) {
  
	const nome = nome.value;
	const dia = dia.value;
	const gender = gender.auth();
	const porte = porte.value;
	const tipo = tipo.auth();
	const raca = raca.value;
	const foto = foto.auth();
	const storage = firebase.storage();
	
}


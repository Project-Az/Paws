/* Get elements
const username = document.getElementById('email');
const password = document.getElementById('password');
const acessar = document.getElementById('acessar');

// Add login event
	//acessar.addEventListener("click", function() {
//	$("logar").click(
	function logar(onclick){
	// Get email and password
	const user = email.value;
	const pass = password.value;
	const auth = firebase.auth();
	// Sign in
	const promise = auth.singInWithEmailAndPassword(email, password);
      window.location = 'HomePage.html';
    };             
*/
$('document').ready(function(){

		$("#acessar").click(function(){
			var data = $("#login-form").serialize();
			
		$.ajax({
			type : 'POST',
			url  : 'login2.php',
			data : data,
			dataType: 'json',
			beforeSend: function()
			{	
				$("#acessar").html('Validando ...');
			},
			success :  function(response){						
				if(response.codigo == "1"){	
					$("#acessar").html('Entrar');
					$("#login-alert").css('display', 'none')
					window.location.href = "HomePage.php";
				}
				else{			
					$("#acessar").html('Entrar');
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
				}
		    }
		});
	});

});
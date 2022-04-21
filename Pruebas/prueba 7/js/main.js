$( function() {
    $( "#datepickerr" ).datepicker();
  } );

    let date = new Date();
    console.log(date.toLocaleDateString());

    function validaForm(){
        let date = new Date();
    $fech = date.toLocaleDateString();
    // Campos de texto
    if($("#selectcli").val() == "0"){
        alert("Eliga un cliente.");
        $("#selectcli").focus();  
        return false;
    }
    if($("#datepickerr").val() == ""){
        alert("Eliga una fecha.");
        $("#datepickerr").focus();  
        return false;
    }

	neworden();
    return true; 
}

function validaFormProduc(){
    let date = new Date();
    $fech = date.toLocaleDateString();
    // Campos de texto
    if($("#selectpro").val() == "0"){
        alert("Eliga un producto.");
        $("#selectpro").focus();  
        return false;
    }
    
	newpro();
    return true; 
}

function newpro(){
	var Form = new FormData($('#productosnewform')[0]); 
	$.ajax({
		url:"php/newproduct.php",
		type: 'post',
		data: Form,
		processData: false,
		contentType:false,
		success: function(data){
            location.href="index.php?maiug="+data;
		}
	});
}

function neworden(){
	var Form = new FormData($('#formcliente')[0]); 
	$.ajax({
		url:"php/newOrder.php",
		type: 'post',
		data: Form,
		processData: false,
		contentType:false,
		success: function(data){
            location.href="index.php?maiug="+data;
		}
	});
}

function terminapedi(){
	var Form = new FormData($('#terminaped')[0]); 
	$.ajax({
		url:"php/termina.php",
		type: 'post',
		data: Form,
		processData: false,
		contentType:false,
		success: function(data){
            location.href="index.php";
            alert("SU PEDIDO FUE ENVIADO");
		}
	});
}
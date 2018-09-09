document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
	var elems = document.querySelectorAll('select');
	var elems = document.querySelectorAll('.sidenav');
    var elems = document.querySelectorAll('.modal');
    var elems = document.querySelectorAll('.datepicker');
    var elems = document.querySelectorAll('.carousel');
    var instance = M.Carousel.init({
	    fullWidth: true,
	    indicators: true
  	});
    //var instances = M.Collapsible.init(elems, options);
  });
  

  // Or with jQuery


function validar(){
	var nomePeca = $("#nomePeca").val();
	var descPeca = $("#textarea2").val();
	var tipoPeca = $("#tipoPeca").val();
	var cor = $("#cor").val();
	var fabricante = $("#fabricante").val();
	var compra = $("#compra").val();
	var revenda = $("#revenda").val();
	var qtde = $("#qtde").val();
    if (verificarVazio(nomePeca) || verificarVazio(descPeca) || verificarVazio(tipoPeca) || verificarVazio(cor) || verificarVazio(fabricante) || verificarVazio(compra) || verificarVazio(revenda) || verificarVazio(qtde)){
        alert("Preencha todos os campos!");
		return false;
    }else{
		cadastarPeca();
	}
	
}
function validarTipo(){
	var tipoPeca = $("#nomePeca").val();
    if (verificarVazio(tipoPeca)){
        alert("Preencha todos os campos!");
		return false;
    }else{
		cadastarTipoPeca();
	}	
}
function validarTipo2(){
	var tipoPeca = $("#nomePeca").val();
    if (verificarVazio(tipoPeca)){
        alert("Preencha todos os campos!");
		return false;
    }else{
		atualizarTipoPeca();
	}	
}
function cadastarPeca(){
	var nomePeca = $('#nomePeca').val();
	var descPeca = $('#textarea2').val();
	var tipoPeca = $("#tipoPeca").val();
	var cor = $("#cor").val();
	var fabricante = $("#fabricante").val();
	var compra = $("#compra").val();
	var revenda = $("#revenda").val();
	var qtde = $("#qtde").val();
	$.ajax({
		url:'cadastrar.php',
		type:'post',
		data: {nomePeca : nomePeca, descPeca : descPeca, tipoPeca : tipoPeca, cor : cor, fabricante : fabricante, compra : compra, revenda : revenda, qtde : qtde},
		success: function (data){
				$('#nomePeca').val("");
				$('#textarea2').val("");
				$('#tipoPeca').val("");
				$('#cor').val("");
				$('#fabricante').val("");
				$('#compra').val("");
				$('#revenda').val("");
				$('#qtde').val("");
				$('#idPeca').val("");
				alert('Cadastrado com sucesso!');
		}
	});
}
function cadastarTipoPeca(){
	var tipoPeca = $("#nomePeca").val();
	$.ajax({
		url:'cadastrar.php',
		type:'post',
		data: {CadTipoPeca : tipoPeca},
		success: function (data){
			$("#idTipo").val("");
			$("#nomePeca").val("");
			$("#tipoPeca").val("");
			var $modal = $(".result").empty().html('');
			alert('Cadastrado com sucesso!');
		}
	});
}
aux = 0;
function atualizarTipoPeca(){
	var tipoPeca = $("#nomePeca").val();
	var idTipo = $("#idTipo").val();
	$.ajax({
		url:'cadastrar.php',
		type:'post',
		data: {AtuTipoPeca : tipoPeca, AtuId : idTipo},
		success: function (data){
			$("#idTipo").val("");
			$("#nomePeca").val("");
			$("#tipoPeca").val("");
			if(aux==1){
				$("#salvarTipoA").append("<button class='btn waves-effect waves-light red lighten-2' id='salvarTipo' type='button' onclick='validarTipo();' name='action'>Salvar <i class='fas fa-save fa-sm right'></i></button>");
				$("#atualizarTipo").remove();
				aux = 0;
			}
			var $modal = $(".result").empty().html('');
			alert('Atualizado com sucesso!');
		}
	});
}
function limparTipoPeca(){$("#tipoPeca").val("");var $modal = $(".result").empty().html('');}
function buscarTipoPeca(){
	var tipoPecaB = $("#tipoPeca").val();
	$.ajax({
		url:'busca.php',
		type:'post',
		data: {tipoPecaB : tipoPecaB},
		success: function (data){
			var $modal = $(".result").empty().html('');
			$modal.append(data);
		}
	});
}
function excluirPeca(){
	$.ajax({
		url:'cadastrar.php',
		type:'post',
		data: {idEx : $("#idTipo").val()},
		success: function (data){
			$("#idTipo").val("");
			$("#nomePeca").val("");
			$("#tipoPeca").val("");
			var $modal = $(".result").empty().html('');
			alert('Item exluído com sucesso!')
		}
	});
}
function carregarTipoPeca(a,b){
	$("#idTipo").val(a);
	$("#nomePeca").val(b);
	$("#nomePeca").focus();
	$("#salvarTipo").remove();
	if(aux == 0){
		$("#salvarTipoA").append("<button class='btn waves-effect waves-light red lighten-2' id='atualizarTipo' type='button' onclick='validarTipo2();' name='action'>Atualizar <i class='fas fa-redo-alt fa-sm right'></i></button>");
		$("#salvarTipo").remove();
		aux = 1;
	}
}
function verificarVazio(campo){
	if (campo == "" || campo == null){
		return true;
	}
	return false;
}

function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
} 
$(document).ready(function(){
    $('.modal').modal();
	$('input#input_text, textarea#textarea2').characterCounter();
	$('select').formSelect();
	$('.sidenav').sidenav();
	$(".dropdown-trigger").dropdown();
	$('.collapsible').collapsible();
	$('.datepicker').datepicker();
	$('.carousel').carousel();
	$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
});

   $(document).on("focus", ".tel", function(){
      $.mask.definitions['~']='[+-]';
	//Inicio Mascara Telefone
	$('.tel').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	}).trigger('focusout');
   });
   $(document).on("focus", ".cpf", function(){
   $.mask.definitions['~']='[+-]';
	//Inicio Mascara CNPJ
	$('.cpf').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("999.999.999-99");
		} else {
			element.mask("999.999.999-99");
		}
	}).trigger('focusout');
   });
   $(document).on("focus", ".cnpj", function(){
		$.mask.definitions['~']='[+-]';
	//Inicio Mascara CNPJ
	$('.cnpj').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("99.999.999/9999-99");
		} else {
			element.mask("99.999.999/9999-99");
		}
	}).trigger('focusout');
   });
});


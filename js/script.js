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
	var descPeca = $("#descPeca").val();
	var tipoPeca = $("#tipoPeca").val();
	var cor = $("#cor").val();
	var fabricante = $("#fabricante").val();
	var compra = $("#compra").val();
	var revenda = $("#revenda").val();
	var qtde = $("#qtde").val();
    if (verificarVazio(nomePeca) || verificarVazio(descPeca) || verificarVazio(tipoPeca) || verificarVazio(cor) || verificarVazio(fabricante) || verificarVazio(compra) || verificarVazio(revenda) || verificarVazio(qtde)){
        alert("Preencha todos os campos!");
		return false;
    }else if(fuValidaCNS(cns)){
		$('#cadastro').submit();
	}else{
		alert('CNS inválido');
	}
	
}
var idM = 0;
var cont2 = 0;
function carregarM(a){
	$.ajax({
            url:'search.php',
            type:'post',
            data: {idM : a},
            success: function (data){
				result = data.split(';');
				$('#nomeMedico').val(result[0]);
				$('#nomeMedico').focus();
				$('#especialidade').val(result[1]);
				$('#especialidade').focus();
				$('#numConselho').val(result[2]);
				$('#numConselho').focus();
				$('#uf').val(result[3]);
				$('#uf').focus();
				$('#sit option[value="' + result[4] + '"]').attr({ selected : "selected" });
				$('select').formSelect();
				idM = result[5];
				$('#actionCad').remove();
				if(cont2==0){
					$('#op').append("<button class='green right btn waves-effect waves-light block' type='button' id='actionUpd' name='action' onclick='validar4("+idM+")'>Atualizar<i class='material-icons right'>update</i></button>");
					$('#op').append("<br><br><br><a class='waves-effect right waves-light btn modal-trigger' href='#modal2'>Excluir<i class='material-icons right'>delete</i></a>");
					cont2 = 1;
				}
				$('#nomeMedico').focus();
            }
        });
}
function verificarVazio(campo){
	if (campo == "" || campo == null){
		return true;
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
   $(document).on("focus", ".money", function(){
      $.mask.definitions['~']='[+-]';
	//Inicio Mascara Telefone
	$('.money').focusout(function(){
		$(".money").mask('#.##0,00', {
		  reverse: true
		});

		//$('.money').on('blur', calculateValue);

		function calculateValue() {
		  var vd_ga = $('.money').val().replace(',', '.');
		  ///var pvm_ga = $('#pvm_ga').val();

		  $('.money').val(convertToCurrency(vd_ga));
		  //$('#eam_ga').val(convertToCurrency(vd_ga * pvm_ga));
		}

		function convertToCurrency(value) {
		  return value.toLocaleString("pt-BR", {
			style: "currency",
			currency: "BRL",
			minimumFractionDigits: 2
		  })
		}
	}).trigger('focusout');
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


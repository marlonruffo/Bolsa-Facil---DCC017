function cadastrarProjeto(){
        $('#nomeProjeto').parent().removeClass('has-error');
		$('#tipoProjeto').parent().removeClass('has-error');
		$('#descricao').parent().removeClass('has-error');
		$('#data_inicio_processo').parent().removeClass('has-error');	
		$('#data_fim_processo').parent().removeClass('has-error');	
		$('#metodoDeEntrada').parent().removeClass('has-error');	
		$('#qtdVagas').parent().removeClass('has-error');	
		$('#preRequisitos').parent().removeClass('has-error');	

		let preRequisitos = $("#preRequisitos").val();
		let nomeProjeto = $("#nomeProjeto").val();
		let tipoProjeto = $("#tipoProjeto").val();
		let descricao = $('#descricao').val();
		let data_inicio_processo = formataDateTime($('#data_inicio_processo').val());
		let data_fim_processo = formataDateTime($('#data_fim_processo').val());
		let metodoDeEntrada = $('#metodoDeEntrada').val();
		let qtdVagas = $('#qtdVagas').val();
		let i;

		var e_voluntaria = [];
        var valor = [];
		var dados = {nomeProjeto : nomeProjeto, tipoProjeto: tipoProjeto , descricao : descricao , data_inicio_processo : data_inicio_processo , data_fim_processo : data_fim_processo, metodoDeEntrada : metodoDeEntrada , qtdVagas : qtdVagas, preRequisitos:preRequisitos}

        var erro = "";
		var faltando = false;

		for (i=1; i<= qtdVagas; i++){
			e_voluntaria[i] = $("#e_voluntaria"+(i)).val();
			dados["e_voluntaria"+(i)] = e_voluntaria[i];

            if($('#e_voluntaria'+(i)).val() == ""){
                erro = erro + "Selecione se a bolsa "+i+" é voluntária ou não.\n";
                $('#e_voluntaria'+(i)).parent().addClass('has-error');
                faltando = true;
            }

            valor[i] = $("#valor"+(i)).val();
			dados["valor"+(i)] = valor[i];

            if($('#valor'+(i)).val() == ""){
                erro = erro + "Digite o valor da bolsa "+i+".\n";
                $('#valor'+(i)).parent().addClass('has-error');
                faltando = true;
            }
		}
		
		
		if($('#nomeProjeto').val() == ""){
			erro = erro + "Nome do projeto obrigatório\n";
			$('#nomeProjeto').parent().addClass('has-error');
			faltando = true;
		}if($('#tipoProjeto').val() == ""){
			erro = erro + "Tipo de projeto obrigatório.\n";
			$('#tipoProjeto').parent().addClass('has-error');
			faltando = true;
		}if($('#descricao').val() == ""){
			erro = erro + "Descrição do projeto obrigatória.\n";
			$('#descricao').parent().addClass('has-error');
			faltando = true;
		}if($('#data_inicio_processo').val() == ""){
			erro = erro + "Data de início do processo seletivo é obrigatória.\n";
			$('#data_inicio_processo').parent().addClass('has-error');
			faltando = true;
		}if($('#data_fim_processo').val() == ""){
			erro = erro + "Data final do processo seletivo é obrigatória.\n";
			$('#data_fim_processo').parent().addClass('has-error');
			faltando = true;
		}if($('#metodoDeEntrada').val() == ""){
			erro = erro + "Método de entrada do processo seletivo é obrigatório.\n";
			$('#metodoDeEntrada').parent().addClass('has-error');
			faltando = true;
		}if($('#qtdVagas').val() == ""){
			erro = erro + "Digite a quantidade de vagas do projeto.\n";
			$('#qtdVagas').parent().addClass('has-error');
			faltando = true;
		}
		
        
        if(!faltando){
            var url = "../php/cadProjeto.php";

            $.post(url, dados, function (retorno) {
                alert(retorno);
                window.location.href = '../php/controller.php?p=index';
            });
		}else{
			alert(erro);
		}
}

function editaProjeto(){
	$('#nomeProjeto').parent().removeClass('has-error');
	$('#tipoProjeto').parent().removeClass('has-error');
	$('#descricao').parent().removeClass('has-error');
	$('#data_inicio_processo').parent().removeClass('has-error');	
	$('#data_fim_processo').parent().removeClass('has-error');	
	$('#metodoDeEntrada').parent().removeClass('has-error');	
	$('#qtdVagas').parent().removeClass('has-error');	
	$('#preRequisitos').parent().removeClass('has-error');	

	let preRequisitos = $("#preRequisitos").val();
	let idProjeto = $("#idProjeto").val();
	let nomeProjeto = $("#nomeProjeto").val();
	let tipoProjeto = $("#tipoProjeto").val();
	let descricao = $('#descricao').val();
	let data_inicio_processo = formataDateTime($('#data_inicio_processo').val());
	let data_fim_processo = formataDateTime($('#data_fim_processo').val());
	let metodoDeEntrada = $('#metodoDeEntrada').val();
	let qtdVagas = $('#qtdVagas').val();
	let i;

	var dados = {idProjeto: idProjeto, nomeProjeto : nomeProjeto, tipoProjeto: tipoProjeto , descricao : descricao , data_inicio_processo : data_inicio_processo , data_fim_processo : data_fim_processo, metodoDeEntrada : metodoDeEntrada , qtdVagas : qtdVagas, preRequisitos: preRequisitos}

	var erro = "";
	var faltando = false;
	
	
	if($('#nomeProjeto').val() == ""){
		erro = erro + "Nome do projeto obrigatório\n";
		$('#nomeProjeto').parent().addClass('has-error');
		faltando = true;
	}if($('#tipoProjeto').val() == ""){
		erro = erro + "Tipo de projeto obrigatório.\n";
		$('#tipoProjeto').parent().addClass('has-error');
		faltando = true;
	}if($('#descricao').val() == ""){
		erro = erro + "Descrição do projeto obrigatória.\n";
		$('#descricao').parent().addClass('has-error');
		faltando = true;
	}if($('#data_inicio_processo').val() == ""){
		erro = erro + "Data de início do processo seletivo é obrigatória.\n";
		$('#data_inicio_processo').parent().addClass('has-error');
		faltando = true;
	}if($('#data_fim_processo').val() == ""){
		erro = erro + "Data final do processo seletivo é obrigatória.\n";
		$('#data_fim_processo').parent().addClass('has-error');
		faltando = true;
	}if($('#metodoDeEntrada').val() == ""){
		erro = erro + "Método de entrada do processo seletivo é obrigatório.\n";
		$('#metodoDeEntrada').parent().addClass('has-error');
		faltando = true;
	}if($('#qtdVagas').val() == ""){
		erro = erro + "Digite a quantidade de vagas do projeto.\n";
		$('#qtdVagas').parent().addClass('has-error');
		faltando = true;
	}
	
	if(!faltando){
		var url = "../php/controller.php?p=editar_projeto_id";

		$.post(url, dados, function (retorno) {
			alert(retorno);
			window.location.href = '../php/controller.php?p=index';
		});
	}else{
		alert(erro);
	}
}

function verAlunosInscritos(){
	let idProjeto = $("#idProjeto").val();
	let nomeProjeto = $("#nomeProjeto").val();

	window.location.href = '../php/controller.php?p=ver_alunos_inscritos&idProjeto='+idProjeto+'&nomeProjeto='+nomeProjeto;


}

function formataDateTime(datetime){
	dia = datetime.substring(0,2);
	mes = datetime.substring(3,5);
	ano = datetime.substring(6,10);
	
	return ano + "-" + mes + "-" + dia;
}

function carrega_projeto_id(projeto_id) {

    var dados = { projeto_id: projeto_id }
    var url = "../php/controller.php?p=ver_bolsa_id";

    $.post(url, dados, function (retorno) {
        $('#body').html(retorno);
    });
}

function confirmarInscricao(){
	if (window.confirm("Deseja se cadastrar no projeto?")) {
		let idProjeto = $("#idProjeto").val();
		var url = "../php/controller.php?p=inscreve_aluno_projeto";
		var dados = {idProjeto: idProjeto};

		$.post(url, dados, function (retorno) {
			alert(retorno);
			window.location.href = '../php/controller.php?p=index';
		});
	  }
}
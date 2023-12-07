$(function(){
    $("#editaPerfilAluno").submit(function(e){
        e.preventDefault();
        $('#nome').parent().removeClass('has-error');
        $('#matricula').parent().removeClass('has-error');
        $('#email').parent().removeClass('has-error');
        $('#cpf').parent().removeClass('has-error');
        $('#data_nasc').parent().removeClass('has-error');
        $('#data_ing').parent().removeClass('has-error');
        $('#telefone').parent().removeClass('has-error');
        $('#curso').parent().removeClass('has-error');
        $('#periodo').parent().removeClass('has-error');
        $('#senha').parent().removeClass('has-error');
        $('#confirmarSenha').parent().removeClass('has-error');

        var nome = $('#nome').val();
        var matricula = $('#matricula').val();
        var email = $('#email').val();
        var cpf = $('#cpf').val();
        var curso = $('#curso').val();
        var periodo = $('#periodo').val();
        var data_nasc = formataDateTime($('#data_nasc').val());
        var data_ing = formataDateTime($('#data_ing').val());
        var telefone = $('#telefone').val();
        var senha = $('#senha').val();
        var confirmarSenha = $('#confirmarSenha').val();

        var erro = "";
        var faltando = false;

        if(document.getElementById('nome').value == ""){
            erro = erro + "Nome obrigat\u00f3rio.\n";
            $('#nome').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('matricula').value == ""){
            erro = erro + "Matricula obrigat\u00f3ria.\n";
            $('#matricula').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('email').value == ""){
            erro = erro + "Email obrigat\u00f3rio.\n";
            $('#email').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('cpf').value == ""){
            erro = erro + "CPF obrigat\u00f3rio.\n";
            $('#cpf').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('data_nasc').value == ""){
            erro = erro + "Data de nascimento obrigat\u00f3ria.\n";
            $('#data_nasc').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('data_ing').value == ""){
            erro = erro + "Data de ingresso obrigat\u00f3ria.\n";
            $('#data_ing').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('telefone').value == ""){
            erro = erro + "Telefone obrigat\u00f3rio.\n";
            $('#telefone').parent().addClass('has-error');
            faltando = true;
        }/*if(document.getElementById('curso').value == ""){
            erro = erro + "Curso obrigat\u00f3rio.\n";
            $('#curso').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('periodo').value == ""){
            erro = erro + "Periodo obrigat\u00f3rio.\n";
            $('#periodo').parent().addClass('has-error');
            faltando = true;
        }*/if(document.getElementById('senha').value == ""){
            erro = erro + "Senha obrigat\u00f3ria.\n";
            $('#senha').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('confirmarSenha').value == ""){
            erro = erro + "Confirmação de senha obrigat\u00f3ria.\n";
            $('#confirmarSenha').parent().addClass('has-error');
            faltando = true;
        }if(!isCPFCNPJ(document.getElementById('cpf').value,1) && $('#cpf').val() != ""){
            erro = erro + "CPF Invalido.\n";
            $('#cpf').parent().addClass('has-error');
            faltando = true;
        }
        if(!validacaoEmail(document.getElementById('email'))){
            erro = erro + "Email Invalido.\n";
            $('#email').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('senha').value != document.getElementById('confirmarSenha').value){
            erro = erro + "As senhas estão diferentes, por favor, verifique e digite novamente.\n";
            $('#senha').parent().addClass('has-error');
            $('#confirmarSenha').parent().addClass('has-error');
            faltando = true;
        }

        if(!faltando){
            var dados = {nome: nome, curso: curso, periodo: periodo, matricula: matricula, email: email, cpf: cpf, data_nasc: data_nasc, data_ing:data_ing,  telefone: telefone, senha: senha, confirmarSenha:confirmarSenha}
            var url = "../php/controller.php?p=editar_perfil";

            $.post(url, dados, function (retorno) {
                alert(retorno);
                window.location.href = '../php/controller.php?p=ver_perfil';
            });
        }else{
            alert(erro);
        }


        
        

    });
});

function formataDateTime(datetime){
	dia = datetime.substring(0,2);
	mes = datetime.substring(3,5);
	ano = datetime.substring(6,10);
	
	return ano + "-" + mes + "-" + dia;
}
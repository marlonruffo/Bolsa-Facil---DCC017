$(function(){
    $("#frmLogin").submit(function(e){
        e.preventDefault();
        $('#user').parent().removeClass('has-error');
        $('#senha').parent().removeClass('has-error');

        var user = $('#user').val();
        var senha = $('#senha').val();

        var erro = "";
        var faltando = false;

        if(document.getElementById('user').value == ""){
            erro = erro + "Matrícula/SIAPE obrigat\u00f3rio.\n";
            $('#user').parent().addClass('has-error');
            faltando = true;
        }if(document.getElementById('senha').value == ""){
            erro = erro + "Senha obrigat\u00f3ria.\n";
            $('#senha').parent().addClass('has-error');
            faltando = true;
        }

        if(!faltando){
            var dados = {user: user, senha: senha}
            var url = "../php/verificaLogin.php";

            $.post(url, dados, function (retorno) {
                //alert(retorno);
                window.location.href = '../php/controller.php?p=index';
                if(retorno == 1 || retorno == 2){
                    //login correto

                }
                else if(retorno == 0){
                    alert("Senha incorreta!");
                }else if(retorno == -1){
                    alert("Login incorreto!");
                }
            });
        }else{
            alert(erro);
        }


        
        

    });
});
/*$(function(){
    $("#frmLogin").submit(function(e){
        e.preventDefault();
        
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(mensagem){
                    if($('#fun_login').prop('type').localeCompare('text') == 0){
                        if(mensagem < 0){
                            $('#erro').html('Login e Senha incorretos/Usu�rio inativo');
                            $('#fun_login').val("");
                            $('#fun_senha').val("");
                        }else if(mensagem == 1){
                            $('#erro').html('Senha incorreta');
                            $('#fun_senha').val("");
                        }else if(mensagem == 2){
                            $('#erro').html('Login incorreto');
                            $('#fun_login').val("");
                        }else{
                                location.href="php/controller.php?p=index";
                        }
                    }else{
                        if(mensagem < 0){
                            $('#erro').html('Senha incorreta');
                            $('#fun_senha').val("");
                        }else if(mensagem == 1){
                            $('#erro').html('Senha incorreta');
                            $('#fun_senha').val("");
                        }else if(mensagem == 2){
                            $('#erro').html('Senha incorreta');
                            $('#fun_senha').val("");
                        }else{
                                location.href="controller.php?p=index";
                        }
                    }
                }
            });
    });				
});*/
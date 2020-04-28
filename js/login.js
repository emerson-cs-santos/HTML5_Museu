function login() 
{    
    if (!sessionStorage_verif())
    {
        return false;
    }
    
    const login = document.getElementById("login_user").value;
    const senha = document.getElementById("login_senha").value;

    // VERIFICA SE CAMPOS FORAM PREENCHIDOS
    if (login == "") 
    {
        swal(
            {
                title: "Login não informado!",
                text: "Por favor preencher o login!",
                icon: "warning",
                button: "OK",
            }
        )
        return;
    };

    if (senha == "") 
    {
        swal(
            {
                title: "Senha não preenchida!",
                text: "Por favor preencher a senha!",
                icon: "warning",
                button: "OK",
            }
        )
        return;
    };    

    const dados = "login=" + encodeURIComponent(login) + "&senha=" + encodeURIComponent(senha);

    // AJAX
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) 
        {
            var resposta = this.responseText;

            // Tirando ENTER
            resposta = resposta.replace(/(\r\n|\n|\r)/gm, "");

            resposta_codigo      = resposta.substr(0,4);
            resposta_descricao   = resposta.substr(5);            

            switch (resposta_codigo) 
            {
                case 'ok':
                    window.open("index.php", '_self');
                    break;

                case 'erro':
                    swal(
                            {
                                title: "Login não autorizado!",
                                text: resposta_descricao,
                                icon: "warning",
                                button: "OK",
                            }
                        )
                    break;

                case 'inat':

                    swal({
                        title: "Ativar seu usuário?",
                        text: "Você voltará a ter acesso a suas obras e elas voltaram a ser exibidas no site.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {
                            desativarUsuario(login,'ativar');
                        } else {
                            swal(
                                {
                                    title:  "Processo cancelado!",
                                    text:   'Seu usuário ainda está inativo!',
                                   
                                    button: "OK",
                                }
                            )             
                        }
                        })
                    break;                

                default:
                    swal(
                        {
                            title: "Problemas com login!",
                            text: "Por favor entrar em contato com o administrador do sistema!",
                            icon: "error",
                            button: "OK",
                        }
                    )
            }
        }
    }

    xmlhttp.open("POST", "php/validar_login.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(dados);
}

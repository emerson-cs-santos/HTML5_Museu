function pegarCor() 
{
    const cor = document.getElementById('minhaObra_digitar_cor');
    cor.focus();
    cor.click();
}

function trocarCor() 
{
    document.execCommand("foreColor", false, document.getElementById('minhaObra_digitar_cor').value);    
}

// Carrega dados da session
function carregarDadosSession() 
{
    const dadosCarregar = sessionStorage.getItem("obra_dados");

    if (! dadosCarregar.length == 0)
    {
        const dados = JSON.parse( sessionStorage.getItem("obra_dados") );
        
        document.getElementById('minhaObra_digitar_id').innerHTML   = dados['idObra'];
        document.getElementById('minhaObra_digitar_nome').value     = dados['nomeObra'];
        document.getElementById('minhaObra_digitar_desc').value     = dados['descObra'];
        document.getElementById('minhaObra_digitar_duracao').value  = dados['duracaoObra'];
        document.getElementById('minhaObra_digitar_loop').checked  = dados['loopObra'];
        document.getElementById('minhaObra_digitar_status').value   = dados['statusObra'];
        document.getElementById('minhaObra_digitar_obra').innerHTML = dados['textoObra'];
    }
}

// Salvar na session
function salvarLocal() 
{
    const dados = new Object ();
    
    dados.idObra        = document.getElementById('minhaObra_digitar_id').innerHTML;
    dados.nomeObra      = document.getElementById('minhaObra_digitar_nome').value;
    dados.descObra      = document.getElementById('minhaObra_digitar_desc').value;
    dados.duracaoObra   = document.getElementById('minhaObra_digitar_duracao').value;
    dados.loopObra      = document.getElementById('minhaObra_digitar_loop').checked;
    dados.statusObra    = document.getElementById('minhaObra_digitar_status').value;
    dados.textoObra     = document.getElementById('minhaObra_digitar_obra').innerHTML;

    sessionStorage.setItem("obra_dados", JSON.stringify(dados));
}



// Salvar no banco de dados
function salvar() 
{
    const dadosSalvar = sessionStorage.getItem("obra_dados");

     // Validar dados no php e retonar com erro-Mensagem

   // AJAX
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function () 
   {
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
                swal(
                    {
                        title: "Tudo Certo!",
                        text: "Obra cadastrada com sucesso!",
                        icon: "success",
                        button: "OK",
                    }

                    ).then

                    (
                    (swal_click) => {
                        limparDadosSessao();
                        window.open("minhasObras.php", '_self');
                    }
                    );
                break;

            case 'erro':
                swal(
                        {
                            title: "Não foi possivel incluir a Obra!",
                            text: resposta_descricao,
                            icon: "warning",
                            button: "OK",
                        }
                    )
                break;                   

            default:
                swal(
                    {
                        title: "Problema ao incluir Obra!",
                        text: "Por favor entrar em contato com o administrador do sistema!",
                        icon: "error",
                        button: "OK",
                    }
                )
           }
       };
   }

   xmlhttp.open("POST", "php/criar_obra.php", true);
   xmlhttp.setRequestHeader("Content-type", "application/json");
   xmlhttp.send(dadosSalvar);
}

function cancelar() 
{
    limparDadosSessao();
    window.open("minhasObras.php", '_self');
}

function limparDadosSessao() 
{
    sessionStorage.setItem("obra_dados", '');
}
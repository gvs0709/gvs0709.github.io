function validar(f){
    var nome = document.getElementById("nome").value
    var sobrenome = document.getElementById("sobrenome").value
    var email = document.getElementById("email").value
    var menssagem = document.getElementById("menssagem").value

    var nome_erro = document.getElementById("nome-erro")
    var sobrenome_erro = document.getElementById("sobrenome-erro")
    var email_erro = document.getElementById("email-erro")
    var menssagem_erro = document.getElementById("menssagem-erro")

    var valid = true

    //Validação do nome
    if(nome.length == 0){
        nome_erro.innerHTML = "O nome não foi preenchido!"
        valid = false
    }

    else{
        if(nome.length < 2){
            nome_erro.innerHTML = "Nome muito pequeno!"
            valid = false
        }
    }

    //Validação do sobrenome
    if(sobrenome.length == 0){
        sobrenome_erro.innerHTML = "O sobrenome não foi preenchido!"
        valid = false
    }

    else{
        if(sobrenome.length < 2){
            sobrenome_erro.innerHTML = "Sobrenome muito pequeno!"
            valid = false
        }
    }

    //Validação do email
    if(email.length == 0){
        email_erro.innerHTML = "O email não foi preenchido!"
        valid = false
    }

    else{
        if(!/^[^\s@ç]+@[^\s@ç]+\.[^\s@ç]+$/.test(email)){
            email_erro.innerHTML = "email inválido!"
            valid = false
        }
    }

    //Validação da menssagem
    if(menssagem.length == 0){
        menssagem_erro.innerHTML = "Nenhuma menssagem digitada!"
        valid = false
    }

    /*if(nome_erro.innerHTML != "" || sobrenome_erro.innerHTML != "" || email_erro.innerHTML != "" || menssagem_erro != ""){
        valid = false
    }*/

    if(valid){
        f.submit()
    }

    else{
        return valid
    }
}

function limpar(e){
    document.getElementById(e.id + "-erro").innerHTML = ""
}
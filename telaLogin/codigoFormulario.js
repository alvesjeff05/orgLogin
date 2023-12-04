function clicarBotao(){
    let cep = document.getElementById("inputCep").value
    buscarDados(cep)
}

async function buscarDados(cep){
    console.log(cep)
    let dados = await fetch(`https://viacep.com.br/ws/${cep}/json/`).then(Response => Response.json());
    dadosTela(dados)
}

function dadosTela(dados){
    document.getElementById("inputRua").value = dados.logradouro
    document.getElementById("inputCidade").value = dados.localidade
    document.getElementById("inputEstado").value = dados.uf
}

function limpar(){
    document.getElementById("inputCep").value = ""
    document.getElementById("inputRua").value = ""
    document.getElementById("inputComplemento").value = ""
    document.getElementById("inputCidade").value = ""
    document.getElementById("inputEstado").value = ""
}
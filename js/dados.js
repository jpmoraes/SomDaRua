let nomeText = document.querySelector(".nome");
let nomeForms = document.querySelector(".nome-forms");
let primeiroNomeForm = document.querySelector("#inome");
let sobrenomeForm = document.querySelector("#isobrenome");

let emailText = document.querySelector(".email");
let emailForms = document.querySelector("#iemail");

let cpfText = document.querySelector(".cpf");
let cpfForms = document.querySelector("#icpf");

let telefoneText = document.querySelector(".telefone");
let telefoneForms = document.querySelector("#itelefone");

let enderecoText = document.querySelector(".endereco");
let enderecoForms = document.querySelector(".endereco-forms");

let ruaForm = document.querySelector("#irua");
let numeroForm = document.querySelector("#inumero");
let bairroForm = document.querySelector("#ibairro");
let complementoForm = document.querySelector("#icomplemento");

let editbtn = document.querySelector(".btn-edit");
let sendbtn = document.querySelector(".btn-send");
let cancelbtn = document.querySelector(".btn-cancel");

function edit() {
    nomeText.style.display = "none";
    nomeForms.style.display = "block";
    nomeForms.classList.add("d-flex", "flex-column");
    //TODO: Essa implementação quebra quando a pessoa tem mais de um sobrenome
    [primeiroNomeForm.value, sobrenomeForm.value] = nomeText.innerHTML.split(" ");
    
    emailText.style.display = "none";
    emailForms.style.display = "block";
    emailForms.value = emailText.innerHTML;
    
    cpfText.style.display = "none";
    cpfForms.style.display = "block";
    cpfForms.value = cpfText.innerHTML;
    
    telefoneText.style.display = "none";
    telefoneForms.style.display = "block";
    telefoneForms.value = telefoneText.innerHTML;

    enderecoText.style.display = "none";
    enderecoForms.style.display = "block";
    enderecoForms.classList.add("d-flex", "flex-column");
    [ruaForm.value, numeroForm.value, bairroForm.value, complementoForm.value] = enderecoText.innerHTML.split(", ");
    
    editbtn.style.display = "none";
    sendbtn.style.display = "block";
    cancelbtn.style.display = "block";
}
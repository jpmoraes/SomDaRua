let nomeText = document.querySelector(".nome");
let nome = nomeText.innerHTML.split(" ");
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

let editbtn = document.querySelector(".btn-edit");
let sendbtn = document.querySelector(".btn-send");

nomeText.style.display = "none";
nomeForms.style.display = "block";
nomeForms.classList.add("d-flex");
nomeForms.classList.add("flex-column");
primeiroNomeForm.value = nome[0];
sobrenomeForm.value = nome[1];


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
enderecoForms.classList.add("d-flex");
enderecoForms.classList.add("flex-column");

editbtn.style.display = "none";
sendbtn.style.display = "block";

function edit() {

}
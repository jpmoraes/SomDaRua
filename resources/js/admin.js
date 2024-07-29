const filterDropdown = document.getElementById('filtro');
const eventContainer = document.querySelector('.row'); 

filterDropdown.addEventListener('change', function() {
  const selectedValue = this.value;
  const eventCards = eventContainer.querySelectorAll('.card'); 

  eventCards.forEach(card => {

  });
});
function showInput() {
  document.getElementById("valor").style.display = "block";
}
function hideInput() {
  document.getElementById("valor").style.display = "none";
}

let contadorCampos = 1;
        const maxCampos = 7; // Limite máximo de campos

        function addNewField() {
            if (contadorCampos < maxCampos) {
                contadorCampos++;
                const novoCampoDiv = document.createElement("div");
                novoCampoDiv.className = "input-group";
                novoCampoDiv.id = "socialMediaContainer" + contadorCampos;
                novoCampoDiv.style = "display: flex; flex-direction: row; align-items: center; margin-top: 5px;";
                
                const novoCampoInput = document.createElement("input");
                novoCampoInput.type = "text";
                novoCampoInput.ariaLabel = "First name";
                novoCampoInput.className = "form-control";
                novoCampoInput.style = "flex: 1; margin-right:5px;";

                const optionPlaceholder = document.createElement("option");
                optionPlaceholder.value = "";
                optionPlaceholder.disabled = true;
                optionPlaceholder.selected = true;
                optionPlaceholder.hidden = true;
                optionPlaceholder.textContent = "";

                  novoCampoDiv.appendChild(novoCampoInput);
              
                
                const socialMediaContainer = document.getElementById("socialMediaContainer");
                socialMediaContainer.appendChild(novoCampoDiv);
            } else {
                alert("Limite de campos atingido.");
   }
 }

 
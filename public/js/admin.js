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
                
                const novoCampoSelect = document.createElement("select");
                novoCampoSelect.id = "generoMusical" + contadorCampos;
                novoCampoSelect.name = "generoMusical";
                novoCampoSelect.className = "form-control";
                novoCampoSelect.style = "flex: 1;";
                
                const optionPlaceholder = document.createElement("option");
                optionPlaceholder.value = "";
                optionPlaceholder.disabled = true;
                optionPlaceholder.selected = true;
                optionPlaceholder.hidden = true;
                optionPlaceholder.textContent = "";
                
                const optionFacebook = document.createElement("option");
                optionFacebook.value = "face";
                optionFacebook.textContent = "Facebook";
                
                const optionTiktok = document.createElement("option");
                optionTiktok.value = "Tiktok";
                optionTiktok.textContent = "Tiktok";
                
                const optionInstagram = document.createElement("option");
                optionInstagram.value = "Instagram";
                optionInstagram.textContent = "Instagram";
                
                const optionKwai = document.createElement("option");
                optionKwai.value = "Kwai";
                optionKwai.textContent = "Kwai";
                
                const optionTwitter = document.createElement("option");
                optionTwitter.value = "X";
                optionTwitter.textContent = "X/Twitter";
                
                const optionYoutube = document.createElement("option");
                optionYoutube.value = "youtube";
                optionYoutube.textContent = "Youtube";
                
                novoCampoSelect.appendChild(optionPlaceholder);
                novoCampoSelect.appendChild(optionFacebook);
                novoCampoSelect.appendChild(optionTiktok);
                novoCampoSelect.appendChild(optionInstagram);
                novoCampoSelect.appendChild(optionKwai);
                novoCampoSelect.appendChild(optionTwitter);
                novoCampoSelect.appendChild(optionYoutube);
                
                novoCampoDiv.appendChild(novoCampoInput);
              
                
                const socialMediaContainer = document.getElementById("socialMediaContainer");
                socialMediaContainer.appendChild(novoCampoDiv);
            } else {
                alert("Limite de campos atingido.");
   }
 }

 
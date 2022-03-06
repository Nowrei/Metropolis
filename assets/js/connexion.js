let form = document.querySelector("form");
let nom = document.getElementById("nom");
let prenom = document.getElementById("prenom");
let useremail = document.getElementById("useremail");
let userpassword1 = document.getElementById("userpassword1");
let userpassword2 = document.getElementById("userpassword2");
let errorEl = document.getElementById("errors").querySelector("ul");

form.addEventListener("submit", function(e) {
    let errors = [];
    
    if(nom.value.trim() == "") {
        errors.push("Un nom est requis");
    }

    if(prenom.value.trim() == "") {
        errors.push("Un prenom est requis");
    }
    
    if(useremail.value.trim() == "") {
        errors.push("Un Email est requis");
    } else if(!isEmailAddress(useremail.value)) {
        errors.push("L'Email est invalide");
    }
    
    if(userpassword1.value.trim() == "") {
        errors.push("Un mot de passe est requis");
    } else if(userpassword1.value.length < 6) {
        errors.push("Le mot de passe doit contenir 6 caractère ou plus");
    }
    
    if(userpassword2.value.trim() == "") {
        errors.push("Confirmer le mot de passe");
    } else if(userpassword2.value !== userpassword1.value) {
        errors.push("Le mot de passe ne correspond pas");
    }
    
    if(errors.length > 0) {
        e.preventDefault();
        errorEl.innerHTML = "";
        errors.forEach(e => {
            errorEl.innerHTML += `<li>${e}</li>`;
        });
        
    }
})


function isEmailAddress(str) {
   var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   return pattern.test(str);  // returns a boolean
}
// Variables pour la modale et l'élément à modifier
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
var questionElement1 = document.getElementById("question1");
var questionElement2 = document.getElementById("question2");
var questionElement3 = document.getElementById("question3");
var questionElement4 = document.getElementById("question4");
var questionNew = "";

// Afficher la modale pour confirmer la modification
function edit1() {
    modal.style.display = "block";  // Afficher la modale
}
function edit2() {
    modal2.style.display = "block";  // Afficher la modale
}
function edit3() {
    modal3.style.display = "block";  // Afficher la modale
}
function edit4() {
    modal4.style.display = "block";  // Afficher la modale
}

// Fermer la modale
function closeModal() {
    modal.style.display = "none";  // Masquer la modale
}

function closeModal2() {
    modal2.style.display = "none";  // Masquer la modale
}

function closeModal3() {
    modal3.style.display = "none";  // Masquer la modale
}

function closeModal4() {
    modal4.style.display = "none";  // Masquer la modale
}

// Valider la modification de la question
function confirmEdit1() {
    questionNew = prompt("Modifier la question");
    if (questionNew) {
        questionElement1.innerHTML = questionNew;
    }
    closeModal();
}
function confirmEdit2() {
    questionNew = prompt("Modifier la question");
    if (questionNew) {
        questionElement2.innerHTML = questionNew;
    }
    closeModal2();
}
function confirmEdit3() {
    questionNew = prompt("Modifier la question");
    if (questionNew) {
        questionElement3.innerHTML = questionNew;
    }
    closeModal3();
}
function confirmEdit4() {
    questionNew = prompt("Modifier la question");
    if (questionNew) {
        questionElement4.innerHTML = questionNew;
    }
    closeModal4();
}

var modale = document.getElementById("myResponse1");
var modale2 = document.getElementById("myResponse2");
var modale3 = document.getElementById("myResponse3");
var modale4 = document.getElementById("myResponse4");
var responseElement1 = document.getElementById("response1");
var responseElement2 = document.getElementById("response2");
var responseElement3 = document.getElementById("response3");
var responseElement4 = document.getElementById("response4");
var responseNew = "";

// Afficher la modale pour confirmer la modification
function response1() {
    modale.style.display = "block";  // Afficher la modale
}
function response2() {
    modale2.style.display = "block";  // Afficher la modale
}
function response3() {
    modale3.style.display = "block";  // Afficher la modale
}
function response4() {
    modale4.style.display = "block";  // Afficher la modale
}

// Fermer la modale
function closeModale() {
    modale.style.display = "none";  // Masquer la modale
}

function closeModale2() {
    modale2.style.display = "none";  // Masquer la modale
}

function closeModale3() {
    modale3.style.display = "none";  // Masquer la modale
}

function closeModale4() {
    modale4.style.display = "none";  // Masquer la modale
}

// Valider la modification de la question
function confirmResponse1() {
    questionNew = prompt("Modifier la question");
    if (responseNew) {
        responseElement1.innerHTML = responseNew;
    }
    closeModale();
}
function confirmResponse2() {
    questionNew = prompt("Modifier la question");
    if (responseNew) {
        responseElement2.innerHTML = responseNew;
    }
    closeModale2();
}
function confirmResponse3() {
    questionNew = prompt("Modifier la question");
    if (responseNew) {
        responseElement3.innerHTML = responseNew;
    }
    closeModale3();
}
function confirmResponse4() {
    questionNew = prompt("Modifier la question");
    if (responseNew) {
        responseElement4.innerHTML = responseNew;
    }
    closeModale4();
}
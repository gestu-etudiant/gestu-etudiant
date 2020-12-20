//Infos
var fermer = document.getElementById('fermer');
fermer.addEventListener('click', plus)
para = document.getElementById('p');
span = document.getElementById('span');

function plus() {
    fermer.style.display = 'none';
    para.innerHTML += "évaluer la réussite des étudiants en fonction des facteurs à la fois internes et externes. Grâce à des graphes bien définis, nous tenterons d'apporter quelques solutions face au problème.<br/><button class='btn btn-warning' id='fer' onclick='fer();'>Fermer</button>"

}

function fer() {
    para.style.display = 'none';
    span.style.display = 'none';
}
//Validation Formulaire
var doc = document.getElementById('valider');
doc.addEventListener('click', f_valid);
var ndoss = document.getElementById('ndoss');
var region = document.getElementById('region');
region.addEventListener('click', f_region);
var filiere = document.getElementById('filiere');
filiere.addEventListener('click', f_filiere);
var jobPa = document.getElementById('jobPa');
jobPa.addEventListener('click', f_Pa);
var jobMa = document.getElementById('jobMa');
jobMa.addEventListener('click', f_Ma);
var logement = document.getElementById('logement');
logement.addEventListener('click', f_logement);
var sl = document.getElementById('sl');
sl.addEventListener('click', f_sl);
var se = document.getElementById('se');
se.addEventListener('click', f_se);
var ma = document.getElementById('ma');
ma.addEventListener('click', f_ma);
var revenu = document.getElementById('revenu');
var Marie = document.getElementById('Marie');
var celib = document.getElementById('celib');
var veuf = document.getElementById('veuf');
var div = document.getElementById('div');

function f_valid(e) {
    if (ndoss.value == '' || region.value == '--Séléctionner--' || filiere.value == '--Sélectionner--' ||
        jobPa.value == '--Sélectionner--' || jobMa.value == '--Sélectionner--' ||
        logement.value == '--Sélectionner--' || sl.value == '--Sélectionner--' ||
        se.value == '--Sélectionner--' || ma.value == '--Sélectionner--' || revenu.value == '') {
        e.preventDefault();
        document.getElementById('remplir').innerHTML = 'Remplir tous les champs<br/>';
        document.getElementById('remplir').style.color = 'red';
    } else if (revenu.value < 5000 || revenu.value >300000){
        e.preventDefault();
        document.getElementById('remplir').innerHTML = 'Entrez un revenu compris entre 5000frcs et 300000frcs<br/>';
        document.getElementById('remplir').style.color = 'red';
    } else if (ndoss.value < 100000000000 || ndoss.value > 20000000000) {
        e.preventDefault();
        document.getElementById('remplir').innerHTML = 'Entrez un numéro de dossier valide<br/>';
        document.getElementById('remplir').style.color = 'red';
    }
    else{
        alert('Bien enrégistré!!!\nMerci de votre aide.\nNous vous serons éternellement reconnaissant');
    }
}
//Supprimer l'option Sélectionner
function f_region() {
    document.getElementById('S1').style.display = 'none';
}

function f_filiere() {
    document.getElementById('S2').style.display = 'none';
}

function f_Pa() {
    document.getElementById('S3').style.display = 'none';
}

function f_Ma() {
    document.getElementById('S4').style.display = 'none';
}

function f_logement() {
    document.getElementById('S5').style.display = 'none';
}

function f_sl() {
    document.getElementById('S6').style.display = 'none';
}

function f_se() {
    document.getElementById('S7').style.display = 'none';
}

function f_ma() {
    document.getElementById('S8').style.display = 'none';
}

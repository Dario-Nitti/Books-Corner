function searchToggle(obj, evt) {
    var container = $(obj).closest('.search-wrapper');
    if (!container.hasClass('active')) {
        container.addClass('active');
        evt.preventDefault();
    } else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
        container.removeClass('active');
        // clear input
        container.find('.search-input').val('');
    }
}

$('.carousel').carousel({
    interval: 2000
})


function show() {
    var x = document.getElementById("signup");
    if (x.style.display == 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }
}


function canc() {
    var nome = document.getElementById("nome").value = '';
    var email = document.getElementById("email-sign").value = '';
    var pass = document.getElementById("password-sign").value = '';


}

function insert() {
    var email = document.getElementById("Email").value;
    var pass = document.getElementById("password").value;
    if (email.length == 0 || pass.length == 0) {
        document.getElementById("wrong").innerHTML = "Email o password sbagliata";
        return false;
    }
    return true;
}

function email() {
    var emailsign = document.getElementById("email-sign").value;
    if (emailsign.length == 0)
        document.getElementById("email").innerHTML = "Inserisci la tua email";


}



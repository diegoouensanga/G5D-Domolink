var thisScript = $('script[src*=compte]');
var mail = thisScript.attr('data-my_var_1');

function deleteDate() {
    $('#naissance').val("");
}

document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector("#naissance")) {
        document.querySelector("#naissance").addEventListener('click', deleteDate);
    }
    if (document.getElementById("accountDelete")) {
        document.getElementById("accountDelete").onclick = function verifyMail(e) {
            if (mail === $('#mail').val()) {
                $('#infoForm').submit();
            }
        };
    }
    if (document.querySelector("#champTel")) {
        document.getElementById("champTel").oninput = function () {
            checkNum(document.getElementById("champTel"));
        }
    }
    if (document.querySelector("#champPostal")) {
        document.getElementById("champPostal").oninput = function () {
            checkNum(document.getElementById("champPostal"));
        }
    }
    if (document.querySelector("#champRue")) {
        document.getElementById("champRue").oninput = function () {
            checkNum(document.getElementById("champRue"));
        }
    }
});
$(document).ready(function () {
    $('#mdpChange').click(function () {
        $.ajax({
            type: 'post',
            url: 'phpRessources/verifyMDP.php',
            data: {mdp: $('#actualMDP').val()},
            dataType: 'json',
            success: function (data) {
                if (data.ok === true) {
                    if ($('#newMDP').val() !== $('#confNewMDP').val()) {
                        let span = document.getElementById("errorText");
                        let txt = document.createTextNode("Les mots de passes ne sont pas identiques.");
                        if (!span.firstChild)
                            span.appendChild(txt);
                    } else {
                        document.getElementById("infoForm").submit();
                    }
                } else {
                    let span = document.getElementById("errorText");
                    let txt = document.createTextNode("Le mot de passe est invalide.");
                    if (!span.firstChild)
                        span.appendChild(txt);
                }
            }
    });
    return false;
});
$('#naissance').on('keydown', function () {
    let string = $('#naissance').val();
    if (event.key === 8 || event.key === 37 || event.key === 39)
        return true;
    else {
        if (event.key === "-" && (string.length === 2 || string.length === 5))
            return true;
        if ('0123456789'.indexOf(event.key) === -1)
            return false;
        else {
            if (string.length === 2 || string.length === 5)
                string = string + "-";
            $('#naissance').val(string);
            return true;
        }
    }
});
$('#infoSubmit').click(function () {
    var email = $('#mail').val();
    $.ajax({
        type: 'post',
        url: 'phpRessources/check.php',
        data: {email: email},
        dataType: 'json',
        success: function (data) {
            if (data.exist === false) {
                document.getElementById("infoForm").submit();
            } else {
                let span = document.getElementById("errorText");
                let txt = document.createTextNode("L'identifiant existe déjà.");
                if (!span.firstChild)
                    span.appendChild(txt);
            }
        },
    });
    return false;
});
})
;

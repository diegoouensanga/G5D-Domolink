

function checkNum(elmnt) {
    elmnt.value = elmnt.value.replace(/(?![0-9])./gmi, '');
}

function deleteDate() {
    $('#naissance').val("");
}

$(document).ready(function () {
    $('#mdpChange').click(function () {
        if ($('#newMDP').val() === $('#confNewMDP').val()) {
            return true;
        } else {
            let span = document.getElementById("errorText");
            let txt = document.createTextNode("Les mots de passes ne sont pas identiques.");
            if (!span.firstChild)
                span.appendChild(txt);
            return false;
        }
    });
    $('#accountDelete').click(function () {
        return $('#mail').val() === "<?php echo $donnees['mail'];?>";
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
});
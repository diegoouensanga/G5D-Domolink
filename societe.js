let logoOk = true;
$(document).ready(function(){
    $('#sauvegarder').click(function(){
        return logoOk;
    });
    $('#logo').change(function() {
        let extension = $('#logo').val().split('.').pop().toLowerCase();
        let span = document.getElementById("erreurText");
        if (jQuery.inArray(extension, ['png','jpeg','gif','jpg']) === -1){
            let txt = document.createTextNode("Extention invalide.");
            if (span.firstChild)
                span.removeChild(span.firstChild);
            span.appendChild(txt);
            logoOk = false;
        } else if (this.files[0].size<1 ||this.files[0].size > 10000000){
            let txt = document.createTextNode("Taille invalide.");
            if (span.firstChild)
                span.removeChild(span.firstChild);
            span.appendChild(txt);
            logoOk = false;
        } else {
            logoOk = true;
        }
    });
});
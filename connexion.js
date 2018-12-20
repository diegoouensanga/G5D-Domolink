$(document).ready(function () {
    function test(){
        if ($('#mail').val().indexOf('@') === -1) {
            alert("Veuillez saisir une adresse email valide");
            return false;
        } else if ($('#mdp').val().length < 7) {
            alert("Mot de passe trop court, veuillez saisir au moins 7 caractères");
            return false;
        } else if ($('#mdp').val() !== $('#confirmation').val()) {
            alert("Les mots de passes ne sont pas égaux");
            return false;
        } else {
            document.getElementById('inscriptionform').submit();
        }
    }
    $('#inscription').click(function () {
        var mail = $('#mail').val();
        var cMAC = $('#cMAC').val();
        console.log("salut");
        $.ajax({
            type: 'post',
            url: 'tryconnect.php',
            data: {mail: mail, cMAC: cMAC},
            dataType: 'json',
            success: function(data)
            {
                console.log(data);
                if (data.exist === 'true') {
                    alert("Vous avez déjà un compte");
                } else {
                    test();
                }
            },
            error:function(a,b,c){
                console.log(a);
                console.log(b);
                console.log(c);
            }
        });
        return false;
    });
});
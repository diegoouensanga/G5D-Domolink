function display(strArg) {
    window.open("phpRessources/informationView.php?data="+strArg, "DomoLink", "width=2000,height=1000");
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("cguLink").onclick = function (){
        display("cgu");
    }
    document.getElementById("mentions").onclick = function (){
        display("mentions_legales");
    }
});
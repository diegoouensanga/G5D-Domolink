if (document.querySelector("#cMAC")) {
    document.getElementById("cMAC").oninput = function () {
        checkNum(document.getElementById("cMAC"));
    }
}
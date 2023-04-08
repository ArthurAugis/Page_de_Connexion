function functionMDP() {
    var x = document.getElementById("MotDePasse");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
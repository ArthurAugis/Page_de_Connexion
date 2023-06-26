function functionMDP() {
    var x = document.getElementById("MotDePasse");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const motdepasseInput = document.getElementById('MotDePasse');
    const motdepasseError = document.getElementById('motdepasse-error');

    motdepasseInput.addEventListener('invalid', function (event) {
        event.preventDefault();
        motdepasseError.style.display = 'block';
    });

    motdepasseInput.addEventListener('input', function () {
        if (motdepasseInput.validity.valid) {
            motdepasseError.style.display = 'none';
        }
    });

});
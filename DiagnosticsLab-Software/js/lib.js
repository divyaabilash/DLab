function addClass(selector, className) {
    if (!selector && typeof selector === "string") {
        return;
    }

    var elem = document.querySelector(selector);
    if (elem) {
        elem.className += " " + className;
    }

}

function removeClass(selector, className) {

    if (!selector && typeof selector === "string") {
        return;
    }

    var elem = document.querySelector(selector);

    if (elem) {
        var cName = elem.className;

        cName = cName.split(" ");

        cName = cName.filter(function(elem) {
            return elem !== className;
        });

        elem.className = cName.join(" ").trim();
    }

}



function comparePassword() {
    var primepassword, secondpassword;
    primepassword = document.getElementById("password");
    secondpassword = document.getElementById("confirmpassword");
    if (primepassword.value !== confirmpassword.value) {
        document.getElementById("error").innerHTML = "Confirm Password mismatch";
        addClass("#password", 'error');
        addClass("#confirmpassword", 'error');
    } else {
        removeClass("#password", 'error');
        removeClass("#confirmpassword", 'error');
    }
}

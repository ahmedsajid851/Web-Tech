var wrong = 0;

function collectData() {

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    document.getElementById("emailErr").innerHTML = "";
    document.getElementById("passwordErr").innerHTML = "";

    var valid = true;

    if (email.indexOf("@") == -1) {
        document.getElementById("emailErr").innerHTML = "Email must contain @";
        valid = false;
    }

    if (password.length < 6) {
        document.getElementById("passwordErr").innerHTML = "Password must be at least 6 characters";
        valid = false;
    }

    if (password.indexOf("#") == -1) {
        document.getElementById("passwordErr").innerHTML = "Password must contain #";
        valid = false;
    }

    if (valid == false) {
        wrong++;
        document.getElementById("count").innerHTML = 
            "Wrong submission: " + wrong;
        return false;
    }

    alert("Login Successful!");

    return true;
}
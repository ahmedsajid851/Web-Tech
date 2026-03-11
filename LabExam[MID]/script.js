let registrants = [];
let virtual = 0;
let inperson = 0;


function validateForm() {

    document.getElementById("nameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("attendanceError").innerHTML = "";

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let company = document.getElementById("company").value.trim();
    let attendance = document.querySelector('input[name="attendance"]:checked');

    let valid = true;


    if (name.length < 6 || name.length > 100) {
        document.getElementById("nameError").innerHTML =
            "Name must be between 6 and 100 characters";
        valid = false;
    }


    if (!email.includes("@") || !email.includes(".")) {
        document.getElementById("emailError").innerHTML =
            "Invalid email address.";
        valid = false;
    }

    if (!attendance) {
        document.getElementById("attendanceError").innerHTML =
            "Select attendance type.";
        valid = false;
    }

    if (!valid) return false;

    registrants.push({
        name: name,
        email: email,
        company: company,
        attendance: attendance.value
    });

    if (attendance.value === "Virtual")
        virtual++;
    else
        inperson++;

    updateAnalytics();

    alert("Registration Successful!");

    return false;
}

function updateAnalytics() {
    document.getElementById("total").innerHTML = registrants.length;
    document.getElementById("virtualCount").innerHTML = virtual;
    document.getElementById("inpersonCount").innerHTML = inperson;
}

function toggleAnalytics() {

    let panel = document.getElementById("analyticsPanel");
    let btn = document.getElementById("analyticsBtn");

    if (panel.style.display === "none") {
        panel.style.display = "block";
        btn.innerHTML = "Hide Event Analytics";
    } else {
        panel.style.display = "none";
        btn.innerHTML = "Show Event Analytics";
    }
}
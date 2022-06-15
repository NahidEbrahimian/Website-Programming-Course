function patient()
{
    var patient_login_form = document.getElementById("patients-login-form");
    var doctor_login_form = document.getElementById("doctors-login-form");
    var doctor_btn = document.getElementById("doctor-btn");
    var patient_btn = document.getElementById("patient-btn");

    patient_login_form.style.display = "block";
    doctor_login_form.style.display = "None";

    patient_btn.classList.add("buttons", "btn-outline-light");
    doctor_btn.classList.remove("buttons", "btn-outline-light")
}

function doctor()
{
    var doctor_login_form = document.getElementById("doctors-login-form");
    var patient_login_form = document.getElementById("patients-login-form");
    var doctor_btn = document.getElementById("doctor-btn");
    var patient_btn = document.getElementById("patient-btn");

    doctor_login_form.style.display = "block";
    patient_login_form.style.display = "None";
    doctor_btn.classList.add("buttons", "btn-outline-light");
    patient_btn.classList.remove("buttons", "btn-outline-light")
}

function display_specialty(selected_specialty)
{
    var select_tag = document.getElementById("select-tag-specialty");
    select_tag.innerHTML = selected_specialty.value;
}

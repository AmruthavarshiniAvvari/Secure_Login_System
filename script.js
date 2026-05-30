// Show Login
function showLogin() {

  document
    .getElementById("loginForm")
    .classList.remove("d-none");

  document
    .getElementById("registerForm")
    .classList.add("d-none");
}

// Show Register
function showRegister() {

  document
    .getElementById("registerForm")
    .classList.remove("d-none");

  document
    .getElementById("loginForm")
    .classList.add("d-none");
}

// Toggle Password
function togglePassword(id) {

  const input = document.getElementById(id);

  if(input.type === "password"){

    input.type = "text";

  }else{

    input.type = "password";
  }
}

/* AJAX EMAIL CHECK */

const registerEmail =
document.getElementById("registerEmail");

registerEmail.addEventListener("keyup", function () {

    const email = registerEmail.value;

    const xhr = new XMLHttpRequest();

    xhr.open("POST", "check_email.php", true);

    xhr.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );

    xhr.onload = function () {

        if(this.responseText.trim() === "exists"){

            document.getElementById("emailMessage")
            .innerHTML =
            "<span class='text-danger'>Email already exists</span>";

        }else{

            document.getElementById("emailMessage")
            .innerHTML =
            "<span class='text-success'>Email available</span>";
        }
    }

    xhr.send("email=" + email);

});
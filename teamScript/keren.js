function Login() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (
    (username == "kerenworan" && password == "worankeren") ||
    (username == "vaniawenur" && password == "wenurvania") ||
    (username == "merrysangari" && password == "sangarimerry") ||
    (username == "jonaphandany" && password == "phandanyjona")
  ) {
    location.href = "home.php";
  } else {
    Swal.fire({
      icon: "error",
      title: "TRY AGAIN!!",
      text: "Incorrect Username or Password!",
    });
  }
}

function forgot() {
  Swal.fire({
    icon: "warning",
    title: "Contact Our Admin Hospital",
  });
}

function logout() {
  Swal.fire({
    title: "Are you sure?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes",
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = "index.php";
    }
  });
}

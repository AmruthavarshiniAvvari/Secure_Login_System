<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login System</title>

  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      Login System
    </a>
  </div>
</nav>

<!-- MAIN -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">

  <div class="form-box shadow-lg">

    <!-- Buttons -->
    <div class="text-center mb-4">

      <button
        class="btn btn-primary"
        onclick="showLogin()"
      >
        Login
      </button>

      <button
        class="btn btn-success"
        onclick="showRegister()"
      >
        Register
      </button>

    </div>

    <!-- LOGIN FORM -->
    <form
      id="loginForm"
      action="login.php"
      method="POST"
    >

      <h2 class="text-center mb-4">Login</h2>

      <input
        type="email"
        class="form-control mb-3"
        name="email"
        placeholder="Email"
        required
      >

      <div class="input-group mb-3">

        <input
          type="password"
          class="form-control"
          id="loginPassword"
          name="password"
          placeholder="Password"
          required
        >

        <button
          type="button"
          class="btn btn-outline-secondary"
          onclick="togglePassword('loginPassword')"
        >
          Show
        </button>

      </div>

      <button class="btn btn-primary w-100">
        Login
      </button>

    </form>

    <!-- REGISTER FORM -->
    <form
      id="registerForm"
      action="register.php"
      method="POST"
      class="d-none"
    >

      <h2 class="text-center mb-4">Register</h2>

      <input
        type="text"
        class="form-control mb-3"
        name="username"
        placeholder="Username"
        required
      >

      <input
        type="email"
        class="form-control mb-1"
        id="registerEmail"
        name="email"
        placeholder="Email"
        required
      >

      <p id="emailMessage"></p>

      <div class="input-group mb-3">

        <input
          type="password"
          class="form-control"
          id="registerPassword"
          name="password"
          placeholder="Password"
          required
        >

        <button
          type="button"
          class="btn btn-outline-secondary"
          onclick="togglePassword('registerPassword')"
        >
          Show
        </button>

      </div>

      <button class="btn btn-success w-100">
        Register
      </button>

    </form>

  </div>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3">
  © 2026 Amruthavarshini
</footer>

<script src="script.js"></script>

</body>
</html>
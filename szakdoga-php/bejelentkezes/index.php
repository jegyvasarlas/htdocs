<!doctype html>
<html lang="hu">
<head>
  <meta charset="utf-8">
  <title>Jegyváráslás</title>
  <link data-th-href="@{css/bootstrap.css}" rel="stylesheet">
  <link rel="icon" data-th-href="@{img/favicon.ico}" type="image/x-icon"/>
  <link rel="shortcut icon" data-th-href="@{img/favicon.ico}" type="image/x-icon"/>
  <link data-th-href="@{css/style.css}" rel="stylesheet">
  <script data-th-src="@{js/bootstrap.js}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
        <a data-th-href="@{/}" class="nav-item nav-link">Főoldal</a>
        <a data-th-href="@{/hirek}" class="nav-item nav-link">Hírek</a>
        <a data-th-href="@{/kapcsolat}" class="nav-item nav-link">Kapcsolat</a>
      </div>
      <div class="navbar-nav ms-auto">
        <a data-th-href="@{/bejelentkezes}" class="nav-item nav-link active">Bejelentkezés</a>
        <a data-th-href="@{/regisztracio}" class="nav-item nav-link">Regisztráció</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
  <div class="rounded-5">
    <br>
    <br>
    <br>
    <h1>Bejelentkezés</h1>
  </div>
  <div class="row g-3 my-4">
    <div class="col-12 col-md-12 col-lg-12 col-xl-12 rounded-5 p-3 bg-dark">
      <p>E-mail cím</p>
      <p>Jelszó</p>
      <p><a href="" target="_blank" class="btn btn-success">Bejelentkezés</a></p>
    </div>
  </div>
</div>
</body>
</html>

<?

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sparks Bank</title>

  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- importing google font POPPINS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <!-- STYLESHEET  -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="bg-image d-block">
    <div class="image-overlay"></div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container mt-3">
      <a class="navbar-brand fs-2" href="#"><span class="text-blue">Sparks</span> Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fs-5">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="base.php"
              style="color: rgb(4, 142, 247); font-weight: 700">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="all_users.php">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create_users.php">Create Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transfer_money.php">Transfer Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaction.php">Transaction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Section -->
  <main>
    <div class="container container-main">
      <div class="row flex-wrap-reverse">
        <div class="col-md-6 col-sm-6 col-xs-12 col-left align-self-center gx-5">
          <h1 class="display-3 my-4" style="font-weight: 700">
            Transfer money in easy secure steps
          </h1>
          <p class="my-3" style="font-size: 20px">
            We provide fast, easy and more secure way to transfer and receives
            money in short time.
          </p>
          <div class="btn-layer">
            <a href="base.html" class="start-button">Get started</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 text-center fix">
          <div class="rotate-container rotate-image">
            <img class="img-fluid" src="./Images/circle.png" alt="" />
          </div>
          <div class="top-img">
            <img class="img-fluid" src="./Images/ab1.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script src="rotate.js"></script>
  </main>
</body>

</html>
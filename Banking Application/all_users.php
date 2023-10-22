<?php
// connecting to the database
include 'Component/db_connection.php';

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
  <div class="bg-image-cu d-block">
    <div class="image-overlay-cu"></div>
  </div>

  <!-- ================== NAVBAR =============== -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container mt-3">
      <a class="navbar-brand fs-2" href="/base.html"><span class="text-blue">Sparks</span> Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fs-5">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="base.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="all_users.php"
              style="color: rgb(4, 142, 247); font-weight: 700">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="create_users.php">Create Users</a>
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
  <!-- =================== FORM ================== -->
  <section id="all-user">
    <div class="container">
      <div class="m-auto my-1 au-box d-flex justify-content-center">
        <div class="rectangle">
          <h3 class="text-uppercase text-cu my-3 text-center">all users</h3>
          <div class="container table-responsive">
            <table class="table table-blue table-hover my-1">

              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email ID</th>
                  <th scope="col">Balance</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // executing sql query
                $sql = "SELECT * FROM `CUSTOMER`";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr>
                  <td scope='row'>" . $row['SNO'] . "</td>
                  <td scope='row'>" . $row['NAME'] . "</td>
                  <td scope='row'>" . $row['EMAIL'] . "</td>
                  <td scope='row'>" . $row['AMOUNT'] . "</td>
                </tr>
                  ";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
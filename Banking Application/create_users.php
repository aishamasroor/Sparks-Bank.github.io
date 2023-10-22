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
            <a class="nav-link" href="all_users.php">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="base.php"
              style="color: rgb(4, 142, 247); font-weight: 700">Create Users</a>
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
  <div class="container">
    <!-- ==================== PHP ======================-->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // connecting to the database
      include 'Component/db_connection.php';

      $Name = $_POST['name'];
      $Email = $_POST['email'];
      $Amount = $_POST['Amount'];


      // Check whether the user exists
      $userexists = "Select * from `Customer` where Email = '$Email'";
      $result = mysqli_query($conn, $userexists);
      $row_exists = mysqli_num_rows($result);

      if ($row_exists > 0) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong class="text-black">Error!</strong> Email Already Exists !! Please use another email
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      } else {
        // Submit data to database
        // Sql query to be executed
        $sql = "INSERT INTO `customer` (`Name`, `Email`, `Amount`) VALUES ('$Name', '$Email', '$Amount')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong class="text-black">Success!</strong> User Created Successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        } else {
          echo 'The record was not save successfully:' . mysqli_error($conn);
        }
      }

    }

    ?>
  </div>

  <!-- =================== FORM ================== -->
  <section id="user-form">
    <div class="container">
      <div class="m-auto my-3 box d-flex justify-content-center">
        <div class="rectangle">
          <h3 class="text-uppercase text-cu my-3 text-center">Create user</h3>
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <div class="create-user mx-5 my-5 d-flex justify-content-center">
              <form method="post" action="create_users.php">
                <label for="name" class="form-label">Name</label>
                <div class="input-group mb-3">
                  <input name="name" type="text" class="form-control shadow-none" id="name" placeholder="Enter Name"
                    required />
                </div>
                <label for="email" class="form-label">Email</label>
                <div class="input-group mb-3">
                  <input name="email" type="email" id="email" class="form-control shadow-none"
                    placeholder="Recipient's email" aria-describedby="basic-addon2" required />
                  <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
                <label for="Amount" class="form-label">Amount </label>
                <div class="input-group">
                  <input name="Amount" type="number" id="Amount" class="form-control shadow-none"
                    placeholder="Enter Amount" aria-describedby="basic-addon1" required />
                  <select id="" class="input-group-text form-select shadow-none dropdown-toggle"
                    aria-label="Default select example">
                    <option selected>PKR</option>
                    <option value="1">USD</option>
                    <option value="2">EUR</option>
                    <option value="3">SAR</option>
                    <option value="4">QAR</option>
                  </select>
                  <div class="col-12 text-center my-5">
                    <button class="button" type="submit">CREATE USER</button>
                  </div>
                </div>
              </form>
            </div>
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
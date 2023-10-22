<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sparks Bank</title>

  <!-- FONT ICONS (FONT AWSOME)-->
  <script src="https://kit.fontawesome.com/ea50defc5f.js" crossorigin="anonymous"></script>

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
      <a class="navbar-brand fs-2" href="base.php"><span class="text-blue">Sparks</span> Bank</a>
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
            <a class="nav-link" aria-current="page" href="all_users.php">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="create_users.php">Create Users</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="transfer_money.php">Transfer Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="transaction.php"
              style="color: rgb(4, 142, 247); font-weight: 700">Transaction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // connecting to the database
    include 'Component/db_connection.php';

    $sender_acount_no = $_POST['sender-ac'];
    $receiver_acount_no = $_POST['receiver-ac'];
    $Amount = $_POST['Amount'];

    $sql = "INSERT INTO `Transaction_Log` (`sender_Account_no`, `Receiver_Account_no`, `AMOUNT`) VALUES ('$sender_acount_no ', '$receiver_acount_no', '  $Amount')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong class="text-black">Success!</strong> Successfully Transfer money to <strong class="text-black">' . $receiver_acount_no . ' </strong>.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } else {
      echo 'The record was not save successfully:' . mysqli_error($conn);
    }
  }



  ?>
  <!-- =================== customer details  ================== -->
  <div class="container container-customer">
    <div class="row text-center">
      <div class="col-sm-4 col-12">
        <div class="user-detail-box mb-5 my-3">
          <div class="user-profile">
            <div class="profile-content">
              <i class="fa-solid fa-user" style="color: #f7f7f7"></i>
              <span class="user-name">Aisha Masroor</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-12">
        <div class="user-detail-box mb-5 my-3">
          <div class="user-profile">
            <div class="amount-content">
              <i class="fa-solid fa-money-check-dollar" style="color: #eff0f0"></i>
              <span class="user-name">Balance: $440</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-12">
        <div class="user-detail-box mb-5 my-3">
          <div class="user-profile">
            <div class="card-content">
              <i class="fa-solid fa-phone" style="color: #ffffff"></i>
              <span class="user-name">+9212345689</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="user-detail-box mb-5 my-3 need-help">
          <div class="user-profile">
            <div class="help-content">
              <img src="Images/chatting (1).png" alt="chatting-icon" /><br />
              <span class="text-help">Need Help?</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-12 col-md-12 col-sm-12 col-xs-12">
        <div class="transaction-cont mb-5 my-3">
          <div class="text-top">
            <h4 class="text-white">Send Money</h4>
          </div>
          <div class="col-md-12 col-xs-6 col-sm-6 ms-5 me-5 my-5">
            <div class="form-container d-flex">
              <form action="transaction.php" method="POST">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 align-items-start">
                    <label for="sender-ac" class="form-label amount-label">Sender Account No</label>
                    <input name="sender-ac" type="number" class="form-control shadow-none amount-input" id="sender-ac"
                      placeholder="Sender Name" required />
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 align-items-start">
                    <label for="receiver-ac" class="form-label amount-label">Receiver Account no</label>
                    <input name="receiver-ac" type="number" class="form-control shadow-none amount-input"
                      id="receiver-ac" placeholder="Enter Receiver name" required />
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 align-items-start">
                    <label for="Amount" class="form-label">Amount </label>
                    <input name="Amount" type="number" id="Amount" class="form-control shadow-none amount-input"
                      placeholder="Type Amount" aria-describedby="basic-addon1" required />
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 align-items-center my-4">
                    <!-- Adjust margin-top (mt-3) as needed -->
                    <button class="button text-money" type="submit">
                      Send money
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>

<?php
include("../assets/noSessionRedirect.php"); 
include('./fetch-data/verfyRoleRedirect.php');

error_reporting(0);
?>
<?php
  include("../assets/config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <title>ERP</title>
    <link rel="stylesheet" href="../css/oranbyte-google-translator.css">
    <script src="../js/oranbyte-google-translator.js"></script>
    <style type="text/css">
      .payment{
        margin-bottom: 10%;
      }
      @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
    </style>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SCHOOL MANAGEMENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notices.php">Notice</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fee Pay
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="make-payment.php">Make Payment</a></li>
            <li><a class="dropdown-item" href="see-payment.php">See Payment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="change-password.php">Change-Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex align-items-center" >
            <div id="oranbyte-google-translator" class="me-2"
              data-default-lang="en"
              data-lang-root-style="code-flag"
              data-lang-list-style="code-flag"
              ></div>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>

    <div class="payment">
      <section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Payment Info</h3>

            <form class="px-md-2" method="POST" action="qr.php">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" />
                <label class="form-label" for="form3Example1q">Payment Type(Title)</label>
              </div>

              <div class="row">
                <!-- <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" />
                    <label for="exampleDatepicker1" class="form-label">Select a date</label>
                  </div>

                </div> -->
                <div class="col-md-6 mb-4">
                 <?php
    $sql = "SELECT * FROM teachers";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo "<select class='select' style='width: auto; padding: 10px;' name='teacher_id'>
               <option value='0' disabled>SELECT TEACHER</option>
        ";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option value='{$row['id']}'>{$row['fname']} {$row['lname']}
            </option>";
        }
        echo "</select>
        ";
        echo "<input type='submit' class='btn btn-success btn-lg mb-1' value='Click to Pay' style='margin-top: 5%'>
        ";
    }
?>


<!--                   
                  <label for="exampleDatepicker1" class="form-label">Select Teacher's Name</label>

                </div>
              </div>

              <div class="mb-4">

                <select class="select">
                  <option value="1" disabled>Class</option>
                  <option value="2">Class 1</option>
                  <option value="3">Class 2</option>
                  <option value="4">Class 3</option>
                </select>

              </div>
              <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" value="3555985449" disabled/>
                    <label for="exampleDatepicker1" class="form-label">Account No: </label>

                    <input type="text" class="form-control" id="exampleDatepicker1" value="CBHI98562" disabled/>
                    <label for="exampleDatepicker1" class="form-label">IFSC CODE:  </label>

                    <input type="text" class="form-control" id="exampleDatepicker1" value="Teacher Name" disabled/>
                    <label for="exampleDatepicker1" class="form-label">Account Holder Name: </label>
                  </div>

                </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div class="form-outline">
                    <input type="text" id="form3Example1w" class="form-control" />
                    <label class="form-label" for="form3Example1w">Amount</label>
                  </div>

                </div>
              </div> -->

              
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>

  </body>
  </html>
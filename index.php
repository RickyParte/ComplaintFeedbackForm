<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Or Feedback Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body style="background-color: rgb(0,0,0);">
    
<div class="container">
    <div class="feedback-form mt-3">
        <form action="Complaint.php" method="POST">
            <div class="card ps-3 pe-3 pt-2 border-2 border-primary">
                <h1 class="mb-3 fs-3 pt-2 fw-bold text-center text-warning">Complaint/Feedback Form</h1>
                <hr class="text-primary">
                <?php 
                    if(isset($_GET['message']))
                    {
                ?>
                <p class="message h5 text-center" style="color: rgb(245, 144, 12);">
                    <?php 
                        echo $_GET['message']; 
                    ?>
                </p>
                <?php 
                    } 
                ?>

                <div class="mb-3">
                    <label for="Full Name" class="form-label fs-5 fw-bold mt-2 text-primary">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Enter Your Full Name" required>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="Roll Number" class="form-label fs-5 fw-bold text-primary">Roll no:</label>
                            <input type="text" class="form-control" name="rollno"  placeholder="Enter Your Roll No." required>
                        </div>
                        <div class="col-6">
                            <label for="Department" class="form-label fs-5 fw-bold text-primary">Department:</label>
                            <input type="text" class="form-control" name="branch"  placeholder="Ex: IT,CSE,ME" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="MobileNumber" class="form-label fs-5 fw-bold text-primary">Mobile Number:</label>
                            <input type="text" class="form-control" name="mobileno" placeholder="1234567890" required>
                        </div>
                        <div class="col-6">
                            <label for="Email" class="form-label fs-5 fw-bold text-primary">Email address:</label>
                            <input type="text" class="form-control" name="email" placeholder="name@example.com" required>
                        </div>
                    </div>
                </div>
    
                <div class="mb-3">
                    <label for="issuefeedback" class="form-label fs-5 fw-bold text-primary">Describe Your Issue/Feedback:</label>
                    <textarea class="form-control"  rows="2" name="describeissue" placeholder="Describe Your Issue/Feedback. Character Limit is 1000" required></textarea>
                </div>

                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-lg btn-outline-danger w-100" name="submitComplaint">Submit Complaint</button>
                            </div>
        </form>
                        <div class="col-6">
                            <form action="ViewComplaint.php" method="post">
                                <button class="btn btn-lg btn-outline-primary w-100" name="viewComplaint">View Complaint</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</body>
</html>
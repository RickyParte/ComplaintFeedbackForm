<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedbacks and Complaint</title>
</head>
<body class="bg-dark">
    
<div class="container mt-3">
    <h2 class="text-center text-warning">Feedback/Complaints</h2>
    <table class="table table-warning table-hover  table-striped table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Roll Number</th>
                <th>Branch</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Description</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
    
        <?php

            include('Connection.php');
            $selectQuery="select * from feedback";
            $runQuery=mysqli_query($connection,$selectQuery);
            $count=1;
            while($rowData=mysqli_fetch_assoc($runQuery))
            {
                echo "
                <tr>
                    <td>$count</td>
                    <td> $rowData[name] </td>
                    <td> $rowData[rollnumber] </td>
                    <td> $rowData[branch] </td>
                    <td> $rowData[email] </td>
                    <td> $rowData[mobilenumber] </td>
                    <td> $rowData[description] </td>
                    <td> $rowData[datetime] </td>
                </tr>";
                $count++;
                
            }
            

        ?>
        </tbody>
    </table>
    <a href="index.php">
        <button class="btn btn-primary"> Complaint Feedback Submission Form </button>
    </a>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</body>
</html>
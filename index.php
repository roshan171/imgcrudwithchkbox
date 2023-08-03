<?php
session_start();
include "config.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	

</head>
<body>

<div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="bg-light p-2 m-2">
                        <h5 class="text-dark text-center">PHP CRUD operation</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Data</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="adddata.php" class="btn btn-success" style="float:right;"><span>Add New Data</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="">
<?php
 $sql = "SELECT * FROM `crudddimg` ";
 $result = mysqli_query($conn, $sql);
 $i=1;
?>

<?php
        while($data = mysqli_fetch_assoc($result)){
         ?>
   <tr id=<?php echo $data['id'];?>>
   	<td> <?php echo $i++; ?></td>
   <td> <?php echo $data["name"]; ?></td>
    <td> <?php echo $data["email"]; ?></td>
    <td> <?php echo $data["gender"]; ?></td>
    <td> <?php echo $data["status"]; ?></td>
    <td width="80"><img src="images/<?php echo $data['image']; ?>" width="50" height="50"></td>
    	

    <td class="actions ">
     <a href="updatedata.php?id=<?php echo $data['id']; ?>"  class=" btn btn-success editbtn"><i class="fas fa-edit"></i></a>

      <a href="deletedata.php?id=<?php echo $data['id'];?>" class="btn btn-danger trash m-1"><i class="fas fa-trash" ></i></a>

       <!-- <a href="" data-toggle="modal" data-target="#viewmodal" class=" btn btn-secondary viewbtn" name="viewbtn"><i class="fas fa-eye"></i> </a> -->
                </td>

            <?php  }
            ?>
    </tr>

                    </tbody>
                </table>
                
            </div>
        </div>
    </div>


    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
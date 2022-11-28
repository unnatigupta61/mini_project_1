<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Geeks admin</title>
</head>
<body>
                  <p>Contact Details</p>
                  
                      <div>
                        <?php
                            $conn=mysqli_connect("localhost","root","","miniproject");
                            $sql = "SELECT * FROM contact_us";
                            $result = mysqli_query($conn, $sql);
                           ?>  

                        <table  style="width:100%">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th>Message</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){

                            ?>
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['phone']; ?></td>
                              <td><?php echo $row['subject']; ?></td>
                              <td><?php echo $row['message']; ?></td>
                            </tr>

                            <?php
                            }
                          }
                          else{
                            echo "result not found";
                          }
                            
                            ?>

                          </tbody>
                      </table>
                      </div>
                    
        
</body>

</html>


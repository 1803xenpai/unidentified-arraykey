<?php
require_once('success.php');
$query = "select * from user_admin order by ID";
$result = mysqli_query($conn,$query);

?>
<html>
<head>
    <title>GoodYearToGo (Admin  )</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel="icon" href= "images/loco-icon.png" type="image/x-icon">
    <link rel="stylesheet" href= "frontpage-admin2.css" type="text/css">
</head>
<body>
   
    <div id="top-background">
        <img id="logo-icon" src="images/loco-icon.png">
        <h1 id="logo-text">GoodYear (Admin) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a  href='login-admin.php' id="LOGOUT"><i class="fa-solid fa-right-from-bracket"></i>&nbsp&nbspLog Out</a></h1>

    </div>
    <div id="background">
    <div>
        
        <table>
        <tr>
            <th> &nbspID</th>
            <th><i class="fa-solid fa-user"></i> &nbspName</th>
            <th><i class="fa-solid fa-wrench"></i> &nbspProblem</th>
            <th><i class="fa-solid fa-location-dot"></i> &nbspLocation</th>
            <th><i class="fas fa-phone"></i> &nbspContacts</th>
           
        </tr>
        <tr name="uname">
            <?php
            
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
                <td><?php echo $row['ID'];?></td> 
                <td><?php echo $row['username'];?></td>  
                <td><?php echo $row['Problem'];?></td>  
                <td><?php echo $row['Location'];?></td> 
                <td><?php echo $row['Contacts'];?></td>  
                <td>
                    <a href="deletecomp.php?id=<?php echo $row['ID']; ?>">Remove</a>
                </td>
            </tr>  
            <?php
            }
            ?>
            
            
        
       
        </table>
    </div>
    </div>
    <script>
      
          alert("Click okay if it is your account");
        
        </script>
</body>
</html>
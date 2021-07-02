<html> 
    <head>
    <meta charset ='UTF-8'>
    <meta name="viewport" content="width=<device-width>, initial-scale<1.0>">
    
    <title>SEARCH BY ID</title>
    <style>
        body{
            background-color: azure;
        }
        table,th,td{
            border: 2px solid black;
            width: 500px;
            background-color: aquamarine;
        }
        
    </style>
    </head>

    <body>
        <center>

        <div class="container">
            <form action="" method ="POST">

            <input type="text" name="name" placeholder="Hotel Name" />
            <input type="submit" name="search" value="SEARCH BY NAME">
            </form>

            <table>
                     <tr>       
                                <th>H_No</th>
                                <th>NAME</th>
                                <th>LOCATION</th>
                                <th>AC ROOMS</th>
                                <th>NON_AC ROOMS</th>
                                <th>AC_ROOM_RATE</th>
                                <th>NonAC_ROOM_RATE</th>
                     </tr> <br>

                     <?php
                          $conn= mysqli_connect("localhost","root","");
                          $db = mysqli_select_db($conn,'HOTEL');
                          if($conn){
                              echo"Connected".'<br>';
                          }
                          
                          
                          if(isset($_POST['search'])){
                          
                              $name=$_POST['name'];
                              
                              $sql = "SELECT * FROM `new` WHERE `NAME` LIKE '%$name%'";
                              $result=mysqli_query($conn,$sql);
                            
                              if(mysqli_num_rows($result)>0){
                                
                                
                                while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                          <td> <?php echo $row['HNo']; ?> </td>
                                          <td> <?php echo $row['NAME']; ?> </td>
                                          <td> <?php echo $row['LOCATION']; ?> </td>
                                          <td> <?php echo $row['AC']; ?> </td>
                                          <td> <?php echo $row['NONAC']; ?> </td>
                                          <td> <?php echo $row['RATE_AC']; ?> </td>
                                          <td> <?php echo $row['RATE_NONAC']; ?> </td>

                                </tr>

                                <?php
                                    
                                }
                            } 
                               
                              else{
                                  echo '<br>'." NO RECORDS FOUND";
                              }
                            }
                           
                        
                        ?>  
                          
                </table>
           </div>
        </center>
    </body>

  <br><br><br><br><br>
  <div style=" background-color:hotpink;
                padding: 20px;
                width: 100%;" >
        <h2><a href="users.html">BACK</a></h2>
        </div>
 
</html>
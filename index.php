<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style> 


    </style>

	</head>
<body>


        <?php 
        $db = mysqli_connect('localhost', 'root', '','events'); 
                $display = "SELECT * FROM `event_details`";
                $display_run = mysqli_query($db, $display);
        ?>

        <div class="table-responsive">
          <table class="table tabble-bordered">
            <thead class="thead-dark">
                
                <tr>
                    <th>ID</th>
                     <th>Event name</th>
                      <th>participants</th>
                       <th>start time</th>
                        <th>end time</th>
                        <th>budget</th>
                         <th>venue</th>

                </tr>
            </thead>
              <?php if($display_run) {
              foreach($display_run as $row) { ?>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td><?php echo $row['event_Name'];?></td>
                      <td><?php echo $row['participants'];?></td>
                      <td><?php echo $row['startTime'];?></td>
                      <td><?php echo $row['endTime'];?></td>
                      <td><?php echo $row['budget'];?></td>
                      <td><?php echo $row['venue'];?></td>
                  </tr>
              </tbody>
              <?php 
                } }
                else {
                echo "no event online";
            }
              ?>
          
        
          </table>  

        </div>
<br>
        <h2><marquee>ADD IN THE EVENT DETAILS HERE!</marquee></h2>
        <br>
        

        <form action="sever.php" method="POST">

            <input type="text" name="event_Name" placeholder="Event Name">
             <input type="text" name="participants"  placeholder="participants">
              <input type="text" name="startTime"  placeholder="startTime">
               <input type="text" name="endTime"  placeholder="endTime">
                <input type="text" name="budget"  placeholder="budget">
                <input type="text" name="venue"  placeholder="venue">
                <input type="submit" name="save">
            
        </form>




</body>		
</html>


 

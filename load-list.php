<?php

require 'db_configuration.php';



if(isset($_POST["name"])){
$resultFromCompile = $_POST["name"];
$query = "SELECT * FROM dishes WHERE
ID LIKE '%".$resultFromCompile."%' OR
Name LIKE '%".$resultFromCompile."%' OR
Type LIKE '%".$resultFromCompile."%' OR
State LIKE '%".$resultFromCompile."%' OR
Country LIKE '%".$resultFromCompile."%' OR
Description LIKE '%".$resultFromCompile."%' OR
Recipe_links LIKE '%".$resultFromCompile."%' OR
Video_links LIKE '%".$resultFromCompile."%' OR
Status LIKE '%".$resultFromCompile."%' OR
Notes LIKE '%".$resultFromCompile."%' OR
Image LIKE '%".$resultFromCompile."%'";







//list
$GLOBALS['data'] = mysqli_query($db, $query);

if(isset($_POST["compile"])) {
    //This is where all the compile stuff will go
  }
if(isset($_POST["search"])) {  //when search is clicked this code runs
  
    ?>
  
    
 
  <div id="customerTableView">
  <table class="display" id="ceremoniesTable" style="width:100%">
      <div class="table responsive">
          <thead>
          <tr>
              <th>ID</th>
              <th>Names</th>
              <th>Type</th>
              <th>State</th>
              <th>Country</th>
              <th>Description</th>
              <th>Recipe links</th>
              <th>Video links</th>                
              <th>Status</th>
              <th>Notes</th>
              <th>Image</th>
          </tr>
          </thead>
          <tbody>

          <?php
          while($row = $data->fetch_assoc()) {
              $ID = $row["ID"];
              $Name = $row["Name"];
              $Type = $row["Type"];
              $State = $row["State"];
              $Country = $row["Country"];
              $Description = $row["Description"];
              $Recipe_links = $row["Recipe_links"];
              $Video_links = $row["Video_links"];
              $Status = $row["Status"];
              $Notes = $row["Notes"];
              $Image = $row["Image"];
          ?>

          <tr>
              <td><?php echo $ID; ?></td>
              <td><div><?php echo $Name; ?></div></span> </td>
              <td><div><?php echo $Type; ?></div></span> </td>
              <td><div><?php echo $State; ?></div></span> </td>
              <td><div><?php echo $Country; ?></div></span> </td>
              <td><div><?php echo $Description; ?></div></span> </td>
              <td><div><?php echo $Recipe_links; ?></div></span> </td>
              <td><div><?php echo $Video_links; ?></div></span> </td>
              <td><div><?php echo $Status; ?></div></span> </td>
              <td><div><?php echo $Name; ?></div></span> </td>
              <?php echo '<td><img src="images/'.$row["Image"].'">' ?>
              <p style="page-break-before: always">
          </tr>
              
          <?php     
          }//end while
}//end if statement that checks isset
          ?>

          </tbody>
      </div>
  </table>
</div>

<?php     
}//end of search if statement
?>
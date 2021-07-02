<?php  
 if(isset($_POST["product_id"]))  
 {  
      $output = '';  
      // Databse conectie
    require_once("db.inc.php");
    $dbh = getDbConnection();

      $sql = "SELECT * FROM products WHERE product_id = '".$_POST["product_id"]."'";  
      $result = $dbh->query($sql);
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
           while ($row = $result->fetch(PDO::FETCH_ASSOC)) 
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["product_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>img id</label></td>  
                     <td width="70%">'.$row["product_img_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>id</label></td>  
                     <td width="70%">'.$row["product_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>prijs</label></td>  
                     <td width="70%">'.$row["product_price"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>beschrijving</label></td>  
                     <td width="70%">'.$row["product_beschrijving"].' Year</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
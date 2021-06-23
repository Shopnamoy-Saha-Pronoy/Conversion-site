<html>
<head>
<title>PHP HTML Form</title>
</head>
    <body>
        <p>Page 1 [home]</p>
        <p>Conversion Site</p>
         <a href="page1.php">1.home</a>
         <a href="page2.php">2.Conversion Rate</a>
         <a href="Page3.php">3.History</a>
    
        <form method="post">
         <label for="Converter"><br>Converter:</label><br>
			<select name="Converter" required> 
				<option value="km_to_m" name="km_to_m" >km_to_m</option> 
				<option value="min_to_sec" name="min_to_sec" >min_to_sec</option>
                <option value="kg_to_gm" name="kg_to_gm" >kg_to_gm</option>
                <option value="litter_to_ml" name="litter_to_ml" >litter_to_ml</option>
                <option value="Fit_to_inc" name="Fit_to_inc" >Fit_to_inc</option></select><br>
                
        <label for="value"><br>Value:</label><br>
        <input type="number" name="number" required> <br>
            
             <input type="submit" name="submit" value="Calculate">
            </form>
        <?php
        if(isset($_POST['submit']))
        {
          if($_POST['Converter']='km_to_m')  
          {$v=$_POST['number'];
          $r=$v*1000;
           echo "Result:<input type='text' value='$r'/>";
          }
            
            if($_POST['Converter']='min_to_sec')  
          {$v=$_POST['number'];
          $r=$v*60;
           echo "Result:<input type='text' value='$r'/>";
          }
            if($_POST['Converter']='kg_to_gm')  
          {$v=$_POST['number'];
          $r=$v*1000;
           echo "Result:<input type='text' value='$r'/>";
          }
            if($_POST['Converter']='litter_to_ml')  
          {$v=$_POST['number'];
          $r=$v*1000;
           echo "Result:<input type='text' value='$r'/>";
          }
            if($_POST['Converter']='Fit_to_inc')  
          {$v=$_POST['number'];
          $r=$v*12;
           echo "Result:<input type='text' value='$r'/>";
          }
        }
        ?>        

    </body>
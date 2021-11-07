<?php
        $yourname="";
        $err_yourname="";
        $Rday="";
        $Ryear="";
        $Rmonth="";
        $err_Rday="";
        $err_Ryear="";
        $err_Rmonth="";
        $email="";
        $err_email="";
        $num="";
        $err_num="";
        $stad="";
	 $err_stad="";
	  $city="";
	  $err_city="";
		
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(empty($_POST["yourname"])){
                $err_yourname="*Your name Required";
                
            }
            else if(strlen($_POST["yourname"]) <4){
                $err_yourname="*Your name should be at least 4 characters";
                ;
            }
            else{
                $yourname=htmlspecialchars($_POST["yourname"]);
            }
            

            if(empty($_POST["email"])){
               $err_email="*Please enter email";
            }

            else{
                $s=strpos($_POST["email"],"@");
                if($s!=false){
                    $t=strpos($_POST["email"],".", $s+1);
                    if($t!=false){
                        $email=$_POST["email"];
                    }
                    else{
                        $err_email="*Invalid email";
                    }
                }
                else{
                    $err_email="*Invalid email";
                }
            }

            if(empty($_POST["num"]))
          {
             $err_num="Number Required";
             $hasError=true;
          }
           elseif(!is_numeric($_POST["num"]))
          {
             $err_num="*Numaric Value required";
             $hasError=true;
          }
         else
          {
             $num=$_POST["num"];
          }

            if(empty($_POST["stad"]))
		    {
			 $err_stad="Street Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $stad=htmlspecialchars($_POST["stad"]);
		   }
	       if(empty($_POST["city"]))
		   {
			 $err_city="City Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $city=htmlspecialchars($_POST["city"]);
		   }



            if(($_POST["day"])=="Day"){
				$err_Rday="*Please select Day";
			}
            else{
                $Rday=$_POST["day"];
            }

            if(($_POST["month"])=="Month"){
				$err_Rmonth="*Please select Month";
			}
            else{
                $Rmonth=$_POST["month"];
            }

            if(($_POST["year"])=="Year"){
				$err_Ryear="*Please select Year";
			}
            else{
                $Ryear=$_POST["year"];
            }
			 

           
        }
    ?>


<html>
<body>

    <fieldset>
        <legend align="center"><h1> Registration </h1></legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td><Span>Name</Span></td>
                    <td>:<input type="text" placeholder="Your Name" value=" <?php echo $yourname; ?> " name="yourname"> 
                    <span><?php echo $err_yourname; ?></span></td>
                </tr>
			
				  <tr>
					        <td><span> Address:</span></td>
					        <td>:<input type="text" name="stad" value="<?php echo $stad;?>" placeholder="Street Address">
					        <span><?php echo $err_stad;?></span></td>
					
				       </tr>
				 <tr>
					   <td></td>
					   <td> :<input type="text" name="city" placeholder = "City" value="<?php echo $city;?>" placeholder = "City" size="">
                           <span><?php echo $err_city;?></span></td>
				</tr>
                
				<tr>
	                
	  
                
               
                <tr>
                <td><span>Email</span></td>
                    <td>: <input type="text" placeholder="Email" value="<?php echo $email; ?>" name="email"> 
                    <span><?php echo $err_email; ?></span></td>
                </tr>

                <tr>
                          <td><span>PhoneNumber</span></td>
                           <td>:<input type="text" size="" name="num" value="<?php echo $num;?>" placeholder="Phone number">
                             <span><?php echo $err_num;?></span></td>

                            </tr>
                
                <td>Registration Date</td>
						<td>:
							<select name="day" value="<?php echo $day;?>">
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select name="month" value ="<?php echo $bmonth?>">
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
                            <select name="year" value ="<?php echo $byear?>">
								<option>Year</option>
								
								<?php
									for($i=1970;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
                            <span> <?php echo $err_Rday;?> </span>
                            <span> <?php echo $err_Rmonth;?> </span>
                            <span> <?php echo $err_Ryear;?> </span>
						</td>
                </tr>
                
             
                
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="Register"></td>
				</tr>



            </table>
        </form>
        
    </fieldset>
   

</body>
</html
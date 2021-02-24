<html>
    <head></head>
	<body>
	    <?php
		    $uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$gender="";
			$err_gender="";
			$hobbies="";
			$err_hobbies="";
		    $bio="";
			$err_bio="";
			
		    if($_SERVER['REQUEST_METHOD'] == "POST"){
			
			//if(isset($_POST["submit"])){
				if(empty($_POST["uname"])){
					$err_uname="*Username is Required";
				}
				else if(strlen($_POST["uname"]) < 7){
					$err_uname="*Username should be at least 7 characters";
				}
				else{
					$uname=$_POST["uname"];
				}
				
				if(empty($_POST["password"])){
					$err_password="*Password should be at least 8 characters";
				}
				else if(strlen($_POST["password"]) < 8){
					$err_password="*password";
				}
				
				if(isset($_POST["gender"])){
					$err_gender="*Select a Gender";
				}
				else if(isset($gender) && $gender=="Male"){
				    $err_gender=$_POST["gender"];
				}
				
				else if(isset($gender) && $gender=="Female"){
				    $err_gender=$_POST["gender"];
				}
				
				if(empty($_POST["hobbies"])){
					$err_hobbies="*Hobbies is Required";
				}
                else{
					$hobbies=$_POST["hobbies"];
				}
								
				if(empty($_POST["bio"])){
					$err_bio="*Enter some Bio";
				}				
				else{
					$bio=$_POST["bio"];
				}
			}
		?>	
		    
	    <form action="" method="post">
		    <table>
			    <tr>
				   <td rowspan="2"><span>User access</td>
				   <td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname">
				   <span><?php echo $err_uname;?></span></td>
				</tr> 
				<tr>
				   <td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="pass">
				   <span><?php echo $err_password;?></span></td>
				</tr> 
				<tr>
				   <td><span>Gender</td>
				   <td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male
				        <input type="radio" value="<?php echo $gender;?>" name="gender">Female
				   <span><?php echo $err_gender;?></span></td>
				</tr> 
				<tr>
				   <td><span>Hobbies</td>
				   <td>:<input type="checkbox" value="Movies" name="hobbies">Movies
				        <input type="checkbox" value="Music" name="hobbies">Music
						<input type="checkbox" value="Travelling" name="hobbies">Travelling<br>
				   <span><?php echo $err_hobbies;?></span></td>
				</tr> 
				<tr>
				   <td><span>Profession</td>
				   <td>:
				     <select name="profession">
					      <option>Teaching</option>
				          <option>Business</option>
				          <option>Service</option>
		             </select></td>
				</tr> 
				<tr>
				   <td><span>Bio</td>
				   <td>:<textarea value="<?php echo $bio;?>" name="bio"></textarea>
				   <span><?php echo $err_bio;?></span></td>
				</tr> 
				<tr>
				   <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
				</tr> 	 
		    </table>
		 
		</form>
	</body>
</html>	
<!-- For KnowDent-->
<!-- in the div with id "seconddiv" in the user_login page-->
	<?php
			if(@$_GET['r']==1){
				echo '<strong>User successfully registered...Please Sign in to continue shopping</strong>';
				}
			else{
				echo '<strong>Sign in to continue shopping</strong>';
			} 
			?>

<!-- at the end of both the divs in the user login page-->
<?php
		
		if(@$_GET['n']==1){
			echo '<div style="text-align:center; font-size:20px; color:#660066;">
			<strong>User not registered please sign in to continue....</strong>
		</div>';	
		}
		
		if(@$_GET['m']==1){
			echo '<div style="text-align:center; font-size:20px; color:#660066;">
			<strong>Please check your password...</strong>
		</div>';	
		}
		?>
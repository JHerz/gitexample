<?php

class pages{
	function __construct(){
		if (!isset($_REQUEST['pg'])){
			$sign_up = '<a href="/myexample/logins.php?pg=sign_up">Sign up</a>'; 
			$login = '<a href="/myexample/logins.php?pg=login">Log in</a>'; 
			echo $sign_up . '<br>';
			echo $login;
		}else if ($_REQUEST['pg']=='sign_up'){
		$sign_up = '<FORM action="/myexample/logins.php" method="post">
<P>sign up<br>
<LABEL for="username">Username: </LABEL>
<INPUT type="text" name="username" id="username"><BR>
<LABEL for="password">Password: </LABEL>
<INPUT type="text" name ="password" id="password"><BR>
<INPUT type="submit" value="Send"> 
</P>
</FORM>
';
echo $sign_up;		
		




		}
		else if($_REQUEST['pg']=='login'){
		$log_form = '<FORM action="/myexample/logins.php" method="post">
<P>log in<br>
<LABEL for="username">Username: </LABEL>
<INPUT type="text" name="username" id="username"><BR>
<LABEL for="password">Password: </LABEL>
<INPUT type="text" name ="password" id="password"><BR>
<INPUT type="submit" value="Send"> 
</P>
</FORM>
';
echo $log_form;		

        }
	}
}
$firstpage = new pages;
?>

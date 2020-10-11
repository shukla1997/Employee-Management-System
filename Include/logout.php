<?php
include('includes/session.php');
unset($_SESSION['admin']);
// session_destroy();
redirect('index.php');
/*function redirect($page)
{
    echo '<script type="text/javascript">
		window.location = "' . $page . '";
	</script>';
}*/
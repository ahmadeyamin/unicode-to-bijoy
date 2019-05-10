<?php 

include_once __DIR__.'/U2B.php';

use Eyamin\U2B as U2B;

if (isset($_POST['unicode'])) {
	$unicode = '';
	$unicode = $_POST['unicode'];
	if (!empty($unicode)) {
		echo U2B::convert($unicode);
	}else{
		echo "Lvwj";
	}
}else{

}
?>



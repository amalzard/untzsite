<?php
if (isset($_POST['action'])) {
	killStream();
}

function killStream() {
exec("curl http://untz.xen.prgmr.com:80/control/droppublisher");
echo "Stream has been killed";
}
?>


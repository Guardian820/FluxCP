<?php 
/*
FluxCP Vote For Points
Developed By: JayPee Mateo
Email: mandark022@yahoo.com
*/

$vp = Flux::config('FluxTables.Sites'); 

$site_id = $params->get('sid');
$sql = "SELECT banner,banner_file_type FROM {$server->loginDatabase}.$vp WHERE site_id=?";
$sth = $server->connection->getStatement($sql);
$sth->execute(array($site_id));
$vp = $sth->fetch();

header("Content-Type: ".$vp->banner_file_type);
echo $vp->banner;
exit;
?>
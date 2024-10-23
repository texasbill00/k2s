<?php

	$pattern = '/(?<host>k2s\.cc|keep2share\.cc|keep2s\.cc|fileboom\.me|fboom\.me|tezfiles\.com?)\/file\/(?<ufid>[\da-zA-Z\-]+)/i';
	$url = 'https://api.{$host}/v1/files/{$ufid}';
	$phantomcookies = 'https://' . $_SERVER['HTTP_HOST'] . '/phantomcookies/index.php';

?>

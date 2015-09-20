<?php
$port = 9999;

// ソケット作成し待受
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_bind($sock, '127.0.0.1', $port);
socket_listen($sock);
echo 'port:'. $port. '待受中';

// クライアントからのメッセージを受信
while (true) {
	$clientsock = socket_accept($sock);

	while (true) {
		$buf = socket_read($clientsock, 1024);
		if ($buf == "") { break; }
		echo $buf;
	}
	socket_close($clientsock);
}

socket_close($clientsock);
socket_close($sock);
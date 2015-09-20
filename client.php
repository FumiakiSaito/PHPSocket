<?php
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_bind($sock, '127.0.0.1');
socket_connect($sock, '127.0.0.1', 9999);

$is_out_help_message = true;
while (true) {

	if ($is_out_help_message) {
		echo "メッセージを入力してください\n";
		$is_out_help_message = false;
	}

	$message = fgets(STDIN, 1024);
	socket_write($sock, $message);
}
	socket_close($sock);
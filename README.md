### Usage

#### Server
```
$ php server.php
```
待ち状態となり、クライアントからのメッセージが表示されていく

#### Client
client.php
```
$ php client.php
メッセージを入力してください
message1
message2
```

telnet
```
$ telnet 127.0.0.1 9999
Trying 127.0.0.1...
Connected to 127.0.0.1.
Escape character is '^]'.
message1
message2
・・

```

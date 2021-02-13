<?php

namespace hpscript\MyPackage;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;

class LogSample{

	public static function write($message){
		$log = new Logger("my-package");
		$log_path = __DIR__. '/../../logs/test.log';
		$handler = new StreamHandler($log_path,Logger::DEBUG);
		$log->pushHandler($handler);
		$rotating_handler = new RotatingFileHandler($log_path, 30, Logger::DEBUG, true);
		$log->pushHandler($rotating_handler);

		return $log->addDebug($message);
	}
}
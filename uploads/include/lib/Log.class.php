<?php
if(!defined('ACCESS')) {exit('Access denied.');}
class Log
{
	private static $_userId = 0;

	private static $_maxFileCount = 5;

	private static $_maxFileSize = 100; //100M

	private static $_logPath = '';

	private static $_logFile = 'application.log';

	protected static function getLogPath()
	{
		return self::$_logPath = ADMIN_BASE_LOG . date('Ymd') ."/";
	}

	protected static function setLogFile($filename)
	{
		self::$_logFile = $filename . '.log';
	}

	protected static function getLogFile()
	{
		return self::$_logFile;
	}

	protected static function getUserId()
	{
		if ( ! empty($_SESSION[UserSession::SESSION_NAME]) ) {
			return self::$_userId = UserSession::getUserId();
		}

		return self::$_userId;
	}

	// 日志处理
	protected static function processLogs($logs, $level)
	{
		$file = self::getLogPath() . self::getLogFile();

		Common::makeDir(dirname($file));

		if ( is_file($file) && (filesize($file) > (self::$_maxFileSize * 1024 * 1024)) )
		{
			self::rotateFiles();
		}

		$message = is_array($logs) ? json_encode($logs) : $logs;

		$userId  = str_pad(self::getUserId(), 5, " ", STR_PAD_BOTH);
		$level   = str_pad($level, 7, " ", STR_PAD_BOTH);
		$content = date('Y-m-d H:i:s O') . " [{$userId}] [{$level}]: {$message}\n";

		$fp = fopen($file, 'a');
		fwrite($fp, $content);
		fclose($fp);
	}


	/**
	 * Rotates log files.
	 */
	protected static function rotateFiles()
	{
		$file = self::getLogPath() . self::getLogFile();

		for ($i = self::$_maxFileCount; $i>0; --$i)
		{
			$rotateFile = $file . '.' . $i;
			if (is_file($rotateFile))
			{
				// suppress errors because it's possible multiple processes enter into this section
				if ($i === self::$_maxFileCount)
				{
					@unlink($rotateFile);
				}
				else
				{
					@rename($rotateFile, $file . '.' . ($i+1));
				}
			}
		}

		if (is_file($file))
		{
			// suppress errors because it's possible multiple processes enter into this section
			@rename($file, $file . '.1'); 
		}
	}

	/**
	 * 写调试日志
	 */
	public static function debug($log, $filename = 'debug')
	{
		self::setLogFile($filename);

		self::processLogs($log, "DEBUG");
	}

	/**
	 * 写一般的日志, 关键点日志
	 */
	public static function info($log, $filename = 'info')
	{
		self::setLogFile($filename);

		self::processLogs($log, "INFO");
	}

	/**
	 * 写警告日志, 写不是程序逻辑期望的结果
	 */
	public static function warning($log, $filename = 'warning')
	{
		self::setLogFile($filename);

		self::processLogs($log, "WARNING");
	}

	/**
	 * 写需回滚日志
	 */
	public static function rollback($log, $filename = 'rollback')
	{
		self::setLogFile($filename);

		self::processLogs($log, "ROLLBACK");
	}

	/**
	 * 写错误日志, 用于逻辑终止的记录
	 */
	public static function error($log, $filename = 'error')
	{
		self::setLogFile($filename);

		self::processLogs($log, "ERROR");
	}

	/**
	 * SQL 日志
	 */
	public static function sql($log = '', $filename = 'sql') {
		
		if (SQL_DEBUG) {

			self::setLogFile($filename);

			if ( is_array($log) ) {
				$log = json_encode($log);
			}

		
			$db = base::__instance();
			$sql = $db->last_query();

			$log = "[ $log ] : $sql";

			self::processLogs($log, "SQL");
		}
	}
}

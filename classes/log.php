<?php
class Log {
  protected $log_path;
  function __construct($log_path)
  {
    $this->log_path = $log_path;
  }
  function message($message)
  {
    $log_file_stream = fopen($this->log_path, 'w+');
    fwrite($log_file_stream, $message);
  }
}

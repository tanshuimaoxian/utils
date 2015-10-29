<?php
namespace console\controllers;
use \utils\crontab\Task;
use \utils\crontab\System;

class WorkerController extends Task
{
    public function actionRun()
  	{
  		while (true) {
  			$msg = date("Y-m-d H:i:s")."\n";
  			$this->log($msg);
  			$this->sleep(10);
  		}
  	}
}
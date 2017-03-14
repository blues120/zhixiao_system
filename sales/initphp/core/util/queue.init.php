<?php
if (!defined('IS_INITPHP')) exit('Access Denied!');
/*********************************************************************************
 * 工具库-队列
***********************************************************************************/
class queueInit {
	
	private static $queue = array(); //存放队列数据
	
	/**
 	 * 队列-设置值
 	 * 使用方法：$this->getUtil('queue')->set('ccccccc');
 	 * @return string   
	 */
	public function set($val) {
		array_unshift(self::$queue, $val);
		return true;
	}
	
	/**
 	 * 队列-从队列中获取一个最早放进队列的值
  	 * 使用方法：$this->getUtil('queue')->get();
 	 * @return string   
	 */
	public function get() {
		return array_pop(self::$queue);
	}
	
	/**
 	 * 队列-队列中总共有多少值
   	 * 使用方法：$this->getUtil('queue')->count();
 	 * @return string   
	 */
	public function count() {
		return count(self::$queue);
	}
	
	/**
 	 * 队列-清空队列数据
     * 使用方法：$this->getUtil('queue')->clear();
 	 * @return string   
	 */
	public function clear() {
		return self::$queue = array();
	}
}
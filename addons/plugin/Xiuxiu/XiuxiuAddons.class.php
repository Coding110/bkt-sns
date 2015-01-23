<?php
/**
 *Xiuxiu
 * @author Stream
 *
 */
class XiuxiuAddons extends NormalAddons{
	protected $version = '3.0';
	protected $author = 'baitian';
	protected $site = 'http://demo.thinksns.com/t3/space/sbphp';
	protected $info = 'Xiuxiu';
	protected $pluginName = 'Xiuxiu';
	protected $sqlfile = '暂无';
	protected $tsVersion = "3.0";
	public function getHooksInfo() {
		$hooks['list'] = array('XiuxiuHooks');
		return $hooks;
	}

	public function start() {
	}
	
	public function install() {
		return true;
	}
	
	 public function uninstall() {
		return true;
	}
	
	 public function adminMenu() {
	}

	
}
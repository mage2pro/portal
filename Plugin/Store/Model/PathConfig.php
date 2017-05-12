<?php
namespace Dfe\Portal\Plugin\Store\Model;
use Dfe\Portal\Router;
use Magento\Store\Model\PathConfig as Sb;
// 2017-05-07
final class PathConfig  {
	/**
	 * 2017-05-07
	 * The purpose of this plugin is to set the frontend home page router automatically,
	 * without need to do it manually by the store's administrator.
	 * @see \Magento\Store\Model\PathConfig::getDefaultPath()
	 * @final
	 * @param Sb $sb
	 * @param string $r
	 * @return string
	 */
	function afterGetDefaultPath(Sb $sb, $r) {return !dfe_portal_cfg_g()->enable() ? $r : Router::FRONT_NAME;}
}



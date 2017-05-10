<?php
namespace Dfe\Cms\Block;
use Magento\Framework\View\Element\Template as _P;
// 2017-05-10
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Nav extends _P {
	/**
	 * 2017-05-10
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\View\Element\Template::getTemplate()
	 * @see \Magento\Payment\Block\Info::$_template
	 * @return string
	 */
	function getTemplate() {return dfe_cms_module_name() . '::block/nav.phtml';}
}
<?php
namespace Dfe\Cms\Block;
// 2017-05-10
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Nav extends \Dfe\Cms\Block {
	/**
	 * 2017-05-10
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\View\Element\Template::getTemplate()
	 * @see \Magento\Payment\Block\Info::$_template
	 * @return string
	 */
	function getTemplate() {return $this->m('block/nav.phtml');}
}
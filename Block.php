<?php
namespace Dfe\Cms;
use Magento\Framework\View\Element\Template as _P;
// 2017-05-05
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Block extends _P {
	/**
	 * 2017-05-05
	 * @override
	 * @see \Magento\Framework\View\Element\Template::getTemplate()
	 * @see \Magento\Payment\Block\Info::$_template
	 * @return string
	 */
	final function getTemplate() {return df_cfg('df_cms/general/content') . '::main.phtml';}
}
<?php
namespace Dfe\Cms;
use Magento\Framework\View\Element\AbstractBlock as _P;
// 2017-05-05
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Block extends _P {
	/**
	 * 2017-05-05
	 * @override
	 * @see _P::_toHtml()
	 * @used-by \Magento\Framework\View\Element\AbstractBlock::toHtml()
	 * @return string
	 */
	final protected function _toHtml() {return 'HELLO, WORLD!';}
}
<?php
namespace Dfe\Cms\Controller\Index;
use Df\Framework\Controller\Result\Json;
// 2017-05-04
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Index extends \Df\Framework\Action {
	/**
	 * 2017-05-04
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\App\ActionInterface::execute()
	 * @return Json
	 */
	function execute() {
		return Json::i('HELLO, WORLD!');
	}
}
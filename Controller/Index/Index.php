<?php
namespace Dfe\Cms\Controller\Index;
use Magento\Framework\View\Result\Page as ResultPage;
// 2017-05-04
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Index extends \Df\Framework\Action {
	/**
	 * 2017-05-04
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\App\ActionInterface::execute()
	 * @return ResultPage
	 */
	function execute() {
		df_page_title(dfe_cms_module('html/title'));
		df_page_config()->setDescription(dfe_cms_module('html/description'));
		return df_page_result('Dfe_Cms::root.phtml', 'dfe_cms');
	}
}
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
	function execute() {return df_page_result('dfe_cms');}
}
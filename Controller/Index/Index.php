<?php
namespace Dfe\Portal\Controller\Index;
use Magento\Framework\View\Result\Page as ResultPage;
# 2017-05-04
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Index extends \Df\Framework\Action {
	/**
	 * 2017-05-04
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\App\ActionInterface::execute()  
	 * @used-by \Magento\Framework\App\Action\Action::dispatch():
	 * 		$result = $this->execute();
	 * https://github.com/magento/magento2/blob/2.2.1/lib/internal/Magento/Framework/App/Action/Action.php#L84-L125
	 * @return ResultPage
	 */
	function execute() {
		df_page_title(dfe_portal_module('html/title'));
		return df_page_result('Dfe_Portal::root.phtml', 'dfe_portal',
			# 2017-05-13
			# I add the layout handle for the current page
			# to be able to set the <title> and other HTL tags through the <handle>.xml
			'dfe_portal_' . str_replace('/', '_', df_trim(df_request_o()->getPathInfo(), '/'))
		);
	}
}
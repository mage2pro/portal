<?php
namespace Dfe\Portal\Block;
# 2017-05-05
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Content extends \Dfe\Portal\Block {
	/**
	 * 2017-05-05
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\View\Element\Template::getTemplate()
	 * @see \Magento\Payment\Block\Info::$_template
	 * @return string
	 */
	function getTemplate() {return $this->m(sprintf('page/%s.phtml',
		df_trim(df_request_o()->getPathInfo(), '/') ?: 'main'
	));}

	/**
	 * 2017-05-07
	 * @override
	 * @see \Magento\Framework\View\Element\AbstractBlock::_prepareLayout()
	 * @used-by \Magento\Framework\View\Element\AbstractBlock::setLayout()
	 */
	final protected function _prepareLayout() {
		if (dfe_portal_cfg_g()->enable()) {
			df_page_config()->addPageAsset('Dfe_Portal::main.css');
			df_page_config()->addPageAsset($this->m('main.css'));
			df_page_config()->addPageAsset(df_asset_third_party('HighlightJs/github.css'));
		}
	}
}
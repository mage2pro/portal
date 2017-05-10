<?php
namespace Dfe\Cms\Block;
use Magento\Framework\View\Element\Template as _P;
// 2017-05-05
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Content extends _P {
	/**
	 * 2017-05-05
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\View\Element\Template::getTemplate()
	 * @see \Magento\Payment\Block\Info::$_template
	 * @return string
	 */
	function getTemplate() {return sprintf('%s::page/%s.phtml',
		dfe_cms_module_name(), df_trim(df_request_o()->getPathInfo(), '/') ?: 'main'
	);}

	/**
	 * 2017-05-07
	 * @override
	 * @see \Magento\Framework\View\Element\AbstractBlock::_prepareLayout()
	 * @used-by \Magento\Framework\View\Element\AbstractBlock::setLayout()
	 */
	protected function _prepareLayout() {
		if (dfe_cms_cfg_g()->enable()) {
			df_page_config()->addPageAsset('Dfe_Cms::main.css');
			df_page_config()->addPageAsset(dfe_cms_module_name() . '::main.css');
			df_page_config()->addPageAsset(df_asset_third_party('HighlightJs/github.css'));
		}
	}
}
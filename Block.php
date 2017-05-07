<?php
namespace Dfe\Cms;
use Magento\Framework\View\Element\Template as _P;
// 2017-05-05
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Block extends _P {
	/**
	 * 2017-05-05
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see \Magento\Framework\View\Element\Template::getTemplate()
	 * @see \Magento\Payment\Block\Info::$_template
	 * @return string
	 */
	function getTemplate() {return dfe_cms_module_name() . '::main.phtml';}

	/**
	 * 2017-05-07
	 * @override
	 * @see \Magento\Framework\View\Element\AbstractBlock::_prepareLayout()
	 * @used-by \Magento\Framework\View\Element\AbstractBlock::setLayout()
	 */
	protected function _prepareLayout() {
		if (dfe_cms_cfg_g()->enable()) {
			df_page_config()->addPageAsset('Dfe_Cms::main.css');
			df_page_config()->addPageAsset(df_asset_third_party('HighlightJs/github.css'));
		}
	}
}
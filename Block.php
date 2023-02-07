<?php
namespace Dfe\Portal;
use Magento\Framework\View\Element\Template as _P;
/**
 * 2017-05-11
 * @see \Dfe\Portal\Block\Content
 * @see \Dfe\Portal\Block\Nav
 */
abstract class Block extends _P {
	/**
	 * 2017-05-11
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 */
	function img(string $file, string $alt):string {return df_tag('img', [
		'alt' => $alt, 'src' => $this->getViewFileUrl($this->m("i/$file"))
	]);}

	/**
	 * 2017-05-11
	 * @used-by img()
	 * @used-by \Dfe\Portal\Block\Content::_prepareLayout()
	 * @used-by \Dfe\Portal\Block\Content::getTemplate()
	 * @used-by \Dfe\Portal\Block\Nav::getTemplate()
	 */
	final protected function m(string $f):string {return df_asset_name($f, dfe_portal_module_name());}
}
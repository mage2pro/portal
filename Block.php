<?php
namespace Dfe\Cms;
use Magento\Framework\View\Element\Template as _P;
/**
 * 2017-05-11
 * @see \Dfe\Cms\Block\Content
 * @see \Dfe\Cms\Block\Nav
 */
abstract class Block extends _P {
	/**
	 * 2017-05-11
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @param string $file
	 * @param string $alt
	 * @return string
	 */
	public function img($file, $alt) {return df_tag('img', [
		'alt' => $alt, 'src' => $this->getViewFileUrl($this->m("i/$file"))
	]);}

	/**
	 * 2017-05-11
	 * @used-by img()
	 * @used-by \Dfe\Cms\Block\Content::_prepareLayout
	 * @used-by \Dfe\Cms\Block\Content::getTemplate
	 * @used-by \Dfe\Cms\Block\Nav::getTemplate()
	 * @param string $file
	 * @return string
	 */
	final protected function m($file) {return dfe_cms_module_name() . "::$file";}
}
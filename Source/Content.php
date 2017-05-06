<?php
namespace Dfe\Cms\Source;
// 2017-05-06
final class Content extends \Df\Config\Source {
	/**
	 * 2017-05-06
	 * @override
	 * @see \Df\Config\Source::map()
	 * @used-by \Df\Config\Source::toOptionArray()
	 * @return array(string => string)
	 */
	protected function map() {return dfe_cms_plugins();}
}



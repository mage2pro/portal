<?php
namespace Dfe\Portal\Source;
# 2017-05-06
final class Content extends \Df\Config\Source {
	/**
	 * 2017-05-06
	 * @override
	 * @see \Df\Config\Source::map()
	 * @used-by \Df\Config\Source::toOptionArray()
	 * @return array(string => string)
	 */
	protected function map():array {return dfe_portal_plugins();}
}
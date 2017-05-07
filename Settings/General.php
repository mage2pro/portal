<?php
namespace Dfe\Cms\Settings;
// 2017-05-06
/** @method static General s() */
final class General extends \Df\Config\Settings {
	/**        
	 * 2017-05-06  
	 * @used-by \Dfe\Cms\Block::getTemplate()
	 * @return string
	 */
	function moduleName() {return $this->v();}
	
	/**
	 * 2017-05-06
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_cms/general';}	
}



<?php
namespace Dfe\Portal\Settings;
// 2017-05-06
/** @method static General s() */
final class General extends \Df\Config\Settings {
	/**        
	 * 2017-05-06  
	 * @used-by \Dfe\Portal\Block\Content::getTemplate()
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
	protected function prefix() {return 'df_portal/general';}
}



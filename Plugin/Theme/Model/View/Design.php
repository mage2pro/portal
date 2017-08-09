<?php
namespace Dfe\Portal\Plugin\Theme\Model\View;
use Magento\Theme\Model\View\Design as Sb;
// 2017-05-06
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Design extends Sb {
	/**
	 * 2017-05-06
	 * @final
	 */
	function __construct() {}

	/**
	 * 2017-05-06                                                                                     
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * The purpose of this plugin is to set our custom design theme as the default Magento theme,
	 * without need to select our design theme manually by the store's administrator.
	 * @see \Magento\Theme\Model\View\Design::getConfigurationDesignTheme()
	 * «How are the default frontend («Luma») and backend design themes set?» https://mage2.pro/t/3897
	 * @param Sb $sb
	 */
	function beforeGetConfigurationDesignTheme(Sb $sb) {
		if (dfe_portal_cfg_g()->enable()) {
			/**
			 * 2017-05-06
			 * We will set our custom design theme here.
			 * The default value is «Magento/luma».
			 * The «_themes» property is not explicitly declared
			 * by the @see \Magento\Theme\Model\View\Design class
			 */
			$sb->{'_themes'}['frontend'] = self::THEME_ID;
		}
	}

	/**
	 * 2017-05-07
	 * @used-by beforeGetConfigurationDesignTheme()
	 * @used-by registration.php
	 */
	const THEME_ID = 'df/portal';
}



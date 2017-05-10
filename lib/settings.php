<?php
use Dfe\Cms\Settings\General;
/**  
 * 2017-05-06
 * @used-by \Dfe\Cms\Plugin\Store\Model\PathConfig::afterGetDefaultPath()
 * @used-by \Dfe\Cms\Plugin\Theme\Model\View\Design::beforeGetConfigurationDesignTheme()
 * @return General
 */
function dfe_cms_cfg_g() {return General::s();}

/**
 * 2017-05-07
 * 2017-05-09
 * It is not used just now.
 * It was used earlier here: https://github.com/mage2pro/cms/blob/0.2.7/Controller/Index/Index.php#L16
 * @param string $k
 * @return string|null|array(string => mixed)
 */
function dfe_cms_module($k) {return dfak(dfcf(function() {return
	dfa_deep(df_package(dfe_cms_module_name()), 'df/cms')
;}), $k);}

/**
 * 2017-05-07
 * @used-by \Dfe\Cms\Block\Content::getTemplate()
 * @return string
 */
function dfe_cms_module_name() {return dfe_cms_cfg_g()->moduleName();}
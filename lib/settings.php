<?php
use Dfe\Portal\Settings\General;
/**  
 * 2017-05-06
 * @used-by \Dfe\Portal\Plugin\Store\Model\PathConfig::afterGetDefaultPath()
 * @used-by \Dfe\Portal\Plugin\Theme\Model\View\Design::aroundGetConfigurationDesignTheme()
 * @return General
 */
function dfe_portal_cfg_g() {return General::s();}

/**
 * 2017-05-07
 * @used-by \Dfe\Portal\Controller\Index\Index::execute()
 * @param string $k
 * @return string|null|array(string => mixed)
 */
function dfe_portal_module($k) {return dfac(function() {return dfa_deep(
	df_package(dfe_portal_module_name()), 'df/portal'
);}, $k);}

/**
 * 2017-05-07
 * @used-by \Dfe\Portal\Block\Content::getTemplate()
 * @return string
 */
function dfe_portal_module_name() {return dfe_portal_cfg_g()->moduleName();}
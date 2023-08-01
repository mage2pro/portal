<?php
use Dfe\Portal\Settings\General;
/**  
 * 2017-05-06
 * @used-by \Dfe\Portal\Plugin\Store\Model\PathConfig::afterGetDefaultPath()
 * @used-by \Dfe\Portal\Plugin\Theme\Model\View\Design::aroundGetConfigurationDesignTheme()
 * @used-by \Dfe\Portal\Router::match()
 */
function dfe_portal_cfg_g():General {return General::s();}

/**
 * 2017-05-07
 * @used-by \Dfe\Portal\Controller\Index\Index::execute()
 * @return string|null|array(string => mixed)
 */
function dfe_portal_module(string $k) {return dfac(function() {return dfa_deep(
	df_package(dfe_portal_module_name()), 'df/portal'
);}, $k);}

/**
 * 2017-05-07
 * @used-by dfe_portal_module()
 * @used-by \Dfe\Portal\Block::m()
 * @used-by \Dfe\Portal\Router::match()
 */
function dfe_portal_module_name():string {return dfe_portal_cfg_g()->moduleName();}
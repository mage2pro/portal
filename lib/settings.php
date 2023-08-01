<?php
use Dfe\Portal\Settings\General as S;
/**
 * 2023-08-01
 * @used-by \Dfe\Portal\Block\Content::_prepareLayout()
 * @used-by \Dfe\Portal\Plugin\Store\Model\PathConfig::afterGetDefaultPath()
 * @used-by \Dfe\Portal\Plugin\Theme\Model\View\Design::aroundGetConfigurationDesignTheme()
 * @used-by \Dfe\Portal\Router::match()
 */
function dfe_portal_enabled(): bool {return S::s()->enable();}

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
function dfe_portal_module_name():string {return S::s()->moduleName();}
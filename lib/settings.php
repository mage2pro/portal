<?php
use Dfe\Cms\Settings\General;
/**  
 * 2017-05-06   
 * @used-by \Dfe\Cms\Block::getTemplate()
 * @used-by \Dfe\Cms\Plugin\Store\Model\PathConfig::afterGetDefaultPath()
 * @used-by \Dfe\Cms\Plugin\Theme\Model\View\Design::beforeGetConfigurationDesignTheme()
 * @return General
 */
function dfe_cms_cfg_g() {return General::s();}
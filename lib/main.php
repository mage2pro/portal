<?php
/**
 * 2017-05-05 It returns an array like [«Dfe_CmsStripe» => «Stripe (0.0.1)»].
 * @used-by \Dfe\Cms\Source\Content::map()
 * @return array(string => string)
 */
function dfe_cms_plugins() {return dfcf(function() {return df_map_kr(function($m, $p) {return [
	$m, $t = dfa_deep($p, 'df/cms/plugin/title')
];}, array_filter(dfe_packages(), function($p) {return dfa_deep($p, 'df/cms');}));});}
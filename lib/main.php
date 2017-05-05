<?php
/**
 * 2017-05-05 It returns an array like [«Dfe_CmsStripe» => «Stripe (0.0.1)»].
 * @return array(string => string)
 */
function dfe_cms_plugins() {return dfcf(function() {return df_map_kr(function($m, $p) {
	/** @var string $t */ $t = dfa_deep($p, 'df/cms/title');
	/** @var string|null $v */
	return [$m, !($v = dfa($p, 'version')) ? $t : "$t ($v)"];
}, array_filter(dfe_packages(), function($p) {return dfa_deep($p, 'df/cms');}));});}
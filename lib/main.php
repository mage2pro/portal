<?php
/**
 * 2017-05-05 It returns an array like [«Dfe_PortalStripe» => «Stripe (0.0.1)»].
 * @used-by \Dfe\Portal\Source\Content::map()
 * @return array(string => string)
 */
function dfe_portal_plugins():array {return dfcf(function() {return df_map_kr(
	function($m, $p) {return [$m, dfa_deep($p, 'df/portal/plugin/title')];}
	,array_filter(dfe_packages(), function($p) {return dfa_deep($p, 'df/portal');})
);});}
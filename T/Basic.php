<?php
namespace Dfe\Cms\T;
// 2017-05-05
final class Basic extends TestCase {
	/** 2017-05-05 */
	function t01() {echo df_dump(dfe_cms_plugins());}

	/** @test 2017-05-10 */
	function t02() {echo df_dump(df_github_repo_version('mage2pro/stripe'));}
}
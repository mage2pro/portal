<?php
namespace Dfe\Portal\Test;
# 2017-05-05
final class Basic extends TestCase {
	/** 2017-05-05 */
	function t01() {print_r(df_dump(dfe_portal_plugins()));}

	/** 2017-05-10 @test */
	function t02() {print_r(df_dump(df_github_repo_version('mage2pro/stripe')));}
}
<?php
use Dfe\Portal\Plugin\Theme\Model\View\Design;
use Magento\Framework\Component\ComponentRegistrar as R;
R::register(R::MODULE, 'Dfe_Portal', __DIR__);
// 2017-04-24
// К сожалению, прямолинейным образом вынести этот код
// в повторноиспользуемую функцию df_lib() не получается:
// в эту точку программы мы попадаем раньше инициализации повторноиспользуемой функции.
// @todo Надо подумать, как это сделать...
/** @var string $base */
$base = dirname(__FILE__);
/** @var string $libDir */
if (is_dir($libDir = "{$base}/lib")) {
	// 2015-02-06
	// array_slice removes «.» and «..».
	// http://php.net/manual/function.scandir.php#107215
	foreach (array_slice(scandir($libDir), 2) as $c) {require_once "{$libDir}/{$c}";}
}
/**
 * 2017-05-07
 * How are the new design themes registered on «bin/magento setup:upgrade»? https://mage2.pro/t/3899
 * The second argument (the theme's name) should match the format: <area>/<vendor>/<name>
 * @see \Magento\Framework\View\Design\Theme\ThemePackage::__construct()
 *		$keyParts = explode(Theme::THEME_PATH_SEPARATOR, $key);
 *		if (count($keyParts) != 3) {
 *			throw new \UnexpectedValueException(
 *			"Theme's key does not correspond to required format: '<area>/<vendor>/<name>'"
 *			);
 *		}
 * https://github.com/magento/magento2/blob/2.1.6/lib/internal/Magento/Framework/View/Design/Theme/ThemePackage.php#L58-L63
 */
R::register(R::THEME, 'frontend/' . Design::THEME_ID, __DIR__ . '/theme');
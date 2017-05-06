<?php
namespace Dfe\Cms;
use Magento\Framework\View\Element\BlockInterface as IBlock;
use Magento\Framework\View\TemplateEngineInterface as ITemplateEngine;
// 2017-05-06
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class TemplateEngine implements ITemplateEngine {
	/**
	 * 2017-05-06
	 * @override
	 * @see ITemplateEngine::render()
	 * @used-by \Magento\Framework\View\Element\Template::fetchView()
	 *		$extension = pathinfo($fileName, PATHINFO_EXTENSION);
	 *		$templateEngine = $this->templateEnginePool->get($extension);
	 *		$html = $templateEngine->render($this->templateContext, $fileName, $this->_viewVars);
	 * https://github.com/magento/magento2/blob/2.1.6/lib/internal/Magento/Framework/View/Element/Template.php#L253-L255
	 * «How is @see \Magento\Framework\View\TemplateEngine\Php::render() implemented and used?»
	 * https://mage2.pro/t/3893
	 * «How are the «*.phtml» templates rendered?» https://mage2.pro/t/3886
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @param IBlock $block
	 * @param string $file The full file path.
	 * @param array(string => mixed) $vars
	 * @return string
	 */
	function render(IBlock $block, $file, array $vars = []) {return file_get_contents($file);}
}


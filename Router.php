<?php
namespace Dfe\Cms;
use Magento\Framework\App\Action\Forward as ActionForward;
use Magento\Framework\App\ActionInterface as IAction;
use Magento\Framework\App\Request\Http as HttpRequest;
use Magento\Framework\App\RequestInterface as IRequest;
use Magento\Framework\App\RouterInterface as IRouter;
// 2017-05-04
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Router implements IRouter {
	/**
	 * 2017-05-04
	 * @final Unable to use the PHP «final» keyword here because of the M2 code generation.
	 * @override
	 * @see IRouter::match()
	 * @used-by \Magento\Framework\App\FrontController::dispatch()
	 *		foreach ($this->_routerList as $router) {
	 *			try {
	 *				$actionInstance = $router->match($request);
	 *				if ($actionInstance) {
	 *					$request->setDispatched(true);
	 *					$this->response->setNoCacheHeaders();
	 *					if ($actionInstance instanceof \Magento\Framework\App\Action\AbstractAction) {
	 *						$result = $actionInstance->dispatch($request);
	 *					}
	 *					else {
	 *						$result = $actionInstance->execute();
	 *					}
	 *					break;
	 *				}
	 *			}
	 *			catch (\Magento\Framework\Exception\NotFoundException $e) {
	 *				$request->initForward();
	 *				$request->setActionName('noroute');
	 *				$request->setDispatched(false);
	 *				break;
	 *			}
	 *		}
	 * https://github.com/magento/magento2/blob/2.1.6/lib/internal/Magento/Framework/App/FrontController.php#L48-L67
	 * @param IRequest|HttpRequest $r
	 * @return IAction|ActionForward|null
	 */
	function match(IRequest $r) {
		/** @var IAction|ActionForward|null $result */
		$result = null;
		/**
		 * 2017-05-04
		 * @uses \Magento\Framework\App\Request\Http::getPathInfo() returns a string like «/about-us/».
		 * @var string $path
		 */
		if ('a-sample-url' === ($path = df_trim($r->getPathInfo(), '/'))) {
			/**
			 * 2017-05-04
			 * Note #1
			 * It passes the control to the @see \Magento\Framework\App\Router\Base
			 * which will setup the standard layout engine.
			 * The built-in CMS module behaves the same way: @see \Magento\Cms\Controller\Router::match()
			 * «How is the CMS frontend router implemented?» https://mage2.pro/t/3879
			 * «How is the base router implemented?» https://mage2.pro/t/3880
			 * Note #2
			 * The @uses \Magento\Framework\App\Request\Http::setModuleName() parameters
			 * should be the same as the specified as the «frontName» attribute value in the routes.xml:
			 *	<router id='standard'>
			 *		<route id='Dfe_Cms' frontName='dfe-cms'>
			 *			<module name='Dfe_Cms'/>
			 *		</route>
			 *	</router>
			 * It will be used by the base router: @see \Magento\Framework\App\Router\Base
			 * Step 1:
			 * @see \Magento\Framework\App\Router\Base::matchAction():
		 	 *	$moduleFrontName = $this->matchModuleFrontName($request, $params['moduleFrontName']);
			 * https://github.com/magento/magento2/blob/2.1.6/lib/internal/Magento/Framework/App/Router/Base.php#L266
			 * Step 2:
			 * @see \Magento\Framework\App\Router\Base::matchModuleFrontName():
			 *	if ($request->getModuleName()) {
			 *		$moduleFrontName = $request->getModuleName();
			 *	}
			 * https://github.com/magento/magento2/blob/2.1.6/lib/internal/Magento/Framework/App/Router/Base.php#L197-L199
			 */
			$r->setModuleName(self::FRONT_NAME);
			$r->setControllerName('index');
			$r->setActionName('index');
			$r->setParam('id', $path);
			$result = df_action_create(ActionForward::class);
		}
		return $result;
	}

	/**
	 * 2017-05-07
	 * @used-by match()
	 * @used-by \Dfe\Cms\Plugin\Store\Model\PathConfig::afterGetDefaultPath()
	 */
	const FRONT_NAME = 'dfe-cms';
}
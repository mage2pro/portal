<?php
namespace Dfe\Cms;
use Magento\Framework\App\ActionInterface as IAction;
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
	 * @param IRequest $r
	 * @return IAction|null
	 */
	function match(IRequest $r) {return null;}
}
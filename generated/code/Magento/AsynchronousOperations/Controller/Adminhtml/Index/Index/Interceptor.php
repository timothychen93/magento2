<?php
namespace Magento\AsynchronousOperations\Controller\Adminhtml\Index\Index;

/**
 * Interceptor class for @see \Magento\AsynchronousOperations\Controller\Adminhtml\Index\Index
 */
class Interceptor extends \Magento\AsynchronousOperations\Controller\Adminhtml\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, $menuId = 'Magento_AsynchronousOperations::system_magento_logging_bulk_operations')
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $menuId);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}

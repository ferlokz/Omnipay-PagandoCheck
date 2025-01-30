<?php
    namespace Cencerro\OmnipayPagandoCheck;

    use Omnipay\Common\AbstractGateway;

    class Gateway extends AbstractGateway
    {
        public function getName()
        {
            return 'Pagando Check';
        }

        public function getDefaultParameters()
        {
            return [
                'apiKey' => '',
                'apiSecret' => '',
            ];
        }

        public function getApiKey()
        {
            return $this->getParameter('apiKey');
        }

        public function setApiKey($value)
        {
            return $this->setParameter('apiKey', $value);
        }

        public function getApiSecret()
        {
            return $this->getParameter('apiSecret');
        }

        public function setApiSecret($value)
        {
            return $this->setParameter('apiSecret', $value);
        }

        public function purchase(array $parameters = [])
        {
            return $this->createRequest('\Cencerro\OmnipayPagandoCheck\Message\PurchaseRequest', $parameters);
        }
    }

?>
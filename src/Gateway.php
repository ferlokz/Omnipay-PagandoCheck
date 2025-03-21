<?php
    namespace Cencerro\OmnipayPagandoCheck;

    use Omnipay\Common\AbstractGateway;
    use Cencerro\OmnipayPagandoCheck\Message\GetTokenRequest;
    use Cencerro\OmnipayPagandoCheck\Message\CreateClientRequest;
    use Cencerro\OmnipayPagandoCheck\Message\AddCardRequest;
    use Cencerro\OmnipayPagandoCheck\Message\CreateOrderRequest;
    use Cencerro\OmnipayPagandoCheck\Message\PayOrderRequest;

    class Gateway extends AbstractGateway {
        public function getName() {
            return 'Pagando Check';
        }

        public function getDefaultParameters() {
            return [
                'testMode' => true,
                'user' => '',
                'password' => '',
                'token' => '',
                'userId' => '',
                'cardId' => '',
                'orderId' => '',
                'agreement' => '',
                'transactionNumber' => '',
                'folio' => '',
                'reference' => '',
                'orderNumber' => '',
            ];
        }

        public function getCurrentParameters() {
            return [
                'testMode' => $this->getTestMode(),
                'user' => $this->getUser(),
                'password' => $this->getPassword(),
                'token' => $this->getToken(),
                'userId' => $this->getUserId(),
                'cardId' => $this->getCardId(),
                'orderId' => $this->getOrderId(),
                'agreement' => $this->getAgreement(),
                'transactionNumber' => $this->getTransactionNumber(),
                'folio' => $this->getFolio(),
                'reference' => $this->getReference(),
                'orderNumber' => $this->getOrderNumber(),
            ];
        }

        public function getTestMode() {
            return $this->getParameter('testMode');
        }

        public function setTestMode($value) {
            return $this->setParameter('testMode', $value);
        }

        public function getUser() {
            return $this->getParameter('user');
        }

        public function setUser($value) {
            return $this->setParameter('user', $value);
        }

        public function getPassword() {
            return $this->getParameter('password');
        }

        public function setPassword($value) {
            return $this->setParameter('password', $value);
        }

        public function getToken() {
            return $this->getParameter('token');
        }

        public function setToken($value) {
            return $this->setParameter('token', $value);
        }

        public function getUserId() {
            return $this->getParameter('userId');
        }

        public function setUserId($value) {
            return $this->setParameter('userId', $value);
        }

        public function getCardId() {
            return $this->getParameter('cardId');
        }

        public function setCardId($value) {
            return $this->setParameter('cardId', $value);
        }

        public function getOrderId() {
            return $this->getParameter('orderId');
        }

        public function setOrderId($value) {
            return $this->setParameter('orderId', $value);
        }

        public function getAgreement() {
            return $this->getParameter('agreement');
        }

        public function setAgreement($value) {
            return $this->setParameter('agreement', $value);
        }

        public function getTransactionNumber() {
            return $this->getParameter('transactionNumber');
        }

        public function setTransactionNumber($value) {
            return $this->setParameter('transactionNumber', $value);
        }

        public function getFolio() {
            return $this->getParameter('folio');
        }

        public function setFolio($value) {
            return $this->setParameter('folio', $value);
        }

        public function getReference() {
            return $this->getParameter('reference');
        }

        public function setReference($value) {
            return $this->setParameter('reference', $value);
        }

        public function getOrderNumber() {
            return $this->getParameter('orderNumber');
        }

        public function setOrderNumber($value) {
            return $this->setParameter('orderNumber', $value);
        }

        public function getAuthorizationToken() {
            return $this->createRequest(GetTokenRequest::class, []);
        }

        public function createClient(array $parameters = []) {
            return $this->createRequest(CreateClientRequest::class, $parameters);
        }

        public function addCard(array $parameters = []) {
            return $this->createRequest(AddCardRequest::class, $parameters);
        }

        public function purchase(array $parameters = []) {
            return $this->createRequest(CreateOrderRequest::class, $parameters);
        }

        public function confirmPurchase(array $parameters = []) {
            return $this->createRequest(PayOrderRequest::class, $parameters);
        }
    }
?>
<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest {

        const API_VERSION = 'v1';

        protected $testEndpoint = 'https://payments.staging.pagandocheck.com';
        protected $liveEndpoint = 'https://api.pagandocheck.com';

        protected function getEndpoint() {
            $base = $this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint;
            return $base . '/' . self::API_VERSION . '/pagando/';
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

        public function getEmail() {
            return $this->getParameter('email');
        }

        public function setEmail($value) {
            return $this->setParameter('email', $value);
        }

        public function getName() {
            return $this->getParameter('name');
        }

        public function setName($value) {
            return $this->setParameter('name', $value);
        }

        public function getLastName() {
            return $this->getParameter('lastName');
        }

        public function setLastName($value) {
            return $this->setParameter('lastName', $value);
        }

        public function getSecondLastName() {
            return $this->getParameter('secondLastName');
        }

        public function setSecondLastName($value) {
            return $this->setParameter('secondLastName', $value);
        }

        public function getPhone() {
            return $this->getParameter('phone');
        }

        public function setPhone($value) {
            return $this->setParameter('phone', $value);
        }

        public function getBirthday() {
            return $this->getParameter('birthday');
        }

        public function setBirthday($value) {
            return $this->setParameter('birthday', $value);
        }

        public function getUserId() {
            return $this->getParameter('userId');
        }

        public function setUserId($value) {
            return $this->setParameter('userId', $value);
        }

        public function getPan() {
            return $this->getParameter('pan');
        }

        public function setPan($value) {
            return $this->setParameter('pan', $value);
        }

        public function getCVV() {
            return $this->getParameter('cvv');
        }

        public function setCVV($value) {
            return $this->setParameter('cvv', $value);
        }

        public function getExpMonth() {
            return $this->getParameter('exp_month');
        }

        public function setExpMonth($value) {
            return $this->setParameter('exp_month', $value);
        }

        public function getExpYear() {
            return $this->getParameter('exp_year');
        }

        public function setExpYear($value) {
            return $this->setParameter('exp_year', $value);
        }

        public function getStreet() {
            return $this->getParameter('street');
        }

        public function setStreet($value) {
            return $this->setParameter('street', $value);
        }

        public function getNoExt() {
            return $this->getParameter('noExt');
        }

        public function setNoExt($value) {
            return $this->setParameter('noExt', $value);
        }

        public function getDistrict() {
            return $this->getParameter('district');
        }

        public function setDistrict($value) {
            return $this->setParameter('district', $value);
        }

        public function getZipCode() {
            return $this->getParameter('zipCode');
        }

        public function setZipCode($value) {
            return $this->setParameter('zipCode', $value);
        }

        public function getCity() {
            return $this->getParameter('city');
        }

        public function setCity($value) {
            return $this->setParameter('city', $value);
        }

        public function getState() {
            return $this->getParameter('state');
        }

        public function setState($value) {
            return $this->setParameter('state', $value);
        }

        public function getCountry() {
            return $this->getParameter('country');
        }

        public function setCountry($value) {
            return $this->setParameter('country', $value);
        }

        public function getCardId() {
            return $this->getParameter('cardId');
        }

        public function setCardId($value) {
            return $this->setParameter('cardId', $value);
        }

        public function getConcept() {
            return $this->getParameter('concept');
        }

        public function setConcept($value) {
            return $this->setParameter('concept', $value);
        }

        public function getAFTToken() {
            return $this->getParameter('aftToken');
        }

        public function setAFTToken($value) {
            return $this->setParameter('aftToken', $value);
        }

        public function getPin() {
            return $this->getParameter('pin');
        }

        public function setPin($value) {
            return $this->setParameter('pin', $value);
        }

        public function getExpediteShipping() {
            return $this->getParameter('expediteShipping');
        }

        public function setExpediteShipping($value) {
            return $this->setParameter('expediteShipping', $value);
        }

        public function getAgreement() {
            return $this->getParameter('agreement');
        }

        public function setAgreement($value) {
            return $this->setParameter('agreement', $value);
        }

        public function getOrderId() {
            return $this->getParameter('orderId');
        }

        public function setOrderId($value) {
            return $this->setParameter('orderId', $value);
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
    }
?>
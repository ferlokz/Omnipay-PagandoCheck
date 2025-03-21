<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class PayOrderResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['folio']);
        }

        public function getCode() {
            return $this->data['code'] ?? null;
        }

        public function getMessage() {
            return $this->data['message'] ?? null;
        }

        public function getTransactionNumber() {
            return $this->data['data']['data']['transactionNumber'] ?? null;
        }

        public function getFolio() {
            return $this->data['data']['data']['folio'] ?? null;
        }

        public function getReference() {
            return $this->data['data']['data']['reference'] ?? null;
        }

        public function getOrderNumber() {
            return $this->data['data']['data']['orderNumber'] ?? null;
        }
    }
?>
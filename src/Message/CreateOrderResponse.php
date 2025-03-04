<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class CreateOrderResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['folio']);
        }

        public function getCode() {
            if (isset($this->data['code'])) {
                return $this->data['code'];
            }
        }

        public function getMessage() {
            if (isset($this->data['message'])) {
                return $this->data['message'];
            }
        }

        public function getFolio() {
            return $this->data['data']['folio'] ?? null;
        }
    }
?>
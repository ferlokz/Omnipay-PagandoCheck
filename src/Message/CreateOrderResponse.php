<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class CreateOrderResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['folio']);
        }

        public function getFolio() {
            return $this->data['data']['folio'] ?? null;
        }
    }
?>
<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class CreateClientResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['userId']);
        }

        public function getUserId() {
            return $this->data['data']['userId'] ?? null;
        }
    }
?>
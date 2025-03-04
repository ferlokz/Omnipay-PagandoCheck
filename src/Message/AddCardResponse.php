<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class AddCardResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['cardId']);
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

        public function getCardId() {
            return $this->data['data']['cardId'] ?? null;
        }
    }
?>
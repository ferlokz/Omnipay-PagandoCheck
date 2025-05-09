<?php
    namespace Ferlokz\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class AddCardResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['cardId']);
        }

        public function getCode() {
            return $this->data['code'] ?? null;
        }

        public function getMessage() {
            return $this->data['message'] ?? null;
        }

        public function getCardId() {
            return $this->data['data']['cardId'] ?? null;
        }
    }
?>
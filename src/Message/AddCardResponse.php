<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class AddCardResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['cardId']);
        }

        public function getCardId() {
            return $this->data['data']['cardId'] ?? null;
        }
    }
?>
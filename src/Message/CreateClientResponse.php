<?php
    namespace Ferlokz\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class CreateClientResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['userId']);
        }

        public function getCode() {
            return $this->data['code'] ?? null;
        }

        public function getMessage() {
            return $this->data['message'] ?? null;
        }

        public function getUserId() {
            return $this->data['data']['userId'] ?? null;
        }
    }
?>
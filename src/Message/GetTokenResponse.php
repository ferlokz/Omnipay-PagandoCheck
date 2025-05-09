<?php
    namespace Ferlokz\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class GetTokenResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['token']);
        }

        public function getCode() {
            return $this->data['code'] ?? null;
        }

        public function getMessage() {
            return $this->data['message'] ?? null;
        }

        public function getAuthorizationToken() {
            return $this->data['data']['token'] ?? null;
        }
    }
?>
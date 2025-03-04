<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class GetTokenResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['token']);
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

        public function getAuthorizationToken() {
            return $this->data['data']['token'] ?? null;
        }
    }
?>
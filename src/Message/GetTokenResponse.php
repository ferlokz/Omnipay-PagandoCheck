<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class GetTokenResponse extends AbstractResponse {
        public function isSuccessful() {
            return isset($this->data['data']['token']);
        }

        public function getAuthorizationToken() {
            return $this->data['data']['token'] ?? null;
        }
    }
?>
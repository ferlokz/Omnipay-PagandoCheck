<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    class GetTokenRequest extends AbstractRequest {
        public function getData() {
            $this->validate('user', 'password');

            return [
                'user' => $this->getUser(),
                'password' => $this->getPassword(),
            ];
        }

        public function sendData($data) {
            $httpResponse = $this->httpClient->request(
                'POST',
                'https://api.pagandocheck.com/v1/pagando/get-token',
                [
                    'Content-Type' => 'application/json'
                ],
                json_encode($data)
            );

            return $this->response = new GetTokenResponse($this, json_decode($httpResponse->getBody()->getContents(), true));
        }
    }
?>
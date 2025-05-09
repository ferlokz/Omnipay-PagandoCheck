<?php
    namespace Ferlokz\OmnipayPagandoCheck\Message;

    class GetTokenRequest extends AbstractRequest {
        public function getData() {
            $this->validate('user', 'password');

            return [
                'user' => $this->getUser(),
                'password' => $this->getPassword(),
            ];
        }

        public function sendData($data) {
            $endpoint = $this->getEndpoint();
            $httpResponse = $this->httpClient->request(
                'POST',
                $endpoint . 'get-token',
                [
                    'Content-Type' => 'application/json'
                ],
                json_encode($data)
            );

            return $this->response = new GetTokenResponse($this, json_decode($httpResponse->getBody()->getContents(), true));
        }
    }
?>
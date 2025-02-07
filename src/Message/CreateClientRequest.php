<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    class CreateClientRequest extends AbstractRequest {
        public function getData() {
            $this->validate('email', 'name', 'lastName', 'phone');

            return [
                'email' => $this->getEmail(),
                'name' => $this->getName(),
                'lastName' => $this->getLastName(),
                'secondLastName' => $this->getSecondLastName(),
                'phone' => $this->getPhone(),
                'birthday' => $this->getBirthday(),
            ];
        }

        public function sendData($data) {            
            $httpResponse = $this->httpClient->request(
                'POST',
                'https://api.pagandocheck.com/v1/pagando/users/user',
                [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'bearer ' . $this->getToken()
                ],
                json_encode($data)
            );

            return $this->response = new CreateClientResponse($this, json_decode($httpResponse->getBody()->getContents(), true));
        }
    }
?>
<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    class AddCardRequest extends AbstractRequest {
        public function getData() {
            $this->validate('userId', 'pan', 'cvv', 'exp_month', 'exp_year', 'name');

            return [
                'userId' => $this->getUserId(),
                'pan' => $this->getPan(),
                'cvv' => $this->getCVV(),
                'exp_month' => $this->getExpMonth(),
                'exp_year' => $this->getExpYear(),
                'name' => $this->getName(),
                'street' => $this->getStreet(),
                'noExt' => $this->getNoExt(),
                'district' => $this->getDistrict(),
                'zipCode' => $this->getZipCode(),
                'city' => $this->getCity(),
                'state' => $this->getState(),
                'country' => $this->getCountry(),
            ];
        }

        public function sendData($data) {                
            $httpResponse = $this->httpClient->request(
                'POST',
                'https://api.pagandocheck.com/v1/pagando/payment_methods/add_card',
                [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'bearer ' . $this->getToken()
                ],
                json_encode($data)
            );

            return $this->response = new AddCardResponse($this, json_decode($httpResponse->getBody()->getContents(), true));
        }
    }
?>
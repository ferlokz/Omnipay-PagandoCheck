<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    class PayOrderRequest extends AbstractRequest {
        public function getData() {
            $this->validate('userId', 'amount', 'concept', 'cardId', 'orderId');

            return [
                'userId' => $this->getUserId(),
                'amount' => $this->getAmount(),
                'concept' => $this->getConcept(),
                'cardId' => $this->getCardId(),
                'agreement' => $this->getAgreement(),
                'aftToken' => $this->getAFTToken(),
                'pin' => $this->getPin(),
                'street' => $this->getStreet(),
                'noExt' => $this->getNoExt(),
                'district' => $this->getDistrict(),
                'zipCode' => $this->getZipCode(),
                'city' => $this->getCity(),
                'state' => $this->getState(),
                'country' => $this->getCountry(),
                'expediteShipping' => $this->getExpediteShipping(),
                'items' => $this->getItems(),
                'orderId' => $this->getOrderId(),
            ];
        }

        public function sendData($data) {           
            $endpoint = $this->getEndpoint();     
            $httpResponse = $this->httpClient->request(
                'POST',
                $endpoint . 'orders/pay-order',
                [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'bearer ' . $this->getToken()
                ],
                json_encode($data)
            );

            return $this->response = new PayOrderResponse($this, json_decode($httpResponse->getBody()->getContents(), true));
        }
    }
?>
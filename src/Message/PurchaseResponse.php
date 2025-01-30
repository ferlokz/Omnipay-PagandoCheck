<?php
    namespace Cencerro\OmnipayPagandoCheck\Message;

    use Omnipay\Common\Message\AbstractResponse;

    class PurchaseResponse extends AbstractResponse
    {
        public function isSuccessful()
        {
            return isset($this->data['status']) && $this->data['status'] === 'success';
        }

        public function getTransactionReference()
        {
            return $this->data['transaction_id'];
        }

        public function getMessage()
        {
            return $this->data['message'];
        }
    }
?>
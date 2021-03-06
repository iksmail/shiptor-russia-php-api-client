<?php
namespace ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Request;

use ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Request\GenericRequest as GenericShippingRequest,
    ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Model\Provider as AddProviderResult;

class AddProvider extends GenericShippingRequest{
    protected $name = "addProvider";
    protected function initFields() {
        $this->getFieldsCollection()
                ->String("name")->setRequired()->add()
                ->String("address")->setRequired()->add()
                ->String("phone")->setRequired()->add()
                ->String("comment")->add();
    }
    public function setName($name){
        return $this->setField('name', $name);
    }
    public function setAddress($article){
        return $this->setField('address', $article);
    }
    public function setPhone($article){
        return $this->setField('phone', $article);
    }
    public function setComment($article){
        return $this->setField('comment', $article);
    }
    public function getResponseClassName() {
        return AddProviderResult::class;
    }
}
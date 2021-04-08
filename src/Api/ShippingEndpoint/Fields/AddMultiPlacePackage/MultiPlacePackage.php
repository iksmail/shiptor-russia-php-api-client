<?php
namespace ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Fields\AddMultiPlacePackage;

use ShiptorRussiaApiClient\Client\Core\Fields\Custom,
    ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Fields\AddPackage\Product as PackageProduct;

class MultiPlacePackage extends Custom{
    protected function setFields(){
        $this->getFieldsCollection()
            ->String("external_id")->add()
            ->Number("length")->setRequired()->add()
            ->Number("width")->setRequired()->add()
            ->Number("height")->setRequired()->add()
            ->Number("weight")->setRequired()->add()
            ->Number("cod")->setRequired()->add()
            ->Number("declared_cost")->setRequired()->add()
            ->Custom("products",PackageProduct::class)->setRequired()->setMulty()->add()
            ->String("photos")->setMulty()->add();
    }
    public function setExternalId($externalId){
        $this->getFieldsCollection()->get('external_id')->setValue($externalId);
        return $this;
    }
    public function setLength($length){
        $this->getFieldsCollection()->get('length')->setValue($length);
        return $this;
    }
    public function setWidth($width){
        $this->getFieldsCollection()->get('width')->setValue($width);
        return $this;
    }
    public function setHeight($height){
        $this->getFieldsCollection()->get('height')->setValue($height);
        return $this;
    }
    public function setWeight($weight){
        $this->getFieldsCollection()->get('weight')->setValue($weight);
        return $this;
    }
    public function setCod($cod){
        $this->getFieldsCollection()->get('cod')->setValue($cod);
        return $this;
    }
    public function setDeclaredCost($declaredCost){
        $this->getFieldsCollection()->get('declared_cost')->setValue($declaredCost);
        return $this;
    }
    public function newProduct(){
        return $this->getFieldsCollection()->get("products")->_new();
    }
    public function checkSingleValue($value){
        return is_array($value);
    }
    public function convertValue($value) {
        return (array)$value;
    }
}
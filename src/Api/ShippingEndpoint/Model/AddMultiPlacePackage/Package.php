<?php
namespace ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Model\AddMultiPlacePackage;

use ShiptorRussiaApiClient\Client\Api\ShippingEndpoint\Model\AddPackage\Product as PackageProduct;
use ShiptorRussiaApiClient\Client\Core\Collection\ArrayCollection;
use ShiptorRussiaApiClient\Client\Core\Collection\GenericCollection;

class Package extends ArrayCollection{
    protected $products;
    public function init(){
        $this->setProducts();
    }
    protected function setProducts(){
        $this->products = new GenericCollection($this->get("products"), PackageProduct::class);
    }
    public function getId(){
        return $this->get("id");
    }
    public function getCreatedAt(){
        return $this->get("created_at");
    }
    public function getWeight(){
        return $this->get("weight");
    }
    public function getLength(){
        return $this->get("length");
    }
    public function getWidth(){
        return $this->get("width");
    }
    public function getHeight(){
        return $this->get("height");
    }
    public function getCod(){
        return $this->get("cod");
    }
    public function getDeclaredCost(){
        return $this->get("declared_cost");
    }
    public function getProducts(){
        return $this->products;
    }
    public function getPickUp(){
        return $this->get('pick_up');
    }
    public function getTrackingNumber(){
        return $this->get('tracking_number');
    }
}
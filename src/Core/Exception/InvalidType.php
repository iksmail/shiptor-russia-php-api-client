<?php
namespace ShiptorRussiaApiClient\Client\Core\Exception;

use ShiptorRussiaApiClient\Client\Core\Lang\Messages;
/**
 * Class InvalidType
 */
class InvalidType extends \InvalidArgumentException{
    /**
     * InvalidType constructor.
     * @param string $arParams
     */
    public function __construct($arParams){
        parent::__construct(vsprintf(Messages::get('EXC_INVALID_TYPE'), $arParams));
    }
}
<?php

namespace LorenzoG3M\FarmaDatiSoapTables\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataSetResponse StructType
 * @subpackage Structs
 */
class GetDataSetResponse extends AbstractStructBase
{
    /**
     * The GetDataSetResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSet_Output
     */
    public $GetDataSetResult;
    /**
     * Constructor method for GetDataSetResponse
     * @uses GetDataSetResponse::setGetDataSetResult()
     * @param \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSet_Output $getDataSetResult
     */
    public function __construct(\LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSet_Output $getDataSetResult = null)
    {
        $this
            ->setGetDataSetResult($getDataSetResult);
    }
    /**
     * Get GetDataSetResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSet_Output|null
     */
    public function getGetDataSetResult()
    {
        return isset($this->GetDataSetResult) ? $this->GetDataSetResult : null;
    }
    /**
     * Set GetDataSetResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSet_Output $getDataSetResult
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetResponse
     */
    public function setGetDataSetResult(\LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSet_Output $getDataSetResult = null)
    {
        if (is_null($getDataSetResult) || (is_array($getDataSetResult) && empty($getDataSetResult))) {
            unset($this->GetDataSetResult);
        } else {
            $this->GetDataSetResult = $getDataSetResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}

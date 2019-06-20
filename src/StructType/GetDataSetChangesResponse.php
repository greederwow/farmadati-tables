<?php

namespace LorenzoG3M\FarmaDatiSoapTables\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataSetChangesResponse StructType
 * @subpackage Structs
 */
class GetDataSetChangesResponse extends AbstractStructBase
{
    /**
     * The GetDataSetChangesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output
     */
    public $GetDataSetChangesResult;
    /**
     * Constructor method for GetDataSetChangesResponse
     * @uses GetDataSetChangesResponse::setGetDataSetChangesResult()
     * @param \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output $getDataSetChangesResult
     */
    public function __construct(\LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output $getDataSetChangesResult = null)
    {
        $this
            ->setGetDataSetChangesResult($getDataSetChangesResult);
    }
    /**
     * Get GetDataSetChangesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output|null
     */
    public function getGetDataSetChangesResult()
    {
        return isset($this->GetDataSetChangesResult) ? $this->GetDataSetChangesResult : null;
    }
    /**
     * Set GetDataSetChangesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output $getDataSetChangesResult
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChangesResponse
     */
    public function setGetDataSetChangesResult(\LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output $getDataSetChangesResult = null)
    {
        if (is_null($getDataSetChangesResult) || (is_array($getDataSetChangesResult) && empty($getDataSetChangesResult))) {
            unset($this->GetDataSetChangesResult);
        } else {
            $this->GetDataSetChangesResult = $getDataSetChangesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChangesResponse
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

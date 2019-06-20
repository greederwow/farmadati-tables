<?php

namespace LorenzoG3M\FarmaDatiSoapTables\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetEnabledDataSet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \LorenzoG3M\FarmaDatiSoapTables\StructType\GetEnabledDataSet $parameters
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetEnabledDataSetResponse|bool
     */
    public function GetEnabledDataSet(\LorenzoG3M\FarmaDatiSoapTables\StructType\GetEnabledDataSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetEnabledDataSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSchemaDataSet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \LorenzoG3M\FarmaDatiSoapTables\StructType\GetSchemaDataSet $parameters
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetSchemaDataSetResponse|bool
     */
    public function GetSchemaDataSet(\LorenzoG3M\FarmaDatiSoapTables\StructType\GetSchemaDataSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSchemaDataSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDataSet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSet $parameters
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetResponse|bool
     */
    public function GetDataSet(\LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSet $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDataSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDataSetChanges
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges $parameters
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChangesResponse|bool
     */
    public function GetDataSetChanges(\LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDataSetChanges($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChangesResponse|\LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetResponse|\LorenzoG3M\FarmaDatiSoapTables\StructType\GetEnabledDataSetResponse|\LorenzoG3M\FarmaDatiSoapTables\StructType\GetSchemaDataSetResponse
     */
    public function getResult()
    {
        return parent::getResult();
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

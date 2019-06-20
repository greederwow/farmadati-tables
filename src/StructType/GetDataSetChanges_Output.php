<?php

namespace LorenzoG3M\FarmaDatiSoapTables\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataSetChanges_Output StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDataSetChanges_Output
 * @subpackage Structs
 */
class GetDataSetChanges_Output extends AbstractStructBase
{
    /**
     * The ByteListFile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ByteListFile;
    /**
     * The CodEsito
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodEsito;
    /**
     * The DescEsito
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DescEsito;
    /**
     * The NumRecords
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumRecords;
    /**
     * The OutputValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OutputValue;
    /**
     * Constructor method for GetDataSetChanges_Output
     * @uses GetDataSetChanges_Output::setByteListFile()
     * @uses GetDataSetChanges_Output::setCodEsito()
     * @uses GetDataSetChanges_Output::setDescEsito()
     * @uses GetDataSetChanges_Output::setNumRecords()
     * @uses GetDataSetChanges_Output::setOutputValue()
     * @param string $byteListFile
     * @param string $codEsito
     * @param string $descEsito
     * @param int $numRecords
     * @param string $outputValue
     */
    public function __construct($byteListFile = null, $codEsito = null, $descEsito = null, $numRecords = null, $outputValue = null)
    {
        $this
            ->setByteListFile($byteListFile)
            ->setCodEsito($codEsito)
            ->setDescEsito($descEsito)
            ->setNumRecords($numRecords)
            ->setOutputValue($outputValue);
    }
    /**
     * Get ByteListFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getByteListFile()
    {
        return isset($this->ByteListFile) ? $this->ByteListFile : null;
    }
    /**
     * Set ByteListFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $byteListFile
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output
     */
    public function setByteListFile($byteListFile = null)
    {
        // validation for constraint: string
        if (!is_null($byteListFile) && !is_string($byteListFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($byteListFile, true), gettype($byteListFile)), __LINE__);
        }
        if (is_null($byteListFile) || (is_array($byteListFile) && empty($byteListFile))) {
            unset($this->ByteListFile);
        } else {
            $this->ByteListFile = $byteListFile;
        }
        return $this;
    }
    /**
     * Get CodEsito value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodEsito()
    {
        return isset($this->CodEsito) ? $this->CodEsito : null;
    }
    /**
     * Set CodEsito value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codEsito
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output
     */
    public function setCodEsito($codEsito = null)
    {
        // validation for constraint: string
        if (!is_null($codEsito) && !is_string($codEsito)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEsito, true), gettype($codEsito)), __LINE__);
        }
        if (is_null($codEsito) || (is_array($codEsito) && empty($codEsito))) {
            unset($this->CodEsito);
        } else {
            $this->CodEsito = $codEsito;
        }
        return $this;
    }
    /**
     * Get DescEsito value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescEsito()
    {
        return isset($this->DescEsito) ? $this->DescEsito : null;
    }
    /**
     * Set DescEsito value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $descEsito
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output
     */
    public function setDescEsito($descEsito = null)
    {
        // validation for constraint: string
        if (!is_null($descEsito) && !is_string($descEsito)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descEsito, true), gettype($descEsito)), __LINE__);
        }
        if (is_null($descEsito) || (is_array($descEsito) && empty($descEsito))) {
            unset($this->DescEsito);
        } else {
            $this->DescEsito = $descEsito;
        }
        return $this;
    }
    /**
     * Get NumRecords value
     * @return int|null
     */
    public function getNumRecords()
    {
        return $this->NumRecords;
    }
    /**
     * Set NumRecords value
     * @param int $numRecords
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output
     */
    public function setNumRecords($numRecords = null)
    {
        // validation for constraint: int
        if (!is_null($numRecords) && !(is_int($numRecords) || ctype_digit($numRecords))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numRecords, true), gettype($numRecords)), __LINE__);
        }
        $this->NumRecords = $numRecords;
        return $this;
    }
    /**
     * Get OutputValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutputValue()
    {
        return isset($this->OutputValue) ? $this->OutputValue : null;
    }
    /**
     * Set OutputValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $outputValue
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output
     */
    public function setOutputValue($outputValue = null)
    {
        // validation for constraint: string
        if (!is_null($outputValue) && !is_string($outputValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputValue, true), gettype($outputValue)), __LINE__);
        }
        if (is_null($outputValue) || (is_array($outputValue) && empty($outputValue))) {
            unset($this->OutputValue);
        } else {
            $this->OutputValue = $outputValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges_Output
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

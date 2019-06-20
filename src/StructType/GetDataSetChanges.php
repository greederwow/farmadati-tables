<?php

namespace LorenzoG3M\FarmaDatiSoapTables\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataSetChanges StructType
 * @subpackage Structs
 */
class GetDataSetChanges extends AbstractStructBase
{
    /**
     * The Username
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Username;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The CodiceSetDati
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CodiceSetDati;
    /**
     * The DataIstanza
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DataIstanza;
    /**
     * The Modalita
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Modalita;
    /**
     * The PageN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageN;
    /**
     * The PagingN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PagingN;
    /**
     * Constructor method for GetDataSetChanges
     * @uses GetDataSetChanges::setUsername()
     * @uses GetDataSetChanges::setPassword()
     * @uses GetDataSetChanges::setCodiceSetDati()
     * @uses GetDataSetChanges::setDataIstanza()
     * @uses GetDataSetChanges::setModalita()
     * @uses GetDataSetChanges::setPageN()
     * @uses GetDataSetChanges::setPagingN()
     * @param string $username
     * @param string $password
     * @param string $codiceSetDati
     * @param string $dataIstanza
     * @param string $modalita
     * @param int $pageN
     * @param int $pagingN
     */
    public function __construct($username = null, $password = null, $codiceSetDati = null, $dataIstanza = null, $modalita = null, $pageN = null, $pagingN = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setCodiceSetDati($codiceSetDati)
            ->setDataIstanza($dataIstanza)
            ->setModalita($modalita)
            ->setPageN($pageN)
            ->setPagingN($pagingN);
    }
    /**
     * Get Username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsername()
    {
        return isset($this->Username) ? $this->Username : null;
    }
    /**
     * Set Username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $username
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->Username);
        } else {
            $this->Username = $username;
        }
        return $this;
    }
    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get CodiceSetDati value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodiceSetDati()
    {
        return isset($this->CodiceSetDati) ? $this->CodiceSetDati : null;
    }
    /**
     * Set CodiceSetDati value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codiceSetDati
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges
     */
    public function setCodiceSetDati($codiceSetDati = null)
    {
        // validation for constraint: string
        if (!is_null($codiceSetDati) && !is_string($codiceSetDati)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codiceSetDati, true), gettype($codiceSetDati)), __LINE__);
        }
        if (is_null($codiceSetDati) || (is_array($codiceSetDati) && empty($codiceSetDati))) {
            unset($this->CodiceSetDati);
        } else {
            $this->CodiceSetDati = $codiceSetDati;
        }
        return $this;
    }
    /**
     * Get DataIstanza value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDataIstanza()
    {
        return isset($this->DataIstanza) ? $this->DataIstanza : null;
    }
    /**
     * Set DataIstanza value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dataIstanza
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges
     */
    public function setDataIstanza($dataIstanza = null)
    {
        // validation for constraint: string
        if (!is_null($dataIstanza) && !is_string($dataIstanza)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataIstanza, true), gettype($dataIstanza)), __LINE__);
        }
        if (is_null($dataIstanza) || (is_array($dataIstanza) && empty($dataIstanza))) {
            unset($this->DataIstanza);
        } else {
            $this->DataIstanza = $dataIstanza;
        }
        return $this;
    }
    /**
     * Get Modalita value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModalita()
    {
        return isset($this->Modalita) ? $this->Modalita : null;
    }
    /**
     * Set Modalita value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $modalita
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges
     */
    public function setModalita($modalita = null)
    {
        // validation for constraint: string
        if (!is_null($modalita) && !is_string($modalita)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modalita, true), gettype($modalita)), __LINE__);
        }
        if (is_null($modalita) || (is_array($modalita) && empty($modalita))) {
            unset($this->Modalita);
        } else {
            $this->Modalita = $modalita;
        }
        return $this;
    }
    /**
     * Get PageN value
     * @return int|null
     */
    public function getPageN()
    {
        return $this->PageN;
    }
    /**
     * Set PageN value
     * @param int $pageN
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges
     */
    public function setPageN($pageN = null)
    {
        // validation for constraint: int
        if (!is_null($pageN) && !(is_int($pageN) || ctype_digit($pageN))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageN, true), gettype($pageN)), __LINE__);
        }
        $this->PageN = $pageN;
        return $this;
    }
    /**
     * Get PagingN value
     * @return int|null
     */
    public function getPagingN()
    {
        return $this->PagingN;
    }
    /**
     * Set PagingN value
     * @param int $pagingN
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges
     */
    public function setPagingN($pagingN = null)
    {
        // validation for constraint: int
        if (!is_null($pagingN) && !(is_int($pagingN) || ctype_digit($pagingN))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pagingN, true), gettype($pagingN)), __LINE__);
        }
        $this->PagingN = $pagingN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \LorenzoG3M\FarmaDatiSoapTables\StructType\GetDataSetChanges
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

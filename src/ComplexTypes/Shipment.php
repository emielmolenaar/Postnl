<?php namespace DivideBV\Postnl\ComplexTypes;

class Shipment
{

    /**
     * @var ArrayOfAddress $Addresses
     */
    protected $Addresses = null;

    /**
     * @var ArrayOfAmount $Amounts
     */
    protected $Amounts = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $CollectionTimeStampEnd
     */
    protected $CollectionTimeStampEnd = null;

    /**
     * @var string $CollectionTimeStampStart
     */
    protected $CollectionTimeStampStart = null;

    /**
     * @var ArrayOfContact $Contacts
     */
    protected $Contacts = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var string $CostCenter
     */
    protected $CostCenter = null;

    /**
     * @var string $CustomerOrderNumber
     */
    protected $CustomerOrderNumber = null;

    /**
     * @var Customs $Customs
     */
    protected $Customs = null;

    /**
     * @var string $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var string $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var Dimension $Dimension
     */
    protected $Dimension = null;

    /**
     * @var string $DownPartnerBarcode
     */
    protected $DownPartnerBarcode = null;

    /**
     * @var string $DownPartnerID
     */
    protected $DownPartnerID = null;

    /**
     * @var string $DownPartnerLocation
     */
    protected $DownPartnerLocation = null;

    /**
     * @var ArrayOfGroup $Groups
     */
    protected $Groups = null;

    /**
     * @var string $IDExpiration
     */
    protected $IDExpiration = null;

    /**
     * @var string $IDNumber
     */
    protected $IDNumber = null;

    /**
     * @var string $IDType
     */
    protected $IDType = null;

    /**
     * @var string $ProductCodeCollect
     */
    protected $ProductCodeCollect = null;

    /**
     * @var string $ProductCodeDelivery
     */
    protected $ProductCodeDelivery = null;

    /**
     * @var ArrayOfProductOption $ProductOptions
     */
    protected $ProductOptions = null;

    /**
     * @var string $ReceiverDateOfBirth
     */
    protected $ReceiverDateOfBirth = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $ReferenceCollect
     */
    protected $ReferenceCollect = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $ReturnBarcode
     */
    protected $ReturnBarcode = null;

    /**
     * @var string $ReturnReference
     */
    protected $ReturnReference = null;

    /**
     * @param ArrayOfAddress $Addresses
     * @param ArrayOfAmount $Amounts
     * @param string $Barcode
     * @param string $CollectionTimeStampEnd
     * @param string $CollectionTimeStampStart
     * @param ArrayOfContact $Contacts
     * @param string $Content
     * @param string $CostCenter
     * @param string $CustomerOrderNumber
     * @param Customs $Customs
     * @param string $DeliveryAddress
     * @param string $DeliveryDate
     * @param Dimension $Dimension
     * @param string $DownPartnerBarcode
     * @param string $DownPartnerID
     * @param string $DownPartnerLocation
     * @param ArrayOfGroup $Groups
     * @param string $IDExpiration
     * @param string $IDNumber
     * @param string $IDType
     * @param string $ProductCodeCollect
     * @param string $ProductCodeDelivery
     * @param ArrayOfProductOption $ProductOptions
     * @param string $ReceiverDateOfBirth
     * @param string $Reference
     * @param string $ReferenceCollect
     * @param string $Remark
     * @param string $ReturnBarcode
     * @param string $ReturnReference
     */
    public function __construct(
        ArrayOfAddress $Addresses,
        ArrayOfAmount $Amounts,
        $Barcode,
        $CollectionTimeStampEnd,
        $CollectionTimeStampStart,
        ArrayOfContact $Contacts,
        $Content,
        $CostCenter,
        $CustomerOrderNumber,
        Customs $Customs,
        $DeliveryAddress,
        $DeliveryDate,
        Dimension $Dimension,
        $DownPartnerBarcode,
        $DownPartnerID,
        $DownPartnerLocation,
        ArrayOfGroup $Groups,
        $IDExpiration,
        $IDNumber,
        $IDType,
        $ProductCodeCollect,
        $ProductCodeDelivery,
        ArrayOfProductOption $ProductOptions,
        $ReceiverDateOfBirth,
        $Reference,
        $ReferenceCollect,
        $Remark,
        $ReturnBarcode,
        $ReturnReference
    ) {
        $this->setAddresses($Addresses);
        $this->setAmounts($Amounts);
        $this->setBarcode($Barcode);
        $this->setCollectionTimeStampEnd($CollectionTimeStampEnd);
        $this->setCollectionTimeStampStart($CollectionTimeStampStart);
        $this->setContacts($Contacts);
        $this->setContent($Content);
        $this->setCostCenter($CostCenter);
        $this->setCustomerOrderNumber($CustomerOrderNumber);
        $this->setCustoms($Customs);
        $this->setDeliveryAddress($DeliveryAddress);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDimension($Dimension);
        $this->setDownPartnerBarcode($DownPartnerBarcode);
        $this->setDownPartnerID($DownPartnerID);
        $this->setDownPartnerLocation($DownPartnerLocation);
        $this->setGroups($Groups);
        $this->setIDExpiration($IDExpiration);
        $this->setIDNumber($IDNumber);
        $this->setIDType($IDType);
        $this->setProductCodeCollect($ProductCodeCollect);
        $this->setProductCodeDelivery($ProductCodeDelivery);
        $this->setProductOptions($ProductOptions);
        $this->setReceiverDateOfBirth($ReceiverDateOfBirth);
        $this->setReference($Reference);
        $this->setReferenceCollect($ReferenceCollect);
        $this->setRemark($Remark);
        $this->setReturnBarcode($ReturnBarcode);
        $this->setReturnReference($ReturnReference);
    }

    /**
     * @return ArrayOfAddress
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param ArrayOfAddress $Addresses
     * @return Shipment
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
        return $this;
    }

    /**
     * @return ArrayOfAmount
     */
    public function getAmounts()
    {
        return $this->Amounts;
    }

    /**
     * @param ArrayOfAmount $Amounts
     * @return Shipment
     */
    public function setAmounts($Amounts)
    {
        $this->Amounts = $Amounts;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return Shipment
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionTimeStampEnd()
    {
        return $this->CollectionTimeStampEnd;
    }

    /**
     * @param string $CollectionTimeStampEnd
     * @return Shipment
     */
    public function setCollectionTimeStampEnd($CollectionTimeStampEnd)
    {
        $this->CollectionTimeStampEnd = $CollectionTimeStampEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionTimeStampStart()
    {
        return $this->CollectionTimeStampStart;
    }

    /**
     * @param string $CollectionTimeStampStart
     * @return Shipment
     */
    public function setCollectionTimeStampStart($CollectionTimeStampStart)
    {
        $this->CollectionTimeStampStart = $CollectionTimeStampStart;
        return $this;
    }

    /**
     * @return ArrayOfContact
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param ArrayOfContact $Contacts
     * @return Shipment
     */
    public function setContacts($Contacts)
    {
        $this->Contacts = $Contacts;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param string $Content
     * @return Shipment
     */
    public function setContent($Content)
    {
        $this->Content = $Content;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostCenter()
    {
        return $this->CostCenter;
    }

    /**
     * @param string $CostCenter
     * @return Shipment
     */
    public function setCostCenter($CostCenter)
    {
        $this->CostCenter = $CostCenter;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerOrderNumber()
    {
        return $this->CustomerOrderNumber;
    }

    /**
     * @param string $CustomerOrderNumber
     * @return Shipment
     */
    public function setCustomerOrderNumber($CustomerOrderNumber)
    {
        $this->CustomerOrderNumber = $CustomerOrderNumber;
        return $this;
    }

    /**
     * @return Customs
     */
    public function getCustoms()
    {
        return $this->Customs;
    }

    /**
     * @param Customs $Customs
     * @return Shipment
     */
    public function setCustoms($Customs)
    {
        $this->Customs = $Customs;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param string $DeliveryAddress
     * @return Shipment
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
        $this->DeliveryAddress = $DeliveryAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param string $DeliveryDate
     * @return Shipment
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
        return $this;
    }

    /**
     * @return Dimension
     */
    public function getDimension()
    {
        return $this->Dimension;
    }

    /**
     * @param Dimension $Dimension
     * @return Shipment
     */
    public function setDimension($Dimension)
    {
        $this->Dimension = $Dimension;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerBarcode()
    {
        return $this->DownPartnerBarcode;
    }

    /**
     * @param string $DownPartnerBarcode
     * @return Shipment
     */
    public function setDownPartnerBarcode($DownPartnerBarcode)
    {
        $this->DownPartnerBarcode = $DownPartnerBarcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerID()
    {
        return $this->DownPartnerID;
    }

    /**
     * @param string $DownPartnerID
     * @return Shipment
     */
    public function setDownPartnerID($DownPartnerID)
    {
        $this->DownPartnerID = $DownPartnerID;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerLocation()
    {
        return $this->DownPartnerLocation;
    }

    /**
     * @param string $DownPartnerLocation
     * @return Shipment
     */
    public function setDownPartnerLocation($DownPartnerLocation)
    {
        $this->DownPartnerLocation = $DownPartnerLocation;
        return $this;
    }

    /**
     * @return ArrayOfGroup
     */
    public function getGroups()
    {
        return $this->Groups;
    }

    /**
     * @param ArrayOfGroup $Groups
     * @return Shipment
     */
    public function setGroups($Groups)
    {
        $this->Groups = $Groups;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDExpiration()
    {
        return $this->IDExpiration;
    }

    /**
     * @param string $IDExpiration
     * @return Shipment
     */
    public function setIDExpiration($IDExpiration)
    {
        $this->IDExpiration = $IDExpiration;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDNumber()
    {
        return $this->IDNumber;
    }

    /**
     * @param string $IDNumber
     * @return Shipment
     */
    public function setIDNumber($IDNumber)
    {
        $this->IDNumber = $IDNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDType()
    {
        return $this->IDType;
    }

    /**
     * @param string $IDType
     * @return Shipment
     */
    public function setIDType($IDType)
    {
        $this->IDType = $IDType;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCodeCollect()
    {
        return $this->ProductCodeCollect;
    }

    /**
     * @param string $ProductCodeCollect
     * @return Shipment
     */
    public function setProductCodeCollect($ProductCodeCollect)
    {
        $this->ProductCodeCollect = $ProductCodeCollect;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCodeDelivery()
    {
        return $this->ProductCodeDelivery;
    }

    /**
     * @param string $ProductCodeDelivery
     * @return Shipment
     */
    public function setProductCodeDelivery($ProductCodeDelivery)
    {
        $this->ProductCodeDelivery = $ProductCodeDelivery;
        return $this;
    }

    /**
     * @return ArrayOfProductOption
     */
    public function getProductOptions()
    {
        return $this->ProductOptions;
    }

    /**
     * @param ArrayOfProductOption $ProductOptions
     * @return Shipment
     */
    public function setProductOptions($ProductOptions)
    {
        $this->ProductOptions = $ProductOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiverDateOfBirth()
    {
        return $this->ReceiverDateOfBirth;
    }

    /**
     * @param string $ReceiverDateOfBirth
     * @return Shipment
     */
    public function setReceiverDateOfBirth($ReceiverDateOfBirth)
    {
        $this->ReceiverDateOfBirth = $ReceiverDateOfBirth;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return Shipment
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceCollect()
    {
        return $this->ReferenceCollect;
    }

    /**
     * @param string $ReferenceCollect
     * @return Shipment
     */
    public function setReferenceCollect($ReferenceCollect)
    {
        $this->ReferenceCollect = $ReferenceCollect;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return Shipment
     */
    public function setRemark($Remark)
    {
        $this->Remark = $Remark;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnBarcode()
    {
        return $this->ReturnBarcode;
    }

    /**
     * @param string $ReturnBarcode
     * @return Shipment
     */
    public function setReturnBarcode($ReturnBarcode)
    {
        $this->ReturnBarcode = $ReturnBarcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnReference()
    {
        return $this->ReturnReference;
    }

    /**
     * @param string $ReturnReference
     * @return Shipment
     */
    public function setReturnReference($ReturnReference)
    {
        $this->ReturnReference = $ReturnReference;
        return $this;
    }
}
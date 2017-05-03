<?php

namespace Varspool\JobAdder\V2\Model;

class PlacementBillingModel
{
    /**
     * @var ContactSummaryModel
     */
    protected $contact;
    /**
     * @var CompanyAddressModel
     */
    protected $address;
    /**
     * @var string
     */
    protected $orderRef;
    /**
     * @var string
     */
    protected $invoiceRef;
    /**
     * @var string
     */
    protected $terms;
    /**
     * @var string
     */
    protected $dueDate;

    /**
     * @return ContactSummaryModel
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param ContactSummaryModel $contact
     *
     * @return self
     */
    public function setContact(ContactSummaryModel $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return CompanyAddressModel
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param CompanyAddressModel $address
     *
     * @return self
     */
    public function setAddress(CompanyAddressModel $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderRef()
    {
        return $this->orderRef;
    }

    /**
     * @param string $orderRef
     *
     * @return self
     */
    public function setOrderRef($orderRef = null)
    {
        $this->orderRef = $orderRef;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceRef()
    {
        return $this->invoiceRef;
    }

    /**
     * @param string $invoiceRef
     *
     * @return self
     */
    public function setInvoiceRef($invoiceRef = null)
    {
        $this->invoiceRef = $invoiceRef;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param string $terms
     *
     * @return self
     */
    public function setTerms($terms = null)
    {
        $this->terms = $terms;

        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     *
     * @return self
     */
    public function setDueDate($dueDate = null)
    {
        $this->dueDate = $dueDate;

        return $this;
    }
}

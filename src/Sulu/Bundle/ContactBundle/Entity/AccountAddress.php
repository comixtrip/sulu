<?php

namespace Sulu\Bundle\ContactBundle\Entity;

/**
 * AccountAddress
 */
class AccountAddress
{
    /**
     * @var boolean
     */
    private $main;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Sulu\Bundle\ContactBundle\Entity\Address
     */
    private $address;

    /**
     * @var AccountInterface
     */
    private $account;

    /**
     * Set main
     *
     * @param boolean $main
     * @return AccountAddress
     */
    public function setMain($main)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get main
     *
     * @return boolean
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set address
     *
     * @param \Sulu\Bundle\ContactBundle\Entity\Address $address
     * @return AccountAddress
     */
    public function setAddress(\Sulu\Bundle\ContactBundle\Entity\Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set account
     *
     * @param AccountInterface $account
     * @return AccountAddress
     */
    public function setAccount(AccountInterface $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return AccountInterface
     */
    public function getAccount()
    {
        return $this->account;
    }
}

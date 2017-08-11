<?php

namespace Solidtrust\Payments\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solidtrust
 *
 * @ORM\Table(name="solidtrust_payments", indexes={@ORM\Index(name="created_by_index", columns={"created_by"}), @ORM\Index(name="modified_by_index", columns={"modified_by"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Payments extends \Kazist\Table\BaseTable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="item_id", type="string", length=255, nullable=false)
     */
    protected $item_id;

    /**
     * @var string
     *
     * @ORM\Column(name="merchantAccount", type="string", length=255, nullable=true)
     */
    protected $merchantAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="payerAccount", type="string", length=255, nullable=true)
     */
    protected $payerAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="subscription", type="string", length=255, nullable=true)
     */
    protected $subscription;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=255, nullable=false)
     */
    protected $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="testmode", type="string", length=255, nullable=true)
     */
    protected $testmode;

    /**
     * @var string
     *
     * @ORM\Column(name="subscriber", type="string", length=255, nullable=false)
     */
    protected $subscriber;

    /**
     * @var string
     *
     * @ORM\Column(name="tr_id", type="string", length=255, nullable=false)
     */
    protected $tr_id;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    protected $status;

    /**
     * @var string
     *
     * @ORM\Column(name="user1", type="string", length=255, nullable=false)
     */
    protected $user1;

    /**
     * @var string
     *
     * @ORM\Column(name="user2", type="string", length=255, nullable=true)
     */
    protected $user2;

    /**
     * @var string
     *
     * @ORM\Column(name="user3", type="string", length=255, nullable=true)
     */
    protected $user3;

    /**
     * @var string
     *
     * @ORM\Column(name="user4", type="string", length=255, nullable=true)
     */
    protected $user4;

    /**
     * @var string
     *
     * @ORM\Column(name="user5", type="string", length=255, nullable=true)
     */
    protected $user5;

    /**
     * @var string
     *
     * @ORM\Column(name="user6", type="string", length=255, nullable=true)
     */
    protected $user6;

    /**
     * @var string
     *
     * @ORM\Column(name="user7", type="string", length=255, nullable=true)
     */
    protected $user7;

    /**
     * @var string
     *
     * @ORM\Column(name="user8", type="string", length=255, nullable=true)
     */
    protected $user8;

    /**
     * @var string
     *
     * @ORM\Column(name="user9", type="string", length=255, nullable=true)
     */
    protected $user9;

    /**
     * @var string
     *
     * @ORM\Column(name="user10", type="string", length=255, nullable=true)
     */
    protected $user10;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=false)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=false)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    protected $date_modified;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set item_id
     *
     * @param string $itemId
     * @return Solidtrust
     */
    public function setItemId($itemId) {
        $this->item_id = $itemId;

        return $this;
    }

    /**
     * Get item_id
     *
     * @return string 
     */
    public function getItemId() {
        return $this->item_id;
    }

    /**
     * Set merchantAccount
     *
     * @param string $merchantAccount
     * @return Solidtrust
     */
    public function setMerchantAccount($merchantAccount) {
        $this->merchantAccount = $merchantAccount;

        return $this;
    }

    /**
     * Get merchantAccount
     *
     * @return string 
     */
    public function getMerchantAccount() {
        return $this->merchantAccount;
    }

    /**
     * Set payerAccount
     *
     * @param string $payerAccount
     * @return Solidtrust
     */
    public function setPayerAccount($payerAccount) {
        $this->payerAccount = $payerAccount;

        return $this;
    }

    /**
     * Get payerAccount
     *
     * @return string 
     */
    public function getPayerAccount() {
        return $this->payerAccount;
    }

    /**
     * Set subscription
     *
     * @param string $subscription
     * @return Solidtrust
     */
    public function setSubscription($subscription) {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get subscription
     *
     * @return string 
     */
    public function getSubscription() {
        return $this->subscription;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Solidtrust
     */
    public function setAmount($amount) {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Set testmode
     *
     * @param string $testmode
     * @return Solidtrust
     */
    public function setTestmode($testmode) {
        $this->testmode = $testmode;

        return $this;
    }

    /**
     * Get testmode
     *
     * @return string 
     */
    public function getTestmode() {
        return $this->testmode;
    }

    /**
     * Set subscriber
     *
     * @param string $subscriber
     * @return Solidtrust
     */
    public function setSubscriber($subscriber) {
        $this->subscriber = $subscriber;

        return $this;
    }

    /**
     * Get subscriber
     *
     * @return string 
     */
    public function getSubscriber() {
        return $this->subscriber;
    }

    /**
     * Set tr_id
     *
     * @param string $trId
     * @return Solidtrust
     */
    public function setTrId($trId) {
        $this->tr_id = $trId;

        return $this;
    }

    /**
     * Get tr_id
     *
     * @return string 
     */
    public function getTrId() {
        return $this->tr_id;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Solidtrust
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set user1
     *
     * @param string $user1
     * @return Solidtrust
     */
    public function setUser1($user1) {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get user1
     *
     * @return string 
     */
    public function getUser1() {
        return $this->user1;
    }

    /**
     * Set user2
     *
     * @param string $user2
     * @return Solidtrust
     */
    public function setUser2($user2) {
        $this->user2 = $user2;

        return $this;
    }

    /**
     * Get user2
     *
     * @return string 
     */
    public function getUser2() {
        return $this->user2;
    }

    /**
     * Set user3
     *
     * @param string $user3
     * @return Solidtrust
     */
    public function setUser3($user3) {
        $this->user3 = $user3;

        return $this;
    }

    /**
     * Get user3
     *
     * @return string 
     */
    public function getUser3() {
        return $this->user3;
    }

    /**
     * Set user4
     *
     * @param string $user4
     * @return Solidtrust
     */
    public function setUser4($user4) {
        $this->user4 = $user4;

        return $this;
    }

    /**
     * Get user4
     *
     * @return string 
     */
    public function getUser4() {
        return $this->user4;
    }

    /**
     * Set user5
     *
     * @param string $user5
     * @return Solidtrust
     */
    public function setUser5($user5) {
        $this->user5 = $user5;

        return $this;
    }

    /**
     * Get user5
     *
     * @return string 
     */
    public function getUser5() {
        return $this->user5;
    }

    /**
     * Set user6
     *
     * @param string $user6
     * @return Solidtrust
     */
    public function setUser6($user6) {
        $this->user6 = $user6;

        return $this;
    }

    /**
     * Get user6
     *
     * @return string 
     */
    public function getUser6() {
        return $this->user6;
    }

    /**
     * Set user7
     *
     * @param string $user7
     * @return Solidtrust
     */
    public function setUser7($user7) {
        $this->user7 = $user7;

        return $this;
    }

    /**
     * Get user7
     *
     * @return string 
     */
    public function getUser7() {
        return $this->user7;
    }

    /**
     * Set user8
     *
     * @param string $user8
     * @return Solidtrust
     */
    public function setUser8($user8) {
        $this->user8 = $user8;

        return $this;
    }

    /**
     * Get user8
     *
     * @return string 
     */
    public function getUser8() {
        return $this->user8;
    }

    /**
     * Set user9
     *
     * @param string $user9
     * @return Solidtrust
     */
    public function setUser9($user9) {
        $this->user9 = $user9;

        return $this;
    }

    /**
     * Get user9
     *
     * @return string 
     */
    public function getUser9() {
        return $this->user9;
    }

    /**
     * Set user10
     *
     * @param string $user10
     * @return Solidtrust
     */
    public function setUser10($user10) {
        $this->user10 = $user10;

        return $this;
    }

    /**
     * Get user10
     *
     * @return string 
     */
    public function getUser10() {
        return $this->user10;
    }

    /**
     * Get created_by
     *
     * @return integer 
     */
    public function getCreatedBy() {
        return $this->created_by;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated() {
        return $this->date_created;
    }

    /**
     * Get modified_by
     *
     * @return integer 
     */
    public function getModifiedBy() {
        return $this->modified_by;
    }

    /**
     * Get date_modified
     *
     * @return \DateTime 
     */
    public function getDateModified() {
        return $this->date_modified;
    }

}

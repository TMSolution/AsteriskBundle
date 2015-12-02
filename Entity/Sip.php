<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Pbxsip
 *
 * @ORM\Table(name="pbx.sip")
 * @ORM\Entity
 */
class Sip
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="exten", type="string", length=45, nullable=false)
     */
    private $exten;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=45, nullable=false)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="callingpres", type="string", length=45, nullable=true)
     */
    private $callingPres;

    /**
     * @var string
     *
     * @ORM\Column(name="deny", type="string", length=95, nullable=true)
     */
    private $deny;

    /**
     * @var string
     *
     * @ORM\Column(name="permit", type="string", length=95, nullable=true)
     */
    private $permit;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string", length=80, nullable=true)
     */
    private $secret;

    /**
     * @var string
     *
     * @ORM\Column(name="md5secret", type="string", length=80, nullable=true)
     */
    private $md5secret;

    /**
     * @var string
     *
     * @ORM\Column(name="remotesecret", type="string", length=250, nullable=true)
     */
    private $remoteSecret;

    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=10, nullable=true)
     */
    private $transport;

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=45, nullable=true)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="nat", type="string", length=10, nullable=true)
     */
    private $nat;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="accountcode", type="string", length=20, nullable=true)
     */
    private $accountcode;

    /**
     * @var string
     *
     * @ORM\Column(name="amaflags", type="string", length=13, nullable=true)
     */
    private $amaflags;

    /**
     * @var string
     *
     * @ORM\Column(name="callgroup", type="string", length=10, nullable=true)
     */
    private $callgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="callerid", type="string", length=80, nullable=true)
     */
    private $caller;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultip", type="string", length=15, nullable=true)
     */
    private $defaultip;

    /**
     * @var string
     *
     * @ORM\Column(name="dtmfmode", type="string", length=10, nullable=true)
     */
    private $dtmfmode;

    /**
     * @var string
     *
     * @ORM\Column(name="fromuser", type="string", length=80, nullable=true)
     */
    private $fromuser;

    /**
     * @var string
     *
     * @ORM\Column(name="pbxsipcol2", type="string", length=45, nullable=true)
     */
    private $pbxSipCol2;

    /**
     * @var string
     *
     * @ORM\Column(name="fromdomain", type="string", length=80, nullable=true)
     */
    private $fromdomain;

    /**
     * @var string
     *
     * @ORM\Column(name="insecure", type="string", length=10, nullable=true)
     */
    private $insecure;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=10, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="mailbox", type="string", length=50, nullable=true)
     */
    private $mailbox;

    /**
     * @var string
     *
     * @ORM\Column(name="pbxsipcol6", type="string", length=45, nullable=true)
     */
    private $pbxsipcol6;

    /**
     * @var string
     *
     * @ORM\Column(name="pbxsipcol5", type="string", length=45, nullable=true)
     */
    private $pbxsipcol5;

    /**
     * @var string
     *
     * @ORM\Column(name="pbxsipcol4", type="string", length=45, nullable=true)
     */
    private $pbxsipcol4;

    /**
     * @var string
     *
     * @ORM\Column(name="pbxsipcol3", type="string", length=45, nullable=true)
     */
    private $pbxsipcol3;

    /**
     * @var string
     *
     * @ORM\Column(name="pickupgroup", type="string", length=10, nullable=true)
     */
    private $pickupgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="qualify", type="string", length=10, nullable=true)
     */
    private $qualify;

    /**
     * @var string
     *
     * @ORM\Column(name="regexten", type="string", length=80, nullable=true)
     */
    private $regexten;

    /**
     * @var string
     *
     * @ORM\Column(name="rtptimeout", type="string", length=10, nullable=true)
     */
    private $rtptimeout;

    /**
     * @var string
     *
     * @ORM\Column(name="rtpholdtimeout", type="string", length=10, nullable=true)
     */
    private $rtpholdtimeout;

    /**
     * @var string
     *
     * @ORM\Column(name="setvar", type="string", length=100, nullable=true)
     */
    private $setvar;

    /**
     * @var string
     *
     * @ORM\Column(name="disallow", type="string", length=100, nullable=true)
     */
    private $disallow;

    /**
     * @var string
     *
     * @ORM\Column(name="allow", type="string", length=100, nullable=true)
     */
    private $allow;

    /**
     * @var string
     *
     * @ORM\Column(name="fullcontact", type="string", length=80, nullable=true)
     */
    private $fullcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="ipaddr", type="string", length=15, nullable=true)
     */
    private $ipaddr;

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="integer", nullable=true)
     */
    private $port;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=80, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultuser", type="string", length=80, nullable=true)
     */
    private $defaultuser;

    /**
     * @var string
     *
     * @ORM\Column(name="subscribecontext", type="string", length=80, nullable=true)
     */
    private $subscribecontext;

    /**
     * @var string
     *
     * @ORM\Column(name="directmedia", type="string", length=10, nullable=true)
     */
    private $directmedia;

    /**
     * @var string
     *
     * @ORM\Column(name="trustrpid", type="string", length=10, nullable=true)
     */
    private $trustrp;

    /**
     * @var string
     *
     * @ORM\Column(name="sendrpid", type="string", length=10, nullable=true)
     */
    private $sendrp;

    /**
     * @var string
     *
     * @ORM\Column(name="progressinband", type="string", length=10, nullable=true)
     */
    private $progressinband;

    /**
     * @var string
     *
     * @ORM\Column(name="promiscredir", type="string", length=10, nullable=true)
     */
    private $promiscredir;

    /**
     * @var string
     *
     * @ORM\Column(name="useclientcode", type="string", length=10, nullable=true)
     */
    private $useclientcode;

    /**
     * @var string
     *
     * @ORM\Column(name="callcounter", type="string", length=10, nullable=true)
     */
    private $callcounter;

    /**
     * @var string
     *
     * @ORM\Column(name="busylevel", type="string", length=10, nullable=true)
     */
    private $busylevel;

    /**
     * @var string
     *
     * @ORM\Column(name="allowoverlap", type="string", length=10, nullable=true)
     */
    private $allowoverlap;

    /**
     * @var string
     *
     * @ORM\Column(name="allowsubscribe", type="string", length=10, nullable=true)
     */
    private $allowsubscribe;

    /**
     * @var string
     *
     * @ORM\Column(name="allowtransfer", type="string", length=10, nullable=true)
     */
    private $allowtransfer;

    /**
     * @var string
     *
     * @ORM\Column(name="ignoresdpversion", type="string", length=10, nullable=true)
     */
    private $ignoresdpversion;

    /**
     * @var string
     *
     * @ORM\Column(name="videosupport", type="string", length=10, nullable=true)
     */
    private $videosupport;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxcallbitrate", type="integer", nullable=true)
     */
    private $maxcallbitrate;

    /**
     * @var string
     *
     * @ORM\Column(name="rfc2833compensate", type="string", length=10, nullable=true)
     */
    private $rfc2833compensate;

    /**
     * @var string
     *
     * @ORM\Column(name="sessiontimers", type="string", length=20, nullable=true)
     */
    private $sessiontimers;

    /**
     * @var integer
     *
     * @ORM\Column(name="sessionexpires", type="integer", nullable=true)
     */
    private $sessionexpires;

    /**
     * @var integer
     *
     * @ORM\Column(name="sessionminse", type="integer", nullable=true)
     */
    private $sessionminse;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionrefresher", type="string", length=10, nullable=true)
     */
    private $sessionrefresher;

    /**
     * @var string
     *
     * @ORM\Column(name="t38pt_usertpsource", type="string", length=10, nullable=true)
     */
    private $t38ptUsertpsource;

    /**
     * @var string
     *
     * @ORM\Column(name="outboundproxy", type="string", length=250, nullable=true)
     */
    private $outboundproxy;

    /**
     * @var string
     *
     * @ORM\Column(name="callbackextension", type="string", length=250, nullable=true)
     */
    private $callbackextension;

    /**
     * @var string
     *
     * @ORM\Column(name="registertrying", type="string", length=45, nullable=true)
     */
    private $registertrying;

    /**
     * @var integer
     *
     * @ORM\Column(name="timert1", type="integer", nullable=true)
     */
    private $timert1;

    /**
     * @var integer
     *
     * @ORM\Column(name="timerb", type="integer", nullable=true)
     */
    private $timerb;

    /**
     * @var integer
     *
     * @ORM\Column(name="qualifyfreq", type="integer", nullable=true)
     */
    private $qualifyfreq;

    /**
     * @var string
     *
     * @ORM\Column(name="contactpermit", type="string", length=250, nullable=true)
     */
    private $contactpermit;

    /**
     * @var string
     *
     * @ORM\Column(name="contactdeny", type="string", length=250, nullable=true)
     */
    private $contactdeny;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastms", type="integer", nullable=true)
     */
    private $lastms;

    /**
     * @var string
     *
     * @ORM\Column(name="regserver", type="string", length=100, nullable=true)
     */
    private $regserver;

    /**
     * @var integer
     *
     * @ORM\Column(name="regseconds", type="integer", nullable=true)
     */
    private $regseconds;

    /**
     * @var string
     *
     * @ORM\Column(name="useragent", type="string", length=50, nullable=true)
     */
    private $useragent;

    /*
     * @var CCO\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CCO\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $user;

    /*
     * @var \CCO\CallCenterBundle\Entity\CallCenter
     *
     * @ORM\ManyToOne(targetEntity="CCO\CallCenterBundle\Entity\CallCenter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="callcenter_id", referencedColumnName="id")
     * })
     */
    /**
     * @var integer
     *
     * @ORM\Column(name="callcenter_id", type="integer", nullable=true)
     */
    private $callCenter;




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
     * Set exten
     *
     * @param string $exten
     * @return Pbxsip
     */
    public function setExten($exten)
    {
        $this->exten = $exten;

        return $this;
    }

    /**
     * Get exten
     *
     * @return string 
     */
    public function getExten()
    {
        return $this->exten;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Pbxsip
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return Pbxsip
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set callingpres
     *
     * @param string $callingpres
     * @return Pbxsip
     */
    public function setCallingpres($callingpres)
    {
        $this->callingpres = $callingpres;

        return $this;
    }

    /**
     * Get callingpres
     *
     * @return string 
     */
    public function getCallingpres()
    {
        return $this->callingpres;
    }

    /**
     * Set deny
     *
     * @param string $deny
     * @return Pbxsip
     */
    public function setDeny($deny)
    {
        $this->deny = $deny;

        return $this;
    }

    /**
     * Get deny
     *
     * @return string 
     */
    public function getDeny()
    {
        return $this->deny;
    }

    /**
     * Set permit
     *
     * @param string $permit
     * @return Pbxsip
     */
    public function setPermit($permit)
    {
        $this->permit = $permit;

        return $this;
    }

    /**
     * Get permit
     *
     * @return string 
     */
    public function getPermit()
    {
        return $this->permit;
    }

    /**
     * Set secret
     *
     * @param string $secret
     * @return Pbxsip
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set md5secret
     *
     * @param string $md5secret
     * @return Pbxsip
     */
    public function setMd5secret($md5secret)
    {
        $this->md5secret = $md5secret;

        return $this;
    }

    /**
     * Get md5secret
     *
     * @return string 
     */
    public function getMd5secret()
    {
        return $this->md5secret;
    }

    /**
     * Set remotesecret
     *
     * @param string $remotesecret
     * @return Pbxsip
     */
    public function setRemotesecret($remotesecret)
    {
        $this->remotesecret = $remotesecret;

        return $this;
    }

    /**
     * Get remotesecret
     *
     * @return string 
     */
    public function getRemotesecret()
    {
        return $this->remotesecret;
    }

    /**
     * Set transport
     *
     * @param string $transport
     * @return Pbxsip
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return string 
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set host
     *
     * @param string $host
     * @return Pbxsip
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set nat
     *
     * @param string $nat
     * @return Pbxsip
     */
    public function setNat($nat)
    {
        $this->nat = $nat;

        return $this;
    }

    /**
     * Get nat
     *
     * @return string 
     */
    public function getNat()
    {
        return $this->nat;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Pbxsip
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set accountcode
     *
     * @param string $accountcode
     * @return Pbxsip
     */
    public function setAccountcode($accountcode)
    {
        $this->accountcode = $accountcode;

        return $this;
    }

    /**
     * Get accountcode
     *
     * @return string 
     */
    public function getAccountcode()
    {
        return $this->accountcode;
    }

    /**
     * Set amaflags
     *
     * @param string $amaflags
     * @return Pbxsip
     */
    public function setAmaflags($amaflags)
    {
        $this->amaflags = $amaflags;

        return $this;
    }

    /**
     * Get amaflags
     *
     * @return string 
     */
    public function getAmaflags()
    {
        return $this->amaflags;
    }

    /**
     * Set callgroup
     *
     * @param string $callgroup
     * @return Pbxsip
     */
    public function setCallgroup($callgroup)
    {
        $this->callgroup = $callgroup;

        return $this;
    }

    /**
     * Get callgroup
     *
     * @return string 
     */
    public function getCallgroup()
    {
        return $this->callgroup;
    }

    /**
     * Set caller
     *
     * @param string $caller
     * @return Pbxsip
     */
    public function setCaller($caller)
    {
        $this->caller = $caller;

        return $this;
    }

    /**
     * Get caller
     *
     * @return string 
     */
    public function getCaller()
    {
        return $this->caller;
    }

    /**
     * Set defaultip
     *
     * @param string $defaultip
     * @return Pbxsip
     */
    public function setDefaultip($defaultip)
    {
        $this->defaultip = $defaultip;

        return $this;
    }

    /**
     * Get defaultip
     *
     * @return string 
     */
    public function getDefaultip()
    {
        return $this->defaultip;
    }

    /**
     * Set dtmfmode
     *
     * @param string $dtmfmode
     * @return Pbxsip
     */
    public function setDtmfmode($dtmfmode)
    {
        $this->dtmfmode = $dtmfmode;

        return $this;
    }

    /**
     * Get dtmfmode
     *
     * @return string 
     */
    public function getDtmfmode()
    {
        return $this->dtmfmode;
    }

    /**
     * Set fromuser
     *
     * @param string $fromuser
     * @return Pbxsip
     */
    public function setFromuser($fromuser)
    {
        $this->fromuser = $fromuser;

        return $this;
    }

    /**
     * Get fromuser
     *
     * @return string 
     */
    public function getFromuser()
    {
        return $this->fromuser;
    }

    /**
     * Set pbxsipcol2
     *
     * @param string $pbxsipcol2
     * @return Pbxsip
     */
    public function setPbxsipcol2($pbxsipcol2)
    {
        $this->pbxsipcol2 = $pbxsipcol2;

        return $this;
    }

    /**
     * Get pbxsipcol2
     *
     * @return string 
     */
    public function getPbxsipcol2()
    {
        return $this->pbxsipcol2;
    }

    /**
     * Set fromdomain
     *
     * @param string $fromdomain
     * @return Pbxsip
     */
    public function setFromdomain($fromdomain)
    {
        $this->fromdomain = $fromdomain;

        return $this;
    }

    /**
     * Get fromdomain
     *
     * @return string 
     */
    public function getFromdomain()
    {
        return $this->fromdomain;
    }

    /**
     * Set insecure
     *
     * @param string $insecure
     * @return Pbxsip
     */
    public function setInsecure($insecure)
    {
        $this->insecure = $insecure;

        return $this;
    }

    /**
     * Get insecure
     *
     * @return string 
     */
    public function getInsecure()
    {
        return $this->insecure;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Pbxsip
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set mailbox
     *
     * @param string $mailbox
     * @return Pbxsip
     */
    public function setMailbox($mailbox)
    {
        $this->mailbox = $mailbox;

        return $this;
    }

    /**
     * Get mailbox
     *
     * @return string 
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * Set pbxsipcol6
     *
     * @param string $pbxsipcol6
     * @return Pbxsip
     */
    public function setPbxsipcol6($pbxsipcol6)
    {
        $this->pbxsipcol6 = $pbxsipcol6;

        return $this;
    }

    /**
     * Get pbxsipcol6
     *
     * @return string 
     */
    public function getPbxsipcol6()
    {
        return $this->pbxsipcol6;
    }

    /**
     * Set pbxsipcol5
     *
     * @param string $pbxsipcol5
     * @return Pbxsip
     */
    public function setPbxsipcol5($pbxsipcol5)
    {
        $this->pbxsipcol5 = $pbxsipcol5;

        return $this;
    }

    /**
     * Get pbxsipcol5
     *
     * @return string 
     */
    public function getPbxsipcol5()
    {
        return $this->pbxsipcol5;
    }

    /**
     * Set pbxsipcol4
     *
     * @param string $pbxsipcol4
     * @return Pbxsip
     */
    public function setPbxsipcol4($pbxsipcol4)
    {
        $this->pbxsipcol4 = $pbxsipcol4;

        return $this;
    }

    /**
     * Get pbxsipcol4
     *
     * @return string 
     */
    public function getPbxsipcol4()
    {
        return $this->pbxsipcol4;
    }

    /**
     * Set pbxsipcol3
     *
     * @param string $pbxsipcol3
     * @return Pbxsip
     */
    public function setPbxsipcol3($pbxsipcol3)
    {
        $this->pbxsipcol3 = $pbxsipcol3;

        return $this;
    }

    /**
     * Get pbxsipcol3
     *
     * @return string 
     */
    public function getPbxsipcol3()
    {
        return $this->pbxsipcol3;
    }

    /**
     * Set pickupgroup
     *
     * @param string $pickupgroup
     * @return Pbxsip
     */
    public function setPickupgroup($pickupgroup)
    {
        $this->pickupgroup = $pickupgroup;

        return $this;
    }

    /**
     * Get pickupgroup
     *
     * @return string 
     */
    public function getPickupgroup()
    {
        return $this->pickupgroup;
    }

    /**
     * Set qualify
     *
     * @param string $qualify
     * @return Pbxsip
     */
    public function setQualify($qualify)
    {
        $this->qualify = $qualify;

        return $this;
    }

    /**
     * Get qualify
     *
     * @return string 
     */
    public function getQualify()
    {
        return $this->qualify;
    }

    /**
     * Set regexten
     *
     * @param string $regexten
     * @return Pbxsip
     */
    public function setRegexten($regexten)
    {
        $this->regexten = $regexten;

        return $this;
    }

    /**
     * Get regexten
     *
     * @return string 
     */
    public function getRegexten()
    {
        return $this->regexten;
    }

    /**
     * Set rtptimeout
     *
     * @param string $rtptimeout
     * @return Pbxsip
     */
    public function setRtptimeout($rtptimeout)
    {
        $this->rtptimeout = $rtptimeout;

        return $this;
    }

    /**
     * Get rtptimeout
     *
     * @return string 
     */
    public function getRtptimeout()
    {
        return $this->rtptimeout;
    }

    /**
     * Set rtpholdtimeout
     *
     * @param string $rtpholdtimeout
     * @return Pbxsip
     */
    public function setRtpholdtimeout($rtpholdtimeout)
    {
        $this->rtpholdtimeout = $rtpholdtimeout;

        return $this;
    }

    /**
     * Get rtpholdtimeout
     *
     * @return string 
     */
    public function getRtpholdtimeout()
    {
        return $this->rtpholdtimeout;
    }

    /**
     * Set setvar
     *
     * @param string $setvar
     * @return Pbxsip
     */
    public function setSetvar($setvar)
    {
        $this->setvar = $setvar;

        return $this;
    }

    /**
     * Get setvar
     *
     * @return string 
     */
    public function getSetvar()
    {
        return $this->setvar;
    }

    /**
     * Set disallow
     *
     * @param string $disallow
     * @return Pbxsip
     */
    public function setDisallow($disallow)
    {
        $this->disallow = $disallow;

        return $this;
    }

    /**
     * Get disallow
     *
     * @return string 
     */
    public function getDisallow()
    {
        return $this->disallow;
    }

    /**
     * Set allow
     *
     * @param string $allow
     * @return Pbxsip
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;

        return $this;
    }

    /**
     * Get allow
     *
     * @return string 
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * Set fullcontact
     *
     * @param string $fullcontact
     * @return Pbxsip
     */
    public function setFullcontact($fullcontact)
    {
        $this->fullcontact = $fullcontact;

        return $this;
    }

    /**
     * Get fullcontact
     *
     * @return string 
     */
    public function getFullcontact()
    {
        return $this->fullcontact;
    }

    /**
     * Set ipaddr
     *
     * @param string $ipaddr
     * @return Pbxsip
     */
    public function setIpaddr($ipaddr)
    {
        $this->ipaddr = $ipaddr;

        return $this;
    }

    /**
     * Get ipaddr
     *
     * @return string 
     */
    public function getIpaddr()
    {
        return $this->ipaddr;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return Pbxsip
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Pbxsip
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set defaultuser
     *
     * @param string $defaultuser
     * @return Pbxsip
     */
    public function setDefaultuser($defaultuser)
    {
        $this->defaultuser = $defaultuser;

        return $this;
    }

    /**
     * Get defaultuser
     *
     * @return string 
     */
    public function getDefaultuser()
    {
        return $this->defaultuser;
    }

    /**
     * Set subscribecontext
     *
     * @param string $subscribecontext
     * @return Pbxsip
     */
    public function setSubscribecontext($subscribecontext)
    {
        $this->subscribecontext = $subscribecontext;

        return $this;
    }

    /**
     * Get subscribecontext
     *
     * @return string 
     */
    public function getSubscribecontext()
    {
        return $this->subscribecontext;
    }

    /**
     * Set directmedia
     *
     * @param string $directmedia
     * @return Pbxsip
     */
    public function setDirectmedia($directmedia)
    {
        $this->directmedia = $directmedia;

        return $this;
    }

    /**
     * Get directmedia
     *
     * @return string 
     */
    public function getDirectmedia()
    {
        return $this->directmedia;
    }

    /**
     * Set trustrp
     *
     * @param string $trustrp
     * @return Pbxsip
     */
    public function setTrustrp($trustrp)
    {
        $this->trustrp = $trustrp;

        return $this;
    }

    /**
     * Get trustrp
     *
     * @return string 
     */
    public function getTrustrp()
    {
        return $this->trustrp;
    }

    /**
     * Set sendrp
     *
     * @param string $sendrp
     * @return Pbxsip
     */
    public function setSendrp($sendrp)
    {
        $this->sendrp = $sendrp;

        return $this;
    }

    /**
     * Get sendrp
     *
     * @return string 
     */
    public function getSendrp()
    {
        return $this->sendrp;
    }

    /**
     * Set progressinband
     *
     * @param string $progressinband
     * @return Pbxsip
     */
    public function setProgressinband($progressinband)
    {
        $this->progressinband = $progressinband;

        return $this;
    }

    /**
     * Get progressinband
     *
     * @return string 
     */
    public function getProgressinband()
    {
        return $this->progressinband;
    }

    /**
     * Set promiscredir
     *
     * @param string $promiscredir
     * @return Pbxsip
     */
    public function setPromiscredir($promiscredir)
    {
        $this->promiscredir = $promiscredir;

        return $this;
    }

    /**
     * Get promiscredir
     *
     * @return string 
     */
    public function getPromiscredir()
    {
        return $this->promiscredir;
    }

    /**
     * Set useclientcode
     *
     * @param string $useclientcode
     * @return Pbxsip
     */
    public function setUseclientcode($useclientcode)
    {
        $this->useclientcode = $useclientcode;

        return $this;
    }

    /**
     * Get useclientcode
     *
     * @return string 
     */
    public function getUseclientcode()
    {
        return $this->useclientcode;
    }

    /**
     * Set callcounter
     *
     * @param string $callcounter
     * @return Pbxsip
     */
    public function setCallcounter($callcounter)
    {
        $this->callcounter = $callcounter;

        return $this;
    }

    /**
     * Get callcounter
     *
     * @return string 
     */
    public function getCallcounter()
    {
        return $this->callcounter;
    }

    /**
     * Set busylevel
     *
     * @param string $busylevel
     * @return Pbxsip
     */
    public function setBusylevel($busylevel)
    {
        $this->busylevel = $busylevel;

        return $this;
    }

    /**
     * Get busylevel
     *
     * @return string 
     */
    public function getBusylevel()
    {
        return $this->busylevel;
    }

    /**
     * Set allowoverlap
     *
     * @param string $allowoverlap
     * @return Pbxsip
     */
    public function setAllowoverlap($allowoverlap)
    {
        $this->allowoverlap = $allowoverlap;

        return $this;
    }

    /**
     * Get allowoverlap
     *
     * @return string 
     */
    public function getAllowoverlap()
    {
        return $this->allowoverlap;
    }

    /**
     * Set allowsubscribe
     *
     * @param string $allowsubscribe
     * @return Pbxsip
     */
    public function setAllowsubscribe($allowsubscribe)
    {
        $this->allowsubscribe = $allowsubscribe;

        return $this;
    }

    /**
     * Get allowsubscribe
     *
     * @return string 
     */
    public function getAllowsubscribe()
    {
        return $this->allowsubscribe;
    }

    /**
     * Set allowtransfer
     *
     * @param string $allowtransfer
     * @return Pbxsip
     */
    public function setAllowtransfer($allowtransfer)
    {
        $this->allowtransfer = $allowtransfer;

        return $this;
    }

    /**
     * Get allowtransfer
     *
     * @return string 
     */
    public function getAllowtransfer()
    {
        return $this->allowtransfer;
    }

    /**
     * Set ignoresdpversion
     *
     * @param string $ignoresdpversion
     * @return Pbxsip
     */
    public function setIgnoresdpversion($ignoresdpversion)
    {
        $this->ignoresdpversion = $ignoresdpversion;

        return $this;
    }

    /**
     * Get ignoresdpversion
     *
     * @return string 
     */
    public function getIgnoresdpversion()
    {
        return $this->ignoresdpversion;
    }

    /**
     * Set videosupport
     *
     * @param string $videosupport
     * @return Pbxsip
     */
    public function setVideosupport($videosupport)
    {
        $this->videosupport = $videosupport;

        return $this;
    }

    /**
     * Get videosupport
     *
     * @return string 
     */
    public function getVideosupport()
    {
        return $this->videosupport;
    }

    /**
     * Set maxcallbitrate
     *
     * @param integer $maxcallbitrate
     * @return Pbxsip
     */
    public function setMaxcallbitrate($maxcallbitrate)
    {
        $this->maxcallbitrate = $maxcallbitrate;

        return $this;
    }

    /**
     * Get maxcallbitrate
     *
     * @return integer 
     */
    public function getMaxcallbitrate()
    {
        return $this->maxcallbitrate;
    }

    /**
     * Set rfc2833compensate
     *
     * @param string $rfc2833compensate
     * @return Pbxsip
     */
    public function setRfc2833compensate($rfc2833compensate)
    {
        $this->rfc2833compensate = $rfc2833compensate;

        return $this;
    }

    /**
     * Get rfc2833compensate
     *
     * @return string 
     */
    public function getRfc2833compensate()
    {
        return $this->rfc2833compensate;
    }

    /**
     * Set sessiontimers
     *
     * @param string $sessiontimers
     * @return Pbxsip
     */
    public function setSessiontimers($sessiontimers)
    {
        $this->sessiontimers = $sessiontimers;

        return $this;
    }

    /**
     * Get sessiontimers
     *
     * @return string 
     */
    public function getSessiontimers()
    {
        return $this->sessiontimers;
    }

    /**
     * Set sessionexpires
     *
     * @param integer $sessionexpires
     * @return Pbxsip
     */
    public function setSessionexpires($sessionexpires)
    {
        $this->sessionexpires = $sessionexpires;

        return $this;
    }

    /**
     * Get sessionexpires
     *
     * @return integer 
     */
    public function getSessionexpires()
    {
        return $this->sessionexpires;
    }

    /**
     * Set sessionminse
     *
     * @param integer $sessionminse
     * @return Pbxsip
     */
    public function setSessionminse($sessionminse)
    {
        $this->sessionminse = $sessionminse;

        return $this;
    }

    /**
     * Get sessionminse
     *
     * @return integer 
     */
    public function getSessionminse()
    {
        return $this->sessionminse;
    }

    /**
     * Set sessionrefresher
     *
     * @param string $sessionrefresher
     * @return Pbxsip
     */
    public function setSessionrefresher($sessionrefresher)
    {
        $this->sessionrefresher = $sessionrefresher;

        return $this;
    }

    /**
     * Get sessionrefresher
     *
     * @return string 
     */
    public function getSessionrefresher()
    {
        return $this->sessionrefresher;
    }

    /**
     * Set t38ptUsertpsource
     *
     * @param string $t38ptUsertpsource
     * @return Pbxsip
     */
    public function setT38ptUsertpsource($t38ptUsertpsource)
    {
        $this->t38ptUsertpsource = $t38ptUsertpsource;

        return $this;
    }

    /**
     * Get t38ptUsertpsource
     *
     * @return string 
     */
    public function getT38ptUsertpsource()
    {
        return $this->t38ptUsertpsource;
    }

    /**
     * Set outboundproxy
     *
     * @param string $outboundproxy
     * @return Pbxsip
     */
    public function setOutboundproxy($outboundproxy)
    {
        $this->outboundproxy = $outboundproxy;

        return $this;
    }

    /**
     * Get outboundproxy
     *
     * @return string 
     */
    public function getOutboundproxy()
    {
        return $this->outboundproxy;
    }

    /**
     * Set callbackextension
     *
     * @param string $callbackextension
     * @return Pbxsip
     */
    public function setCallbackextension($callbackextension)
    {
        $this->callbackextension = $callbackextension;

        return $this;
    }

    /**
     * Get callbackextension
     *
     * @return string 
     */
    public function getCallbackextension()
    {
        return $this->callbackextension;
    }

    /**
     * Set registertrying
     *
     * @param string $registertrying
     * @return Pbxsip
     */
    public function setRegistertrying($registertrying)
    {
        $this->registertrying = $registertrying;

        return $this;
    }

    /**
     * Get registertrying
     *
     * @return string 
     */
    public function getRegistertrying()
    {
        return $this->registertrying;
    }

    /**
     * Set timert1
     *
     * @param integer $timert1
     * @return Pbxsip
     */
    public function setTimert1($timert1)
    {
        $this->timert1 = $timert1;

        return $this;
    }

    /**
     * Get timert1
     *
     * @return integer 
     */
    public function getTimert1()
    {
        return $this->timert1;
    }

    /**
     * Set timerb
     *
     * @param integer $timerb
     * @return Pbxsip
     */
    public function setTimerb($timerb)
    {
        $this->timerb = $timerb;

        return $this;
    }

    /**
     * Get timerb
     *
     * @return integer 
     */
    public function getTimerb()
    {
        return $this->timerb;
    }

    /**
     * Set qualifyfreq
     *
     * @param integer $qualifyfreq
     * @return Pbxsip
     */
    public function setQualifyfreq($qualifyfreq)
    {
        $this->qualifyfreq = $qualifyfreq;

        return $this;
    }

    /**
     * Get qualifyfreq
     *
     * @return integer 
     */
    public function getQualifyfreq()
    {
        return $this->qualifyfreq;
    }

    /**
     * Set contactpermit
     *
     * @param string $contactpermit
     * @return Pbxsip
     */
    public function setContactpermit($contactpermit)
    {
        $this->contactpermit = $contactpermit;

        return $this;
    }

    /**
     * Get contactpermit
     *
     * @return string 
     */
    public function getContactpermit()
    {
        return $this->contactpermit;
    }

    /**
     * Set contactdeny
     *
     * @param string $contactdeny
     * @return Pbxsip
     */
    public function setContactdeny($contactdeny)
    {
        $this->contactdeny = $contactdeny;

        return $this;
    }

    /**
     * Get contactdeny
     *
     * @return string 
     */
    public function getContactdeny()
    {
        return $this->contactdeny;
    }

    /**
     * Set lastms
     *
     * @param integer $lastms
     * @return Pbxsip
     */
    public function setLastms($lastms)
    {
        $this->lastms = $lastms;

        return $this;
    }

    /**
     * Get lastms
     *
     * @return integer 
     */
    public function getLastms()
    {
        return $this->lastms;
    }

    /**
     * Set regserver
     *
     * @param string $regserver
     * @return Pbxsip
     */
    public function setRegserver($regserver)
    {
        $this->regserver = $regserver;

        return $this;
    }

    /**
     * Get regserver
     *
     * @return string 
     */
    public function getRegserver()
    {
        return $this->regserver;
    }

    /**
     * Set regseconds
     *
     * @param integer $regseconds
     * @return Pbxsip
     */
    public function setRegseconds($regseconds)
    {
        $this->regseconds = $regseconds;

        return $this;
    }

    /**
     * Get regseconds
     *
     * @return integer 
     */
    public function getRegseconds()
    {
        return $this->regseconds;
    }

    /**
     * Set useragent
     *
     * @param string $useragent
     * @return Pbxsip
     */
    public function setUseragent($useragent)
    {
        $this->useragent = $useragent;

        return $this;
    }

    /**
     * Get useragent
     *
     * @return string 
     */
    public function getUseragent()
    {
        return $this->useragent;
    }

    /**
     * Set user
     *
     * @param integer $user
     * @return Pbxsip
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set callCenter
     *
     * @param \Core\AsteriskBundle\Entity\CallCenter $callCenter
     * @return Pbxsip
     */
    public function setCallcenter($callCenter = null)
    {
        $this->callCenter = $callCenter;

        return $this;
    }

    /**
     * Get callCenter
     *
     * @return \Core\AsteriskBundle\Entity\CallCenter 
     */
    public function getCallcenter()
    {
        return $this->callCenter;
    }

    /**
     * toString method
     */
    public function __toString()
    {
       return (string)$this->getName();
    }





}

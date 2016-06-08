<?php

namespace Core\AsteriskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pbxsip
 *
 * @ORM\Table(name="pbx_pjsip_endpoints")
 * @ORM\Entity
 */
class PjsipEndpoint
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=40, nullable=true)
     */
    private $transport;

    /**
     * @var string
     *
     * @ORM\Column(name="aors", type="string", length=200, nullable=true)
     */
    private $aors;

    /**
     * @var string
     *
     * @ORM\Column(name="auth", type="string", length=40, nullable=true)
     */
    private $auth;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=40, nullable=true)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="disallow", type="string", length=200, nullable=true)
     */
    private $disallow;

    /**
     * @var string
     *
     * @ORM\Column(name="allow", type="string", length=200, nullable=true)
     */
    private $allow;

    /**
     * @var string
     *
     * @ORM\Column(name="direct_media", type="string", length=10, nullable=true)
     */
    private $directMedia;

    /**
     * @var string
     *
     * @ORM\Column(name="connected_line_method", type="string", length=30, nullable=true)
     */
    private $connectedLineMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="direct_media_method", type="string", length=30, nullable=true)
     */
    private $directMediaMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="direct_media_glare_mitigation", type="string", length=30, nullable=true)
     */
    private $directMediaGlareMitigation;

    /**
     * @var string
     *
     * @ORM\Column(name="disable_direct_media_on_nat", type="string", length=10, nullable=true)
     */
    private $disableDirectMediaOnNat;

    /**
     * @var string
     *
     * @ORM\Column(name="dtmf_mode", type="string", length=10, nullable=true)
     */
    private $dtmfMode;

    /**
     * @var string
     *
     * @ORM\Column(name="external_media_address", type="string", length=40, nullable=true)
     */
    private $externalMediaAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="force_rport", type="string", length=10, nullable=true)
     */
    private $forceRport;

    /**
     * @var string
     *
     * @ORM\Column(name="ice_support", type="string", length=10, nullable=true)
     */
    private $iceSupport;

    /**
     * @var string
     *
     * @ORM\Column(name="identify_by", type="string", length=20, nullable=true)
     */
    private $identifyBy;

    /**
     * @var string
     *
     * @ORM\Column(name="mailboxes", type="string", length=40, nullable=true)
     */
    private $mailboxes;

    /**
     * @var string
     *
     * @ORM\Column(name="moh_suggest", type="string", length=40, nullable=true)
     */
    private $mohSuggest;

    /**
     * @var string
     *
     * @ORM\Column(name="outbound_auth", type="string", length=40, nullable=true)
     */
    private $outboundAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="outbound_proxy", type="string", length=40, nullable=true)
     */
    private $outboundProxy;

    /**
     * @var string
     *
     * @ORM\Column(name="rewrite_contact", type="string", length=10, nullable=true)
     */
    private $rewriteContact;

    /**
     * @var string
     *
     * @ORM\Column(name="rtp_ipv6", type="string", length=10, nullable=true)
     */
    private $rtpIpv6;

    /**
     * @var string
     *
     * @ORM\Column(name="rtp_symmetric", type="string", length=10, nullable=true)
     */
    private $rtpSymmetric;

    /**
     * @var string
     *
     * @ORM\Column(name="send_diversion", type="string", length=10, nullable=true)
     */
    private $sendDiversion;

    /**
     * @var string
     *
     * @ORM\Column(name="send_pai", type="string", length=10, nullable=true)
     */
    private $sendPai;

    /**
     * @var string
     *
     * @ORM\Column(name="send_rpid", type="string", length=10, nullable=true)
     */
    private $sendRpid;

    /**
     * @var string
     *
     * @ORM\Column(name="timers_min_se", type="integer", length=11, nullable=true)
     */
    private $timersMinSe;

    /**
     * @var string
     *
     * @ORM\Column(name="timers", type="string", length=10, nullable=true)
     */
    private $timers;

    /**
     * @var string
     *
     * @ORM\Column(name="timers_sess_expires", type="integer", length=11, nullable=true)
     */
    private $timersSessExpires;

    /**
     * @var string
     *
     * @ORM\Column(name="callerid", type="string", length=40, nullable=true)
     */
    private $callerId;

    /**
     * @var string
     *
     * @ORM\Column(name="callerid_privacy", type="string", length=45, nullable=true)
     */
    private $calleridPrivacy;

    /**
     * @var string
     *
     * @ORM\Column(name="callerid_tag", type="string", length=40, nullable=true)
     */
    private $calleridTag;

    /**
     * @var string
     *
     * @ORM\Column(name="100rel", type="string", length=10, nullable=true)
     */
    private $oneHundredRel;

    /**
     * @var string
     *
     * @ORM\Column(name="aggregate_mwi", type="string", length=10, nullable=true)
     */
    private $aggregate_Mwi;

    /**
     * @var string
     *
     * @ORM\Column(name="trust_id_inbound", type="string", length=10, nullable=true)
     */
    private $trustIdInbound;

    /**
     * @var string
     *
     * @ORM\Column(name="trust_id_outbound", type="string", length=10, nullable=true)
     */
    private $trustIdOutbound;

    /**
     * @var string
     *
     * @ORM\Column(name="use_ptime", type="string", length=10, nullable=true)
     */
    private $usePtime;

    /**
     * @var string
     *
     * @ORM\Column(name="use_avpf", type="string", length=10, nullable=true)
     */
    private $useAvpf;

    /**
     * @var string
     *
     * @ORM\Column(name="media_encryption", type="string", length=10, nullable=true)
     */
    private $mediaEncryption;

    /**
     * @var string
     *
     * @ORM\Column(name="inband_progress", type="string", length=10, nullable=true)
     */
    private $inbandProgress;

    /**
     * @var string
     *
     * @ORM\Column(name="call_group", type="string", length=40, nullable=true)
     */
    private $callGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="pickup_group", type="string", length=40, nullable=true)
     */
    private $pickupGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="named_call_group", type="string", length=40, nullable=true)
     */
    private $namedCallGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="named_pickup_group", type="string", length=40, nullable=true)
     */
    private $namedPickupGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="device_state_busy_at", type="integer", nullable=true)
     */
    private $deviceStateBusyAt;

    /**
     * @var string
     *
     * @ORM\Column(name="fax_detect", type="string", length=10, nullable=true)
     */
    private $faxDetect;

    /**
     * @var string
     *
     * @ORM\Column(name="t38_udptl", type="string", length=10, nullable=true)
     */
    private $t38Udptl;

    /**
     * @var string
     *
     * @ORM\Column(name="t38_udptl_ec", type="string", length=10, nullable=true)
     */
    private $t38_udptl_ec;

    /**
     * @var string
     *
     * @ORM\Column(name="progressinband", type="integer", nullable=true)
     */
    private $t38_udptl_maxdatagram;

    /**
     * @var string
     *
     * @ORM\Column(name="t38_udptl_nat", type="string", length=10, nullable=true)
     */
    private $t38_udptl_nat;

    /**
     * @var string
     *
     * @ORM\Column(name="t38_udptl_ipv6", type="string", length=10, nullable=true)
     */
    private $t38_udptl_ipv6;

    /**
     * @var string
     *
     * @ORM\Column(name="tone_zone", type="string", length=40, nullable=true)
     */
    private $toneZone;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=40, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="one_touch_recording", type="string", length=10, nullable=true)
     */
    private $oneTouchRecording;

    /**
     * @var string
     *
     * @ORM\Column(name="record_on_feature", type="string", length=40, nullable=true)
     */
    private $recordOnFeature;

    /**
     * @var string
     *
     * @ORM\Column(name="rtp_engine", type="string", length=40, nullable=true)
     */
    private $rtpEngine;

    /**
     * @var string
     *
     * @ORM\Column(name="allow_transfer", type="string", length=10, nullable=true)
     */
    private $allowTransfer;

    /**
     * @var string
     *
     * @ORM\Column(name="allow_subscribe", type="string", length=10, nullable=true)
     */
    private $allowSubscribe;

    /**
     * @var integer
     *
     * @ORM\Column(name="sdp_owner", type="string", length=40, nullable=true)
     */
    private $sdpOwner;

    /**
     * @var string
     *
     * @ORM\Column(name="sdp_session", type="string", length=40, nullable=true)
     */
    private $sdpSession;

    /**
     * @var string
     *
     * @ORM\Column(name="tos_audio", type="string", length=10, nullable=true)
     */
    private $tosAudio;

    /**
     * @var integer
     *
     * @ORM\Column(name="tos_video", type="string", length=10, nullable=true)
     */
    private $tosVideo;

    /**
     * @var integer
     *
     * @ORM\Column(name="sub_min_expiry", type="integer", nullable=true)
     */
    private $subMinExpiry;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionrefresher", type="string", length=10, nullable=true)
     */
    private $sessionrefresher;

    /**
     * @var string
     *
     * @ORM\Column(name="from_domain", type="string", length=40, nullable=true)
     */
    private $fromDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="from_user", type="string", length=40, nullable=true)
     */
    private $from_user;

    /**
     * @var string
     *
     * @ORM\Column(name="mwi_from_user", type="string", length=40, nullable=true)
     */
    private $mwiFromUser;

    /**
     * @var string
     *
     * @ORM\Column(name="dtls_verify", type="string", length=40, nullable=true)
     */
    private $dtlsVerify;

    /**
     * @var integer
     *
     * @ORM\Column(name="dtls_rekey", type="string", length=40, nullable=true)
     */
    private $dtlsRekey;

    /**
     * @var integer
     *
     * @ORM\Column(name="dtls_cert_file", type="string", length=200, nullable=true)
     */
    private $dtlsCertFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="dtls_private_key", type="string", length=200, nullable=true)
     */
    private $dtlsPrivateKey;

    /**
     * @var string
     *
     * @ORM\Column(name="dtls_cipher", type="string", length=200, nullable=true)
     */
    private $dtlsCipher;

    /**
     * @var string
     *
     * @ORM\Column(name="dtls_ca_file", type="string", length=200, nullable=true)
     */
    private $dtlsCaFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="dtls_ca_path", type="string", length=200, nullable=true)
     */
    private $dtlsCaPath;

    /**
     * @var string
     *
     * @ORM\Column(name="dtls_setup", type="string", length=10, nullable=true)
     */
    private $dtlsSetup;

    /**
     * @var integer
     *
     * @ORM\Column(name="srtp_tag_32", type="string", length=10, nullable=true)
     */
    private $srtpTag32;

    /**
     * @var string
     *
     * @ORM\Column(name="media_address", type="string", length=50, nullable=true)
     */
    private $mediaAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_method", type="string", length=10, nullable=true)
     */
    private $redirectMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="set_var", type="string", length=250, nullable=true)
     */
    private $setVar;

    /**
     * @var string
     *
     * @ORM\Column(name="cos_audio", type="integer", nullable=true)
     */
    private $cosAudio;

    /**
     * @var string
     *
     * @ORM\Column(name="cos_video",  type="integer", nullable=true)
     */
    private $cosVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="message_context", type="string", length=40, nullable=true)
     */
    private $messageContext;

    /**
     * @var string
     *
     * @ORM\Column(name="force_avp", type="string", length=10, nullable=true)
     */
    private $forceAvp;

    /**
     * @var string
     *
     * @ORM\Column(name="media_use_received_transport", type="string", length=10, nullable=true)
     */
    private $mediaUseReceivedTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="accountcode", type="string", length=20, nullable=true)
     */
    private $accountcode;

    /**
     * @var string
     *
     * @ORM\Column(name="media_encryption_optimistic", type="string", length=10, nullable=true)
     */
    private $mediaEncryptionOptimistic;

    /**
     * @var string
     *
     * @ORM\Column(name="user_eq_phone", type="string", length=10, nullable=true)
     */
    private $userEqPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="rpid_immediate", type="string", length=10, nullable=true)
     */
    private $rpidImmediate;

    /**
     * @var string
     *
     * @ORM\Column(name="g726_non_standard", type="string", length=10, nullable=true)
     */
    private $g726NonStandard;

    /**
     * @var string
     *
     * @ORM\Column(name="rtp_keepalive", type="integer", nullable=true)
     */
    private $rtpKeepalive;

    /**
     * @var string
     *
     * @ORM\Column(name="rtp_timeout", type="integer",  nullable=true)
     */
    private $rtpTimeout;

    /**
     * @var string
     *
     * @ORM\Column(name="rtp_timeout_hold", type="integer",nullable=true)
     */
    private $rtpTimeoutHold;

    /**
     * @var string
     *
     * @ORM\Column(name="bind_rtp_to_media_address", type="string", length=10, nullable=true)
     */
    private $bindRtpToMediaAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="voicemail_extension", type="string", length=40, nullable=true)
     */
    private $voicemailExtension;

    /**
     * @var string
     *
     * @ORM\Column(name="mwi_subscribe_replaces_unsolicited", type="integer", nullable=true)
     */
    private $mwiSubscribeReplacesUnsolicited;

    /**
     * @var CCO\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CCO\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;

    /**
     * @var \CCO\CallCenterBundle\Entity\CallCenter
     *
     * @ORM\ManyToOne(targetEntity="CCO\CallCenterBundle\Entity\CallCenter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="callcenter_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $callCenter;

    public function setId($id)
    {
        $this->id = $id;
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
     * Set transport
     *
     * @param string $transport
     *
     * @return PjsipEndpoint
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
     * Set aors
     *
     * @param string $aors
     *
     * @return PjsipEndpoint
     */
    public function setAors($aors)
    {
        $this->aors = $aors;

        return $this;
    }

    /**
     * Get aors
     *
     * @return string
     */
    public function getAors()
    {
        return $this->aors;
    }

    /**
     * Set auth
     *
     * @param string $auth
     *
     * @return PjsipEndpoint
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;

        return $this;
    }

    /**
     * Get auth
     *
     * @return string
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Set context
     *
     * @param string $context
     *
     * @return PjsipEndpoint
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
     * Set disallow
     *
     * @param string $disallow
     *
     * @return PjsipEndpoint
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
     *
     * @return PjsipEndpoint
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
     * Set directMedia
     *
     * @param string $directMedia
     *
     * @return PjsipEndpoint
     */
    public function setDirectMedia($directMedia)
    {
        $this->directMedia = $directMedia;

        return $this;
    }

    /**
     * Get directMedia
     *
     * @return string
     */
    public function getDirectMedia()
    {
        return $this->directMedia;
    }

    /**
     * Set connectedLineMethod
     *
     * @param string $connectedLineMethod
     *
     * @return PjsipEndpoint
     */
    public function setConnectedLineMethod($connectedLineMethod)
    {
        $this->connectedLineMethod = $connectedLineMethod;

        return $this;
    }

    /**
     * Get connectedLineMethod
     *
     * @return string
     */
    public function getConnectedLineMethod()
    {
        return $this->connectedLineMethod;
    }

    /**
     * Set directMediaMethod
     *
     * @param string $directMediaMethod
     *
     * @return PjsipEndpoint
     */
    public function setDirectMediaMethod($directMediaMethod)
    {
        $this->directMediaMethod = $directMediaMethod;

        return $this;
    }

    /**
     * Get directMediaMethod
     *
     * @return string
     */
    public function getDirectMediaMethod()
    {
        return $this->directMediaMethod;
    }

    /**
     * Set directMediaGlareMitigation
     *
     * @param string $directMediaGlareMitigation
     *
     * @return PjsipEndpoint
     */
    public function setDirectMediaGlareMitigation($directMediaGlareMitigation)
    {
        $this->directMediaGlareMitigation = $directMediaGlareMitigation;

        return $this;
    }

    /**
     * Get directMediaGlareMitigation
     *
     * @return string
     */
    public function getDirectMediaGlareMitigation()
    {
        return $this->directMediaGlareMitigation;
    }

    /**
     * Set disableDirectMediaOnNat
     *
     * @param string $disableDirectMediaOnNat
     *
     * @return PjsipEndpoint
     */
    public function setDisableDirectMediaOnNat($disableDirectMediaOnNat)
    {
        $this->disableDirectMediaOnNat = $disableDirectMediaOnNat;

        return $this;
    }

    /**
     * Get disableDirectMediaOnNat
     *
     * @return string
     */
    public function getDisableDirectMediaOnNat()
    {
        return $this->disableDirectMediaOnNat;
    }

    /**
     * Set dtmfMode
     *
     * @param string $dtmfMode
     *
     * @return PjsipEndpoint
     */
    public function setDtmfMode($dtmfMode)
    {
        $this->dtmfMode = $dtmfMode;

        return $this;
    }

    /**
     * Get dtmfMode
     *
     * @return string
     */
    public function getDtmfMode()
    {
        return $this->dtmfMode;
    }

    /**
     * Set externalMediaAddress
     *
     * @param string $externalMediaAddress
     *
     * @return PjsipEndpoint
     */
    public function setExternalMediaAddress($externalMediaAddress)
    {
        $this->externalMediaAddress = $externalMediaAddress;

        return $this;
    }

    /**
     * Get externalMediaAddress
     *
     * @return string
     */
    public function getExternalMediaAddress()
    {
        return $this->externalMediaAddress;
    }

    /**
     * Set forceRport
     *
     * @param string $forceRport
     *
     * @return PjsipEndpoint
     */
    public function setForceRport($forceRport)
    {
        $this->forceRport = $forceRport;

        return $this;
    }

    /**
     * Get forceRport
     *
     * @return string
     */
    public function getForceRport()
    {
        return $this->forceRport;
    }

    /**
     * Set iceSupport
     *
     * @param string $iceSupport
     *
     * @return PjsipEndpoint
     */
    public function setIceSupport($iceSupport)
    {
        $this->iceSupport = $iceSupport;

        return $this;
    }

    /**
     * Get iceSupport
     *
     * @return string
     */
    public function getIceSupport()
    {
        return $this->iceSupport;
    }

    /**
     * Set identifyBy
     *
     * @param string $identifyBy
     *
     * @return PjsipEndpoint
     */
    public function setIdentifyBy($identifyBy)
    {
        $this->identifyBy = $identifyBy;

        return $this;
    }

    /**
     * Get identifyBy
     *
     * @return string
     */
    public function getIdentifyBy()
    {
        return $this->identifyBy;
    }

    /**
     * Set mailboxes
     *
     * @param string $mailboxes
     *
     * @return PjsipEndpoint
     */
    public function setMailboxes($mailboxes)
    {
        $this->mailboxes = $mailboxes;

        return $this;
    }

    /**
     * Get mailboxes
     *
     * @return string
     */
    public function getMailboxes()
    {
        return $this->mailboxes;
    }

    /**
     * Set mohSuggest
     *
     * @param string $mohSuggest
     *
     * @return PjsipEndpoint
     */
    public function setMohSuggest($mohSuggest)
    {
        $this->mohSuggest = $mohSuggest;

        return $this;
    }

    /**
     * Get mohSuggest
     *
     * @return string
     */
    public function getMohSuggest()
    {
        return $this->mohSuggest;
    }

    /**
     * Set outboundAuth
     *
     * @param string $outboundAuth
     *
     * @return PjsipEndpoint
     */
    public function setOutboundAuth($outboundAuth)
    {
        $this->outboundAuth = $outboundAuth;

        return $this;
    }

    /**
     * Get outboundAuth
     *
     * @return string
     */
    public function getOutboundAuth()
    {
        return $this->outboundAuth;
    }

    /**
     * Set outboundProxy
     *
     * @param string $outboundProxy
     *
     * @return PjsipEndpoint
     */
    public function setOutboundProxy($outboundProxy)
    {
        $this->outboundProxy = $outboundProxy;

        return $this;
    }

    /**
     * Get outboundProxy
     *
     * @return string
     */
    public function getOutboundProxy()
    {
        return $this->outboundProxy;
    }

    /**
     * Set rewriteContact
     *
     * @param string $rewriteContact
     *
     * @return PjsipEndpoint
     */
    public function setRewriteContact($rewriteContact)
    {
        $this->rewriteContact = $rewriteContact;

        return $this;
    }

    /**
     * Get rewriteContact
     *
     * @return string
     */
    public function getRewriteContact()
    {
        return $this->rewriteContact;
    }

    /**
     * Set rtpIpv6
     *
     * @param string $rtpIpv6
     *
     * @return PjsipEndpoint
     */
    public function setRtpIpv6($rtpIpv6)
    {
        $this->rtpIpv6 = $rtpIpv6;

        return $this;
    }

    /**
     * Get rtpIpv6
     *
     * @return string
     */
    public function getRtpIpv6()
    {
        return $this->rtpIpv6;
    }

    /**
     * Set rtpSymmetric
     *
     * @param string $rtpSymmetric
     *
     * @return PjsipEndpoint
     */
    public function setRtpSymmetric($rtpSymmetric)
    {
        $this->rtpSymmetric = $rtpSymmetric;

        return $this;
    }

    /**
     * Get rtpSymmetric
     *
     * @return string
     */
    public function getRtpSymmetric()
    {
        return $this->rtpSymmetric;
    }

    /**
     * Set sendDiversion
     *
     * @param string $sendDiversion
     *
     * @return PjsipEndpoint
     */
    public function setSendDiversion($sendDiversion)
    {
        $this->sendDiversion = $sendDiversion;

        return $this;
    }

    /**
     * Get sendDiversion
     *
     * @return string
     */
    public function getSendDiversion()
    {
        return $this->sendDiversion;
    }

    /**
     * Set sendPai
     *
     * @param string $sendPai
     *
     * @return PjsipEndpoint
     */
    public function setSendPai($sendPai)
    {
        $this->sendPai = $sendPai;

        return $this;
    }

    /**
     * Get sendPai
     *
     * @return string
     */
    public function getSendPai()
    {
        return $this->sendPai;
    }

    /**
     * Set sendRpid
     *
     * @param string $sendRpid
     *
     * @return PjsipEndpoint
     */
    public function setSendRpid($sendRpid)
    {
        $this->sendRpid = $sendRpid;

        return $this;
    }

    /**
     * Get sendRpid
     *
     * @return string
     */
    public function getSendRpid()
    {
        return $this->sendRpid;
    }

    /**
     * Set timersMinSe
     *
     * @param integer $timersMinSe
     *
     * @return PjsipEndpoint
     */
    public function setTimersMinSe($timersMinSe)
    {
        $this->timersMinSe = $timersMinSe;

        return $this;
    }

    /**
     * Get timersMinSe
     *
     * @return integer
     */
    public function getTimersMinSe()
    {
        return $this->timersMinSe;
    }

    /**
     * Set timers
     *
     * @param string $timers
     *
     * @return PjsipEndpoint
     */
    public function setTimers($timers)
    {
        $this->timers = $timers;

        return $this;
    }

    /**
     * Get timers
     *
     * @return string
     */
    public function getTimers()
    {
        return $this->timers;
    }

    /**
     * Set timersSessExpires
     *
     * @param integer $timersSessExpires
     *
     * @return PjsipEndpoint
     */
    public function setTimersSessExpires($timersSessExpires)
    {
        $this->timersSessExpires = $timersSessExpires;

        return $this;
    }

    /**
     * Get timersSessExpires
     *
     * @return integer
     */
    public function getTimersSessExpires()
    {
        return $this->timersSessExpires;
    }

    /**
     * Set callerId
     *
     * @param string $callerId
     *
     * @return PjsipEndpoint
     */
    public function setCallerId($callerId)
    {
        $this->callerId = $callerId;

        return $this;
    }

    /**
     * Get callerId
     *
     * @return string
     */
    public function getCallerId()
    {
        return $this->callerId;
    }

    /**
     * Set calleridPrivacy
     *
     * @param string $calleridPrivacy
     *
     * @return PjsipEndpoint
     */
    public function setCalleridPrivacy($calleridPrivacy)
    {
        $this->calleridPrivacy = $calleridPrivacy;

        return $this;
    }

    /**
     * Get calleridPrivacy
     *
     * @return string
     */
    public function getCalleridPrivacy()
    {
        return $this->calleridPrivacy;
    }

    /**
     * Set calleridTag
     *
     * @param string $calleridTag
     *
     * @return PjsipEndpoint
     */
    public function setCalleridTag($calleridTag)
    {
        $this->calleridTag = $calleridTag;

        return $this;
    }

    /**
     * Get calleridTag
     *
     * @return string
     */
    public function getCalleridTag()
    {
        return $this->calleridTag;
    }

    /**
     * Set oneHundredRel
     *
     * @param string $oneHundredRel
     *
     * @return PjsipEndpoint
     */
    public function setOneHundredRel($oneHundredRel)
    {
        $this->oneHundredRel = $oneHundredRel;

        return $this;
    }

    /**
     * Get oneHundredRel
     *
     * @return string
     */
    public function getOneHundredRel()
    {
        return $this->oneHundredRel;
    }

    /**
     * Set aggregateMwi
     *
     * @param string $aggregateMwi
     *
     * @return PjsipEndpoint
     */
    public function setAggregateMwi($aggregateMwi)
    {
        $this->aggregate_Mwi = $aggregateMwi;

        return $this;
    }

    /**
     * Get aggregateMwi
     *
     * @return string
     */
    public function getAggregateMwi()
    {
        return $this->aggregate_Mwi;
    }

    /**
     * Set trustIdInbound
     *
     * @param string $trustIdInbound
     *
     * @return PjsipEndpoint
     */
    public function setTrustIdInbound($trustIdInbound)
    {
        $this->trustIdInbound = $trustIdInbound;

        return $this;
    }

    /**
     * Get trustIdInbound
     *
     * @return string
     */
    public function getTrustIdInbound()
    {
        return $this->trustIdInbound;
    }

    /**
     * Set trustIdOutbound
     *
     * @param string $trustIdOutbound
     *
     * @return PjsipEndpoint
     */
    public function setTrustIdOutbound($trustIdOutbound)
    {
        $this->trustIdOutbound = $trustIdOutbound;

        return $this;
    }

    /**
     * Get trustIdOutbound
     *
     * @return string
     */
    public function getTrustIdOutbound()
    {
        return $this->trustIdOutbound;
    }

    /**
     * Set usePtime
     *
     * @param string $usePtime
     *
     * @return PjsipEndpoint
     */
    public function setUsePtime($usePtime)
    {
        $this->usePtime = $usePtime;

        return $this;
    }

    /**
     * Get usePtime
     *
     * @return string
     */
    public function getUsePtime()
    {
        return $this->usePtime;
    }

    /**
     * Set useAvpf
     *
     * @param string $useAvpf
     *
     * @return PjsipEndpoint
     */
    public function setUseAvpf($useAvpf)
    {
        $this->useAvpf = $useAvpf;

        return $this;
    }

    /**
     * Get useAvpf
     *
     * @return string
     */
    public function getUseAvpf()
    {
        return $this->useAvpf;
    }

    /**
     * Set mediaEncryption
     *
     * @param string $mediaEncryption
     *
     * @return PjsipEndpoint
     */
    public function setMediaEncryption($mediaEncryption)
    {
        $this->mediaEncryption = $mediaEncryption;

        return $this;
    }

    /**
     * Get mediaEncryption
     *
     * @return string
     */
    public function getMediaEncryption()
    {
        return $this->mediaEncryption;
    }

    /**
     * Set inbandProgress
     *
     * @param string $inbandProgress
     *
     * @return PjsipEndpoint
     */
    public function setInbandProgress($inbandProgress)
    {
        $this->inbandProgress = $inbandProgress;

        return $this;
    }

    /**
     * Get inbandProgress
     *
     * @return string
     */
    public function getInbandProgress()
    {
        return $this->inbandProgress;
    }

    /**
     * Set callGroup
     *
     * @param string $callGroup
     *
     * @return PjsipEndpoint
     */
    public function setCallGroup($callGroup)
    {
        $this->callGroup = $callGroup;

        return $this;
    }

    /**
     * Get callGroup
     *
     * @return string
     */
    public function getCallGroup()
    {
        return $this->callGroup;
    }

    /**
     * Set pickupGroup
     *
     * @param string $pickupGroup
     *
     * @return PjsipEndpoint
     */
    public function setPickupGroup($pickupGroup)
    {
        $this->pickupGroup = $pickupGroup;

        return $this;
    }

    /**
     * Get pickupGroup
     *
     * @return string
     */
    public function getPickupGroup()
    {
        return $this->pickupGroup;
    }

    /**
     * Set namedCallGroup
     *
     * @param string $namedCallGroup
     *
     * @return PjsipEndpoint
     */
    public function setNamedCallGroup($namedCallGroup)
    {
        $this->namedCallGroup = $namedCallGroup;

        return $this;
    }

    /**
     * Get namedCallGroup
     *
     * @return string
     */
    public function getNamedCallGroup()
    {
        return $this->namedCallGroup;
    }

    /**
     * Set namedPickupGroup
     *
     * @param string $namedPickupGroup
     *
     * @return PjsipEndpoint
     */
    public function setNamedPickupGroup($namedPickupGroup)
    {
        $this->namedPickupGroup = $namedPickupGroup;

        return $this;
    }

    /**
     * Get namedPickupGroup
     *
     * @return string
     */
    public function getNamedPickupGroup()
    {
        return $this->namedPickupGroup;
    }

    /**
     * Set deviceStateBusyAt
     *
     * @param integer $deviceStateBusyAt
     *
     * @return PjsipEndpoint
     */
    public function setDeviceStateBusyAt($deviceStateBusyAt)
    {
        $this->deviceStateBusyAt = $deviceStateBusyAt;

        return $this;
    }

    /**
     * Get deviceStateBusyAt
     *
     * @return integer
     */
    public function getDeviceStateBusyAt()
    {
        return $this->deviceStateBusyAt;
    }

    /**
     * Set faxDetect
     *
     * @param string $faxDetect
     *
     * @return PjsipEndpoint
     */
    public function setFaxDetect($faxDetect)
    {
        $this->faxDetect = $faxDetect;

        return $this;
    }

    /**
     * Get faxDetect
     *
     * @return string
     */
    public function getFaxDetect()
    {
        return $this->faxDetect;
    }

    /**
     * Set t38Udptl
     *
     * @param string $t38Udptl
     *
     * @return PjsipEndpoint
     */
    public function setT38Udptl($t38Udptl)
    {
        $this->t38Udptl = $t38Udptl;

        return $this;
    }

    /**
     * Get t38Udptl
     *
     * @return string
     */
    public function getT38Udptl()
    {
        return $this->t38Udptl;
    }

    /**
     * Set t38UdptlEc
     *
     * @param string $t38UdptlEc
     *
     * @return PjsipEndpoint
     */
    public function setT38UdptlEc($t38UdptlEc)
    {
        $this->t38_udptl_ec = $t38UdptlEc;

        return $this;
    }

    /**
     * Get t38UdptlEc
     *
     * @return string
     */
    public function getT38UdptlEc()
    {
        return $this->t38_udptl_ec;
    }

    /**
     * Set t38UdptlMaxdatagram
     *
     * @param integer $t38UdptlMaxdatagram
     *
     * @return PjsipEndpoint
     */
    public function setT38UdptlMaxdatagram($t38UdptlMaxdatagram)
    {
        $this->t38_udptl_maxdatagram = $t38UdptlMaxdatagram;

        return $this;
    }

    /**
     * Get t38UdptlMaxdatagram
     *
     * @return integer
     */
    public function getT38UdptlMaxdatagram()
    {
        return $this->t38_udptl_maxdatagram;
    }

    /**
     * Set t38UdptlNat
     *
     * @param string $t38UdptlNat
     *
     * @return PjsipEndpoint
     */
    public function setT38UdptlNat($t38UdptlNat)
    {
        $this->t38_udptl_nat = $t38UdptlNat;

        return $this;
    }

    /**
     * Get t38UdptlNat
     *
     * @return string
     */
    public function getT38UdptlNat()
    {
        return $this->t38_udptl_nat;
    }

    /**
     * Set t38UdptlIpv6
     *
     * @param string $t38UdptlIpv6
     *
     * @return PjsipEndpoint
     */
    public function setT38UdptlIpv6($t38UdptlIpv6)
    {
        $this->t38_udptl_ipv6 = $t38UdptlIpv6;

        return $this;
    }

    /**
     * Get t38UdptlIpv6
     *
     * @return string
     */
    public function getT38UdptlIpv6()
    {
        return $this->t38_udptl_ipv6;
    }

    /**
     * Set toneZone
     *
     * @param string $toneZone
     *
     * @return PjsipEndpoint
     */
    public function setToneZone($toneZone)
    {
        $this->toneZone = $toneZone;

        return $this;
    }

    /**
     * Get toneZone
     *
     * @return string
     */
    public function getToneZone()
    {
        return $this->toneZone;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return PjsipEndpoint
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
     * Set oneTouchRecording
     *
     * @param string $oneTouchRecording
     *
     * @return PjsipEndpoint
     */
    public function setOneTouchRecording($oneTouchRecording)
    {
        $this->oneTouchRecording = $oneTouchRecording;

        return $this;
    }

    /**
     * Get oneTouchRecording
     *
     * @return string
     */
    public function getOneTouchRecording()
    {
        return $this->oneTouchRecording;
    }

    /**
     * Set recordOnFeature
     *
     * @param string $recordOnFeature
     *
     * @return PjsipEndpoint
     */
    public function setRecordOnFeature($recordOnFeature)
    {
        $this->recordOnFeature = $recordOnFeature;

        return $this;
    }

    /**
     * Get recordOnFeature
     *
     * @return string
     */
    public function getRecordOnFeature()
    {
        return $this->recordOnFeature;
    }

    /**
     * Set rtpEngine
     *
     * @param string $rtpEngine
     *
     * @return PjsipEndpoint
     */
    public function setRtpEngine($rtpEngine)
    {
        $this->rtpEngine = $rtpEngine;

        return $this;
    }

    /**
     * Get rtpEngine
     *
     * @return string
     */
    public function getRtpEngine()
    {
        return $this->rtpEngine;
    }

    /**
     * Set allowTransfer
     *
     * @param string $allowTransfer
     *
     * @return PjsipEndpoint
     */
    public function setAllowTransfer($allowTransfer)
    {
        $this->allowTransfer = $allowTransfer;

        return $this;
    }

    /**
     * Get allowTransfer
     *
     * @return string
     */
    public function getAllowTransfer()
    {
        return $this->allowTransfer;
    }

    /**
     * Set allowSubscribe
     *
     * @param string $allowSubscribe
     *
     * @return PjsipEndpoint
     */
    public function setAllowSubscribe($allowSubscribe)
    {
        $this->allowSubscribe = $allowSubscribe;

        return $this;
    }

    /**
     * Get allowSubscribe
     *
     * @return string
     */
    public function getAllowSubscribe()
    {
        return $this->allowSubscribe;
    }

    /**
     * Set sdpOwner
     *
     * @param string $sdpOwner
     *
     * @return PjsipEndpoint
     */
    public function setSdpOwner($sdpOwner)
    {
        $this->sdpOwner = $sdpOwner;

        return $this;
    }

    /**
     * Get sdpOwner
     *
     * @return string
     */
    public function getSdpOwner()
    {
        return $this->sdpOwner;
    }

    /**
     * Set sdpSession
     *
     * @param string $sdpSession
     *
     * @return PjsipEndpoint
     */
    public function setSdpSession($sdpSession)
    {
        $this->sdpSession = $sdpSession;

        return $this;
    }

    /**
     * Get sdpSession
     *
     * @return string
     */
    public function getSdpSession()
    {
        return $this->sdpSession;
    }

    /**
     * Set tosAudio
     *
     * @param string $tosAudio
     *
     * @return PjsipEndpoint
     */
    public function setTosAudio($tosAudio)
    {
        $this->tosAudio = $tosAudio;

        return $this;
    }

    /**
     * Get tosAudio
     *
     * @return string
     */
    public function getTosAudio()
    {
        return $this->tosAudio;
    }

    /**
     * Set tosVideo
     *
     * @param string $tosVideo
     *
     * @return PjsipEndpoint
     */
    public function setTosVideo($tosVideo)
    {
        $this->tosVideo = $tosVideo;

        return $this;
    }

    /**
     * Get tosVideo
     *
     * @return string
     */
    public function getTosVideo()
    {
        return $this->tosVideo;
    }

    /**
     * Set subMinExpiry
     *
     * @param integer $subMinExpiry
     *
     * @return PjsipEndpoint
     */
    public function setSubMinExpiry($subMinExpiry)
    {
        $this->subMinExpiry = $subMinExpiry;

        return $this;
    }

    /**
     * Get subMinExpiry
     *
     * @return integer
     */
    public function getSubMinExpiry()
    {
        return $this->subMinExpiry;
    }

    /**
     * Set sessionrefresher
     *
     * @param string $sessionrefresher
     *
     * @return PjsipEndpoint
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
     * Set fromDomain
     *
     * @param string $fromDomain
     *
     * @return PjsipEndpoint
     */
    public function setFromDomain($fromDomain)
    {
        $this->fromDomain = $fromDomain;

        return $this;
    }

    /**
     * Get fromDomain
     *
     * @return string
     */
    public function getFromDomain()
    {
        return $this->fromDomain;
    }

    /**
     * Set fromUser
     *
     * @param string $fromUser
     *
     * @return PjsipEndpoint
     */
    public function setFromUser($fromUser)
    {
        $this->from_user = $fromUser;

        return $this;
    }

    /**
     * Get fromUser
     *
     * @return string
     */
    public function getFromUser()
    {
        return $this->from_user;
    }

    /**
     * Set mwiFromUser
     *
     * @param string $mwiFromUser
     *
     * @return PjsipEndpoint
     */
    public function setMwiFromUser($mwiFromUser)
    {
        $this->mwiFromUser = $mwiFromUser;

        return $this;
    }

    /**
     * Get mwiFromUser
     *
     * @return string
     */
    public function getMwiFromUser()
    {
        return $this->mwiFromUser;
    }

    /**
     * Set dtlsVerify
     *
     * @param string $dtlsVerify
     *
     * @return PjsipEndpoint
     */
    public function setDtlsVerify($dtlsVerify)
    {
        $this->dtlsVerify = $dtlsVerify;

        return $this;
    }

    /**
     * Get dtlsVerify
     *
     * @return string
     */
    public function getDtlsVerify()
    {
        return $this->dtlsVerify;
    }

    /**
     * Set dtlsRekey
     *
     * @param string $dtlsRekey
     *
     * @return PjsipEndpoint
     */
    public function setDtlsRekey($dtlsRekey)
    {
        $this->dtlsRekey = $dtlsRekey;

        return $this;
    }

    /**
     * Get dtlsRekey
     *
     * @return string
     */
    public function getDtlsRekey()
    {
        return $this->dtlsRekey;
    }

    /**
     * Set dtlsCertFile
     *
     * @param string $dtlsCertFile
     *
     * @return PjsipEndpoint
     */
    public function setDtlsCertFile($dtlsCertFile)
    {
        $this->dtlsCertFile = $dtlsCertFile;

        return $this;
    }

    /**
     * Get dtlsCertFile
     *
     * @return string
     */
    public function getDtlsCertFile()
    {
        return $this->dtlsCertFile;
    }

    /**
     * Set dtlsPrivateKey
     *
     * @param string $dtlsPrivateKey
     *
     * @return PjsipEndpoint
     */
    public function setDtlsPrivateKey($dtlsPrivateKey)
    {
        $this->dtlsPrivateKey = $dtlsPrivateKey;

        return $this;
    }

    /**
     * Get dtlsPrivateKey
     *
     * @return string
     */
    public function getDtlsPrivateKey()
    {
        return $this->dtlsPrivateKey;
    }

    /**
     * Set dtlsCipher
     *
     * @param string $dtlsCipher
     *
     * @return PjsipEndpoint
     */
    public function setDtlsCipher($dtlsCipher)
    {
        $this->dtlsCipher = $dtlsCipher;

        return $this;
    }

    /**
     * Get dtlsCipher
     *
     * @return string
     */
    public function getDtlsCipher()
    {
        return $this->dtlsCipher;
    }

    /**
     * Set dtlsCaFile
     *
     * @param string $dtlsCaFile
     *
     * @return PjsipEndpoint
     */
    public function setDtlsCaFile($dtlsCaFile)
    {
        $this->dtlsCaFile = $dtlsCaFile;

        return $this;
    }

    /**
     * Get dtlsCaFile
     *
     * @return string
     */
    public function getDtlsCaFile()
    {
        return $this->dtlsCaFile;
    }

    /**
     * Set dtlsCaPath
     *
     * @param string $dtlsCaPath
     *
     * @return PjsipEndpoint
     */
    public function setDtlsCaPath($dtlsCaPath)
    {
        $this->dtlsCaPath = $dtlsCaPath;

        return $this;
    }

    /**
     * Get dtlsCaPath
     *
     * @return string
     */
    public function getDtlsCaPath()
    {
        return $this->dtlsCaPath;
    }

    /**
     * Set dtlsSetup
     *
     * @param string $dtlsSetup
     *
     * @return PjsipEndpoint
     */
    public function setDtlsSetup($dtlsSetup)
    {
        $this->dtlsSetup = $dtlsSetup;

        return $this;
    }

    /**
     * Get dtlsSetup
     *
     * @return string
     */
    public function getDtlsSetup()
    {
        return $this->dtlsSetup;
    }

    /**
     * Set srtpTag32
     *
     * @param string $srtpTag32
     *
     * @return PjsipEndpoint
     */
    public function setSrtpTag32($srtpTag32)
    {
        $this->srtpTag32 = $srtpTag32;

        return $this;
    }

    /**
     * Get srtpTag32
     *
     * @return string
     */
    public function getSrtpTag32()
    {
        return $this->srtpTag32;
    }

    /**
     * Set mediaAddress
     *
     * @param string $mediaAddress
     *
     * @return PjsipEndpoint
     */
    public function setMediaAddress($mediaAddress)
    {
        $this->mediaAddress = $mediaAddress;

        return $this;
    }

    /**
     * Get mediaAddress
     *
     * @return string
     */
    public function getMediaAddress()
    {
        return $this->mediaAddress;
    }

    /**
     * Set redirectMethod
     *
     * @param string $redirectMethod
     *
     * @return PjsipEndpoint
     */
    public function setRedirectMethod($redirectMethod)
    {
        $this->redirectMethod = $redirectMethod;

        return $this;
    }

    /**
     * Get redirectMethod
     *
     * @return string
     */
    public function getRedirectMethod()
    {
        return $this->redirectMethod;
    }

    /**
     * Set setVar
     *
     * @param string $setVar
     *
     * @return PjsipEndpoint
     */
    public function setSetVar($setVar)
    {
        $this->setVar = $setVar;

        return $this;
    }

    /**
     * Get setVar
     *
     * @return string
     */
    public function getSetVar()
    {
        return $this->setVar;
    }

    /**
     * Set cosAudio
     *
     * @param integer $cosAudio
     *
     * @return PjsipEndpoint
     */
    public function setCosAudio($cosAudio)
    {
        $this->cosAudio = $cosAudio;

        return $this;
    }

    /**
     * Get cosAudio
     *
     * @return integer
     */
    public function getCosAudio()
    {
        return $this->cosAudio;
    }

    /**
     * Set cosVideo
     *
     * @param integer $cosVideo
     *
     * @return PjsipEndpoint
     */
    public function setCosVideo($cosVideo)
    {
        $this->cosVideo = $cosVideo;

        return $this;
    }

    /**
     * Get cosVideo
     *
     * @return integer
     */
    public function getCosVideo()
    {
        return $this->cosVideo;
    }

    /**
     * Set messageContext
     *
     * @param string $messageContext
     *
     * @return PjsipEndpoint
     */
    public function setMessageContext($messageContext)
    {
        $this->messageContext = $messageContext;

        return $this;
    }

    /**
     * Get messageContext
     *
     * @return string
     */
    public function getMessageContext()
    {
        return $this->messageContext;
    }

    /**
     * Set forceAvp
     *
     * @param string $forceAvp
     *
     * @return PjsipEndpoint
     */
    public function setForceAvp($forceAvp)
    {
        $this->forceAvp = $forceAvp;

        return $this;
    }

    /**
     * Get forceAvp
     *
     * @return string
     */
    public function getForceAvp()
    {
        return $this->forceAvp;
    }

    /**
     * Set mediaUseReceivedTransport
     *
     * @param string $mediaUseReceivedTransport
     *
     * @return PjsipEndpoint
     */
    public function setMediaUseReceivedTransport($mediaUseReceivedTransport)
    {
        $this->mediaUseReceivedTransport = $mediaUseReceivedTransport;

        return $this;
    }

    /**
     * Get mediaUseReceivedTransport
     *
     * @return string
     */
    public function getMediaUseReceivedTransport()
    {
        return $this->mediaUseReceivedTransport;
    }

    /**
     * Set accountcode
     *
     * @param string $accountcode
     *
     * @return PjsipEndpoint
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
     * Set mediaEncryptionOptimistic
     *
     * @param string $mediaEncryptionOptimistic
     *
     * @return PjsipEndpoint
     */
    public function setMediaEncryptionOptimistic($mediaEncryptionOptimistic)
    {
        $this->mediaEncryptionOptimistic = $mediaEncryptionOptimistic;

        return $this;
    }

    /**
     * Get mediaEncryptionOptimistic
     *
     * @return string
     */
    public function getMediaEncryptionOptimistic()
    {
        return $this->mediaEncryptionOptimistic;
    }

    /**
     * Set userEqPhone
     *
     * @param string $userEqPhone
     *
     * @return PjsipEndpoint
     */
    public function setUserEqPhone($userEqPhone)
    {
        $this->userEqPhone = $userEqPhone;

        return $this;
    }

    /**
     * Get userEqPhone
     *
     * @return string
     */
    public function getUserEqPhone()
    {
        return $this->userEqPhone;
    }

    /**
     * Set rpidImmediate
     *
     * @param string $rpidImmediate
     *
     * @return PjsipEndpoint
     */
    public function setRpidImmediate($rpidImmediate)
    {
        $this->rpidImmediate = $rpidImmediate;

        return $this;
    }

    /**
     * Get rpidImmediate
     *
     * @return string
     */
    public function getRpidImmediate()
    {
        return $this->rpidImmediate;
    }

    /**
     * Set g726NonStandard
     *
     * @param string $g726NonStandard
     *
     * @return PjsipEndpoint
     */
    public function setG726NonStandard($g726NonStandard)
    {
        $this->g726NonStandard = $g726NonStandard;

        return $this;
    }

    /**
     * Get g726NonStandard
     *
     * @return string
     */
    public function getG726NonStandard()
    {
        return $this->g726NonStandard;
    }

    /**
     * Set rtpKeepalive
     *
     * @param integer $rtpKeepalive
     *
     * @return PjsipEndpoint
     */
    public function setRtpKeepalive($rtpKeepalive)
    {
        $this->rtpKeepalive = $rtpKeepalive;

        return $this;
    }

    /**
     * Get rtpKeepalive
     *
     * @return integer
     */
    public function getRtpKeepalive()
    {
        return $this->rtpKeepalive;
    }

    /**
     * Set rtpTimeout
     *
     * @param integer $rtpTimeout
     *
     * @return PjsipEndpoint
     */
    public function setRtpTimeout($rtpTimeout)
    {
        $this->rtpTimeout = $rtpTimeout;

        return $this;
    }

    /**
     * Get rtpTimeout
     *
     * @return integer
     */
    public function getRtpTimeout()
    {
        return $this->rtpTimeout;
    }

    /**
     * Set rtpTimeoutHold
     *
     * @param integer $rtpTimeoutHold
     *
     * @return PjsipEndpoint
     */
    public function setRtpTimeoutHold($rtpTimeoutHold)
    {
        $this->rtpTimeoutHold = $rtpTimeoutHold;

        return $this;
    }

    /**
     * Get rtpTimeoutHold
     *
     * @return integer
     */
    public function getRtpTimeoutHold()
    {
        return $this->rtpTimeoutHold;
    }

    /**
     * Set bindRtpToMediaAddress
     *
     * @param string $bindRtpToMediaAddress
     *
     * @return PjsipEndpoint
     */
    public function setBindRtpToMediaAddress($bindRtpToMediaAddress)
    {
        $this->bindRtpToMediaAddress = $bindRtpToMediaAddress;

        return $this;
    }

    /**
     * Get bindRtpToMediaAddress
     *
     * @return string
     */
    public function getBindRtpToMediaAddress()
    {
        return $this->bindRtpToMediaAddress;
    }

    /**
     * Set voicemailExtension
     *
     * @param string $voicemailExtension
     *
     * @return PjsipEndpoint
     */
    public function setVoicemailExtension($voicemailExtension)
    {
        $this->voicemailExtension = $voicemailExtension;

        return $this;
    }

    /**
     * Get voicemailExtension
     *
     * @return string
     */
    public function getVoicemailExtension()
    {
        return $this->voicemailExtension;
    }

    /**
     * Set mwiSubscribeReplacesUnsolicited
     *
     * @param integer $mwiSubscribeReplacesUnsolicited
     *
     * @return PjsipEndpoint
     */
    public function setMwiSubscribeReplacesUnsolicited($mwiSubscribeReplacesUnsolicited)
    {
        $this->mwiSubscribeReplacesUnsolicited = $mwiSubscribeReplacesUnsolicited;

        return $this;
    }

    /**
     * Get mwiSubscribeReplacesUnsolicited
     *
     * @return integer
     */
    public function getMwiSubscribeReplacesUnsolicited()
    {
        return $this->mwiSubscribeReplacesUnsolicited;
    }

    /**
     * Set user
     *
     * @param \CCO\UserBundle\Entity\User $user
     *
     * @return PjsipEndpoint
     */
    public function setUser(\CCO\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CCO\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set callCenter
     *
     * @param \CCO\CallCenterBundle\Entity\CallCenter $callCenter
     *
     * @return PjsipEndpoint
     */
    public function setCallCenter(\CCO\CallCenterBundle\Entity\CallCenter $callCenter = null)
    {
        $this->callCenter = $callCenter;

        return $this;
    }

    /**
     * Get callCenter
     *
     * @return \CCO\CallCenterBundle\Entity\CallCenter
     */
    public function getCallCenter()
    {
        return $this->callCenter;
    }

}

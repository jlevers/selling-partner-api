<?php


namespace SellingPartnerApi;

use Closure;

class ConfigurationOptions
{
    /** @var string $awsAccessKey */
    protected $awsAccessKey;
    /** @var string $awsAccessSecret */
    protected $awsAccessSecret;

    /** @var string $lwaClientId */
    protected $lwaClientId;
    /** @var string $lwaClientSecret*/
    protected $lwaClientSecret;
    /** @var string $lwaRefreshToken */
    protected $lwaRefreshToken;

    /** @var string|null $accessToken */
    protected $accessToken;
    /** @var int|null $accessTokenExpiration */
    protected $accessTokenExpiration;

    /** @var string $spapiAwsRegion */
    protected $spapiAwsRegion;

    /** @var string $spapiEndpoint */
    protected $spapiEndpoint;

    /** @var Closure|null $onUpdateCredentials */
    protected $onUpdateCredentials;

    /** @var string|null $roleArn */
    protected $roleArn;

    /**
     * ConfigurationOptions constructor.
     * @param string $lwaClientId
     * @param string $lwaClientSecret
     * @param string $lwaRefreshToken
     * @param string $awsAccessKey
     * @param string $awsAccessSecret
     * @param string $spapiAwsRegion
     * @param string $spapiEndpoint
     * @param string|null $accessToken
     * @param int|null $accessTokenExpiration
     * @param Closure|null $onUpdateCredentials
     * @param string|null $roleArn
     */
    public function __construct(
        string $lwaClientId,
        string $lwaClientSecret,
        string $lwaRefreshToken,
        string $awsAccessKey,
        string $awsAccessSecret,
        string $spapiAwsRegion,
        string $spapiEndpoint,
        ?string $accessToken = null,
        ?int $accessTokenExpiration = null,
        ?Closure $onUpdateCredentials = null,
        ?string $roleArn = null
    ) {
        $this->lwaClientId = $lwaClientId;
        $this->lwaClientSecret = $lwaClientSecret;
        $this->awsAccessKey = $awsAccessKey;
        $this->awsAccessSecret = $awsAccessSecret;
        $this->lwaRefreshToken = $lwaRefreshToken;
        $this->spapiAwsRegion = $spapiAwsRegion;
        $this->spapiEndpoint = $spapiEndpoint;
        $this->accessToken = $accessToken;
        $this->accessTokenExpiration = $accessTokenExpiration;
        $this->onUpdateCredentials = $onUpdateCredentials;
        $this->roleArn = $roleArn;
    }

    /**
     * @return string
     */
    public function getAwsAccessKey(): string
    {
        return $this->awsAccessKey;
    }

    /**
     * @param string $awsAccessKey
     */
    public function setAwsAccessKey(string $awsAccessKey): void
    {
        $this->awsAccessKey = $awsAccessKey;
    }

    /**
     * @return string
     */
    public function getAwsAccessSecret(): string
    {
        return $this->awsAccessSecret;
    }

    /**
     * @param string $awsAccessSecret
     */
    public function setAwsAccessSecret(string $awsAccessSecret): void
    {
        $this->awsAccessSecret = $awsAccessSecret;
    }

    /**
     * @return string
     */
    public function getLwaClientId(): string
    {
        return $this->lwaClientId;
    }

    /**
     * @param string $lwaClientId
     */
    public function setLwaClientId(string $lwaClientId): void
    {
        $this->lwaClientId = $lwaClientId;
    }

    /**
     * @return string
     */
    public function getLwaClientSecret(): string
    {
        return $this->lwaClientSecret;
    }

    /**
     * @param string $lwaClientSecret
     */
    public function setLwaClientSecret(string $lwaClientSecret): void
    {
        $this->lwaClientSecret = $lwaClientSecret;
    }

    /**
     * @return string
     */
    public function getLwaRefreshToken(): string
    {
        return $this->lwaRefreshToken;
    }

    /**
     * @param string $lwaRefreshToken
     */
    public function setLwaRefreshToken(string $lwaRefreshToken): void
    {
        $this->lwaRefreshToken = $lwaRefreshToken;
    }

    /**
     * @return string|null
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * @param string|null $accessToken
     */
    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return int|null
     */
    public function getAccessTokenExpiration(): ?int
    {
        return $this->accessTokenExpiration;
    }

    /**
     * @param int|null $accessTokenExpiration
     */
    public function setAccessTokenExpiration(?int $accessTokenExpiration): void
    {
        $this->accessTokenExpiration = $accessTokenExpiration;
    }

    /**
     * @return string
     */
    public function getSpapiAwsRegion(): string
    {
        return $this->spapiAwsRegion;
    }

    /**
     * @param string $spapiAwsRegion
     */
    public function setSpapiAwsRegion(string $spapiAwsRegion): void
    {
        $this->spapiAwsRegion = $spapiAwsRegion;
    }

    /**
     * @return string
     */
    public function getSpapiEndpoint(): string
    {
        return $this->spapiEndpoint;
    }

    /**
     * @param string $spapiEndpoint
     */
    public function setSpapiEndpoint(string $spapiEndpoint): void
    {
        $this->spapiEndpoint = $spapiEndpoint;
    }

    /**
     * @return null|Closure
     */
    public function getOnUpdateCredentials(): ?Closure
    {
        return $this->onUpdateCredentials;
    }

    /**
     * @param Closure $onUpdateCredentials
     */
    public function setOnUpdateCredentials(Closure $onUpdateCredentials): void
    {
        $this->onUpdateCredentials = $onUpdateCredentials;
    }

    /**
     * @return string
     */
    public function getRoleArn(): ?string
    {
        return $this->roleArn;
    }

    /**
     * @param string $roleArn
     * @return void
     */
    public function setRoleArn(string $roleArn): void
    {
        $this->roleArn = $roleArn;
    }
}

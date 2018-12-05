<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/5
 * Time: 15:31
 */

namespace Saber\Model;
/**
 * 阿里云模型
 * Class AliBucket
 * @package Saber\Model
 */
class AliModel
{
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = trim($type);
    }

    /**
     * @return mixed
     */
    public function getAccessKey()
    {
        return $this->access_key;
    }

    /**
     * @param mixed $access_key
     */
    public function setAccessKey($access_key)
    {
        $this->access_key = trim($access_key);
    }

    /**
     * @return mixed
     */
    public function getSecretKey()
    {
        return $this->secret_key;
    }

    /**
     * @param mixed $secret_key
     */
    public function setSecretKey($secret_key)
    {
        $this->secret_key = trim($secret_key);
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param mixed $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = trim($endpoint);
    }

    /**
     * @return mixed
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * @param mixed $bucket
     */
    public function setBucket($bucket)
    {
        $this->bucket = trim($bucket);
    }

    private $access_key;

    private $secret_key;

    private $endpoint;

    private $bucket;

    private $type = 'oss';
}
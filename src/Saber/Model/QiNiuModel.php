<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/5
 * Time: 15:40
 */

namespace Saber\Model;

/**
 * 七牛云模型
 * Class QiNiuBucket
 * @package Saber\Model
 */
class QiNiuModel
{


    //状态
    private $type ='qiniu';

    private $access_key;

    private $secret_key;
    //区域
    private $bucket;

    //七牛云绑定的url 或者临时域名
    private  $base_url;
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

    /**
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }
    /**
     * @param mixed $base_url
     */
    public function setBaseUrl($base_url)
    {
        $this->base_url = trim($base_url);
    }

}
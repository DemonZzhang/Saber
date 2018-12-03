<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/1
 * Time: 14:13
 */

namespace Saber\Bucket;


class Bucket
{

    // 保存文件名称
    protected $saveName;

    //保存目录
    protected $savePath;

    //访问密钥
    protected $accessKey;
    //密钥
    protected $secretKey;
    //存储空间
    protected $bucket;
    //存储地址
    protected $baseUrl;

    /**
     * Bucket constructor.
     * @param array $config
     */

    protected $drive;

    public function __construct(array $config)
    {
        $this->accessKey = $config['access_key'];
        $this->secretKey = $config['secret_key'];
        $this->bucket = $config['bucket'];
        $this->baseUrl = $config['base_url'];
    }

    /**
     *  设置文件目录
     */
    protected function setFilePath()
    {
        $this->savePath = date('Ymd') . '/';
    }

    /**-
     * 设置名称
     */
    protected function setfileName()
    {
        $this->saveName = date('Ymd') . md5(microtime(true));
    }



}
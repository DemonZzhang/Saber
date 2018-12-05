<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/5
 * Time: 16:22
 */

namespace Saber\Reali;


use Saber\Model\AliModel;

class Bucket
{
    protected $access_key;

    protected $secret_key;

    protected $bucket;

    protected $path;

    protected $name;

    public function __construct($config)
    {
        //ak
        $this->access_key = $config->getAccessKey();
        //sk
        $this->secret_key = $config->getSecretKey();
        //存储空间名称
        $this->bucket = $config->getBucket();
        //保存名称
        $this->saveName();
        //保存路径
        $this->setPath();
    }

    /**
     * 生成路径
     */
    private function setPath()
    {
        $this->path = date('Y') . '/'.date('m').'/'.date('d').'/';
    }

    private function saveName()
    {
        $this->name = date('Ymd') . md5(microtime(true));
    }
}
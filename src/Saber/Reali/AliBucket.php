<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/5
 * Time: 16:16
 */


namespace Saber\Reali;

use OSS\OssClient;
use Saber\Interfaces\UploadInterface;
use Saber\Tools\File;

class AliBucket extends Bucket implements UploadInterface
{
    protected  $endpoint ;

    protected  $object;

    public function __construct($config)
    {
        $this->endpoint = $config->getEndpoint();
        parent::__construct($config);
        $this->setObject();
    }
    private function setObject()
    {
        $this->object= $this->path.$this->name;
    }

    public function upload($file)
    {
       $object =  $this->object;
       $object = $object.'.'.File::CheckType($file);
       $client =  new OssClient($this->access_key,$this->secret_key,$this->endpoint);
       $aa = $client->uploadFile($this->bucket,$object,$file);
       var_dump($aa);
    }
}
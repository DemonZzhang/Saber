<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/5
 * Time: 16:40
 */

namespace Saber\Reali;


use Saber\Interfaces\UploadInterface;

class QiNiuBucket extends Bucket implements UploadInterface
{
    protected $base_url;

    public function __construct($config)
    {
        $this->base_url = $config->getBaseUrl();
        parent::__construct($config);
    }

    public function upload($file)
    {

    }
}
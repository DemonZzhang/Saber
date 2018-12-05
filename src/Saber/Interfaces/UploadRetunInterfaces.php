<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/5
 * Time: 17:09
 */

namespace Saber\Interfaces;


interface UploadRetunInterfaces
{
    //获取上传的url地址
    public function getUrl();
    //获取上传的md5
    public function getMd5();
}
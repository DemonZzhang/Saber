<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/5
 * Time: 16:19
 */

namespace  Saber\Interfaces;
interface UploadInterface
{
    /**上传
     * @param $file
     * @return mixed
     */
    public function upload($file);
}
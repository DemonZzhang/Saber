<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2018/12/1
 * Time: 14:07
 */
namespace Saber\bucket;

use OSS\OssClient;
use saber\interfaces\Upload;
use saber\Tools\FileChek;

/**
 * 阿里云
 * Class AliBucket
 * @package saber\bucket
 */
class AliBucket extends Bucket implements Upload {

	public function __construct(array $config) {
		parent::__construct($config);
		$this->drive = new OssClient($this->accessKey, $this->secretKey, $this->baseUrl);
	}
	/**
	 * 设置文件名称
	 * @param $name
	 */
	public function setName($name) {
		$this->saveName = $name;
	}

	/**
	 * 设置保存路径
	 * @param $path
	 */
	public function setPath($path) {
		$this->savePath = $path;
	}

	/**
	 * 伤残
	 * @param $file
	 */
	public function upload($file) {
		$drive = $this->drive;
		//获取用类型
		$type = FileChek::getFileType($file);
		$drive->uploadFile($this->bucket);
	}

}
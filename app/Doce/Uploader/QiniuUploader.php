<?php


namespace App\Doce\Uploader;


use Qiniu\Auth;

class QiniuUploader
{
    private $access_key;
    private $secret_key;
    private $bucket;

    public function __construct()
    {
        $this->access_key = env('QINIU_AK');
        $this->secret_key = env('QINIU_SK');
        $this->bucket = env('QINIU_BUCKET');
    }

    protected function getAuth()
    {
        return new Auth($this->access_key, $this->secret_key);
    }

    protected function getBucket()
    {
        return $this->bucket;
    }


    public function getUploadToken()
    {
        return $this->getAuth()->uploadToken($this->getBucket());
    }
}
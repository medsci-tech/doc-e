<?php


namespace App\Doce\Uploader;


use Qiniu\Auth;

/**
 * Class QiniuUploader
 * @package App\Doce\Uploader
 */
class QiniuUploader
{
    /**
     * @var string
     */
    private $access_key;
    /**
     * @var string
     */
    private $secret_key;
    /**
     * @var string
     */
    private $bucket;

    /**
     * QiniuUploader constructor.
     */
    public function __construct()
    {
        $this->access_key = env('QINIU_AK');
        $this->secret_key = env('QINIU_SK');
        $this->bucket = env('QINIU_BUCKET');
    }

    /**
     * 获取七牛Auth对象
     *
     * @return Auth
     */
    protected function getAuth()
    {
        return new Auth($this->access_key, $this->secret_key);
    }

    /**
     * 获取空间名
     *
     * @return string
     */
    protected function getBucket()
    {
        return $this->bucket;
    }

    /**
     * 获取七牛uploadToken
     *
     * @return mixed|string
     */
    public function getUploadToken()
    {
        $key = $this->getUploadTokenKeyInCache();
        $uploadToken = \Cache::get($key);
        if (!$uploadToken) {
            $uploadToken = $this->getAuth()->uploadToken($this->getBucket());
            \Cache::put($key, $uploadToken, 60);
        }

        return $uploadToken;
    }

    /**
     * @return string
     */
    protected function getUploadTokenKeyInCache()
    {   
        return 'QINIU_UPLOAD_TOKEN';
    }
}
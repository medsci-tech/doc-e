<?php

namespace App\Http\Controllers\Upload;

use App\Doce\Uploader\QiniuUploader;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function uploadToken()
    {
        return (new QiniuUploader())->getUploadToken();
    }
}

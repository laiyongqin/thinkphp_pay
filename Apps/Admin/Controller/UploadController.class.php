<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
use Common\Model\StoreModel;
class UploadController extends BaseController {
    
    //文件上传
    public function fileUpload()
    {
        $upload = new Upload(); // 实例化上传类
    }
}
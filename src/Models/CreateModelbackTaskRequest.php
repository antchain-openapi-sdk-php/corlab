<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\CORLAB\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateModelbackTaskRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 文件唯一ID
    /**
     * @description 待上传文件
     *
     * @var Stream
     */
    public $fileObject;

    /**
     * @description 待上传文件名
     *
     * @var string
     */
    public $fileObjectName;

    /**
     * @var string
     */
    public $fileId;

    // 创建任务时回溯的产品
    /**
     * @var string[]
     */
    public $productCodes;

    // 样本记录名，不传为file_id
    /**
     * @var string
     */
    public $sampleFileName;

    // 目前只支持MD5,SHA_256两种加密方式
    /**
     * @var string
     */
    public $keyType;

    // 客户方唯一code
    /**
     * @var string
     */
    public $uniqueCode;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'fileId'            => 'file_id',
        'productCodes'      => 'product_codes',
        'sampleFileName'    => 'sample_file_name',
        'keyType'           => 'key_type',
        'uniqueCode'        => 'unique_code',
    ];

    public function validate()
    {
        Model::validateRequired('fileId', $this->fileId, true);
        Model::validateRequired('productCodes', $this->productCodes, true);
        Model::validateRequired('sampleFileName', $this->sampleFileName, true);
        Model::validateRequired('keyType', $this->keyType, true);
        Model::validateRequired('uniqueCode', $this->uniqueCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->fileObject) {
            $res['fileObject'] = $this->fileObject;
        }
        if (null !== $this->fileObjectName) {
            $res['fileObjectName'] = $this->fileObjectName;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->productCodes) {
            $res['product_codes'] = $this->productCodes;
        }
        if (null !== $this->sampleFileName) {
            $res['sample_file_name'] = $this->sampleFileName;
        }
        if (null !== $this->keyType) {
            $res['key_type'] = $this->keyType;
        }
        if (null !== $this->uniqueCode) {
            $res['unique_code'] = $this->uniqueCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelbackTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['fileObject'])) {
            $model->fileObject = $map['fileObject'];
        }
        if (isset($map['fileObjectName'])) {
            $model->fileObjectName = $map['fileObjectName'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['product_codes'])) {
            if (!empty($map['product_codes'])) {
                $model->productCodes = $map['product_codes'];
            }
        }
        if (isset($map['sample_file_name'])) {
            $model->sampleFileName = $map['sample_file_name'];
        }
        if (isset($map['key_type'])) {
            $model->keyType = $map['key_type'];
        }
        if (isset($map['unique_code'])) {
            $model->uniqueCode = $map['unique_code'];
        }

        return $model;
    }
}

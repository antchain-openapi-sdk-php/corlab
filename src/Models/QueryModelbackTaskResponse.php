<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\CORLAB\Models;

use AlibabaCloud\Tea\Model;

class QueryModelbackTaskResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 任务唯一id
    /**
     * @var string
     */
    public $bizCode;

    // 任务状态
    /**
     * @var string
     */
    public $status;

    // 任务对应产品结果信息
    /**
     * @var ResultContext[]
     */
    public $resultContexts;

    // 任务完成时间
    /**
     * @var string
     */
    public $finishTime;

    // 异步任务失败后，响应客户任务失败原因错误码，任务正常值为空
    /**
     * @var string
     */
    public $errorCode;

    // 异步任务失败后，响应客户错误失败原因，任务正常值为空
    /**
     * @var string
     */
    public $errorMsg;
    protected $_name = [
        'reqMsgId'       => 'req_msg_id',
        'resultCode'     => 'result_code',
        'resultMsg'      => 'result_msg',
        'bizCode'        => 'biz_code',
        'status'         => 'status',
        'resultContexts' => 'result_contexts',
        'finishTime'     => 'finish_time',
        'errorCode'      => 'error_code',
        'errorMsg'       => 'error_msg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->resultContexts) {
            $res['result_contexts'] = [];
            if (null !== $this->resultContexts && \is_array($this->resultContexts)) {
                $n = 0;
                foreach ($this->resultContexts as $item) {
                    $res['result_contexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->finishTime) {
            $res['finish_time'] = $this->finishTime;
        }
        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryModelbackTaskResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['biz_code'])) {
            $model->bizCode = $map['biz_code'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['result_contexts'])) {
            if (!empty($map['result_contexts'])) {
                $model->resultContexts = [];
                $n                     = 0;
                foreach ($map['result_contexts'] as $item) {
                    $model->resultContexts[$n++] = null !== $item ? ResultContext::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['finish_time'])) {
            $model->finishTime = $map['finish_time'];
        }
        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }
        if (isset($map['error_msg'])) {
            $model->errorMsg = $map['error_msg'];
        }

        return $model;
    }
}

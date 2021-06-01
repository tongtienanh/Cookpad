<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 6/2/19
 * Time: 18:14
 */

namespace Workable\Support\Traits;


trait ResponseHelperTrait
{
    /**
     * Trả về kết quả fail
     * @param string $message
     * @param string $type
     * @return array
     */
    public function respondError($message = 'error', $type= 'error')
    {
        return response([
            'code'    => -1,
            'message' => $message,
            'type'    => $type
        ]);
    }

    /**
     * Trả về kết quả thành công: select, delete
     * @param string $message
     * @param array  $data
     * @param string $type
     * @return array
     */
    public function respondSuccess($message = 'success', $data = [], $type='success')
    {
        return response([
            'code'    => 1,
            'message' => $message,
            'type'    => $type,
            'data'    => $data,
        ]);
    }

    /**
     * Tạo thành công
     */
    public function respondCreateSuccess($message = 'success', $data = [], $type='success')
    {
        return response([
            'code'    => 1,
            'message' => $message,
            'type'    => $type,
            'data'    => $data,
        ]);
    }

    /**
     * Tạo thất bại
     */
    public function respondCreateFail($message = 'error', $type= 'error')
    {
        return response([
            'code'    => -1,
            'message' => $message,
            'type'    => $type
        ]);
    }

    /**
     * Update thành công
     */
    public function respondUpdateSuccess($message = 'success', $type= 'success')
    {
        return response([
            'code'    => 1,
            'message' => $message,
            'type'    => $type
        ]);
    }

    /**
     * Update thất bại
     */
    public function respondUpdateFail($message = 'error', $type= 'error')
    {
        return response([
            'code'    => -1,
            'message' => $message,
            'type'    => $type
        ]);
    }
}
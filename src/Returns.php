<?php
/**
 * @author Jakson Fischer <jakson.jfischer@gmail.com>
 * This class is responsible for standardizing returns for the system
 */
class Returns
{
    /**
     * @author Jakson Fischer <jakson.jfischer@gmail.com>
     * Function to return all data in array
     * @param bool $status
     * @param string $message
     * @param mixed $errorCode
     * @param mixed $errorType
     * @param mixed $httpStatus
     * @return array
     */
    public static function toArray(bool $status, string $message, $errorCode = NULL, $errorType = NULL, $httpStatus = NULL)
    {
        return [
            'status'        => $status,
            'msg'           => $message,
            'errorCode'     => $errorCode,
            'errorType'     => $errorType,
            'httpStatus'    => $httpStatus
        ];
    }

    /**
     * @author Jakson Fischer <jakson.jfischer@gmail.com>
     * Function to return data in json
     * @param bool $status
     * @param string $message
     * @param mixed $errorCode
     * @param mixed $errorType
     * @param mixed $httpStatus
     * @return bool|string
     */
    public static function toJson(bool $status, string $message, $errorCode = NULL, $errorType = NULL, $httpStatus = NULL)
    {
        return json_encode(self::toArray($status, $message, $errorCode, $errorType, $httpStatus));
    }

    /**
     * @author Jakson Fischer <jakson.jfischer@gmail.com>
     * Function to return in array with data
     * @param bool $status
     * @param string $message
     * @param mixed $errorCode
     * @param mixed $errorType
     * @param mixed $httpStatus
     * @return array[]
     */
    public static function arrayDataReturn(bool $status, string $message, $errorCode = NULL, $errorType = NULL, $httpStatus = NULL)
    {
        $toArray = self::toArray($status, $message, $errorCode, $errorType, $httpStatus);

        return [
            'data' => $toArray
        ];
    }

    /**
     * @author Jakson Fischer <jakson.jfischer@gmail.com>
     * Function to return in json with data
     * @param bool $status
     * @param string $message
     * @param mixed $errorCode
     * @param mixed $errorType
     * @param mixed $httpStatus
     * @return bool|string
     */
    public static function jsonDataReturn(bool $status, string $message, $errorCode = NULL, $errorType = NULL, $httpStatus = NULL)
    {
        $toArray = self::toArray($status, $message, $errorCode, $errorType, $httpStatus);

        return json_encode(
            [
                'data'=> $toArray
            ]
        );
    }
}

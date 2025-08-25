<?php

namespace Config;

use CodeIgniter\Config\BaseService;

use App\Models\SystemLogsModel;
use App\Models\UserModel;
use App\Models\SessionModel;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    /*
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         return static::getSharedInstance('example');
     *     }
     *
     *     return new \CodeIgniter\Example();
     * }
     */

    public static function systemlogsModel($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('systemlogsModel');
        }

        return new SystemLogsModel();
    }

    public static function userModel(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('userModel');
        }

        return new UserModel();
    }

    public static function sessionModel(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('sessionModel');
        }

        return new SessionModel();
    }

    
}

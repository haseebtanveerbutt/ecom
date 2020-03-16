<?php

namespace App\Custom_Helpers;

class ConstantHelper
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    
    public static function listStatuses()
    {
        return [
            self::STATUS_ENABLED => 'Enabled',
            self::STATUS_DISABLED => 'Disabled',  
        ];
    }
}
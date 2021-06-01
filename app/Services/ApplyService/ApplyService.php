<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/24/19
 * Time: 07:45
 */

namespace App\Services\ApplyService;


use App\Services\ApplyService\ApplyFactory\ApplyCVFactory;
use App\Services\ApplyService\ApplyFactory\ApplyDefaultFactory;
use App\Services\ApplyService\ApplyFactory\ApplyProfileFactory;

class ApplyService
{
    const TYPE_DEFAULT = 'DEFAULT';
    const TYPE_PROFILE = 'PROFILE';
    const TYPE_CV      = 'CV';

    private function createApplyFactory($driver = null, $config=[])
    {
        switch ($driver)
        {
            case self::TYPE_CV:
                return new ApplyCVFactory($config);

            case self::TYPE_PROFILE:
                return new ApplyProfileFactory($config);

            case self::TYPE_DEFAULT:
                return new ApplyDefaultFactory($config);
        }

        throw new \Exception("Unsupported driver apply [{$driver}]");
    }

    public function makeApply()
    {
        $driver = null;
        $data   = [];
        $applyFactory = $this->createApplyFactory($driver);
        $applyFactory->apply($data);
    }
}
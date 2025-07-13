<?php

use Hanafalah\ModuleMcu\{
    Models as ModuleMCU,
    Commands as ModuleMcuCommands
};
use Hanafalah\ModuleMcu\Contracts;

return [
    'namespace' => 'Hanafalah\\ModuleMcu',
    'app' => [
        'contracts' => [
            //ADD YOUR CONTRACTS HERE
        ]
    ],
<<<<<<< HEAD
    'app' => [
        'contracts' => [
            'mcu_category'            => Contracts\McuCategory::class,
            'mcu_package'             => Contracts\McuPackage::class,
            'mcu_service_item'        => Contracts\McuServiceItem::class,
            'mcu_service_price'       => Contracts\McuServicePrice::class,
            'mcu_visit_registration'  => Contracts\McuVisitRegistration::class,
            'module-mcu'              => Contracts\ModuleMcu::class,
        ],
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts'
=======
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'database' => 'Database',
        'data' => 'Data',
        'resource' => 'Resources',
        'migration' => '../assets/database/migrations'
>>>>>>> 5b82b07fdac87c6233746d8d74c3e111d7eb4639
    ],
    'database' => [
        'models' => [

        ]
    ],
    'commands' => [
        ModuleMcuCommands\InstallMakeCommand::class
    ]
];

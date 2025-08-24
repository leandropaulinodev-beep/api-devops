<?php

return [
    'default_branch' => env('CICD_BRANCH', 'main'),
    'deploy_path' => env('CICD_DEPLOY_PATH', '/var/www/html'),
];

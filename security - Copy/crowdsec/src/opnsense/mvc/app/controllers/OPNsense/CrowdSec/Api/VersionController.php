<?php

// SPDX-License-Identifier: MIT
// SPDX-FileCopyrightText: © 2021 CrowdSec <info@crowdsec.net>

namespace Reticen8\CrowdSec\Api;

use Reticen8\Base\ApiControllerBase;
use Reticen8\CrowdSec\CrowdSec;
use Reticen8\Core\Backend;

/**
 * @package Reticen8\CrowdSec
 */
class VersionController extends ApiControllerBase
{
    /**
     * retrieve version description
     * @return version description
     * @throws \Reticen8\Base\ModelException
     * @throws \ReflectionException
     */
    public function getAction()
    {
        $backend = new Backend();
        return $backend->configdRun("crowdsec version");
    }
}

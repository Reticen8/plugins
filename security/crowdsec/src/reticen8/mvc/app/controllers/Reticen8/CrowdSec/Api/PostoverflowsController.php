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
class PostoverflowsController extends ApiControllerBase
{
    /**
     * retrieve list of registered postoverflows
     * @return array of postoverflows
     * @throws \Reticen8\Base\ModelException
     * @throws \ReflectionException
     */
    public function getAction()
    {
        $backend = new Backend();
        $bckresult = json_decode(trim($backend->configdRun("crowdsec postoverflows-list")), true);
        if ($bckresult !== null) {
            // only return valid json type responses
            return $bckresult;
        }
        return array("message" => "unable to list postoverflows");
    }
}

<?php

// SPDX-License-Identifier: MIT
// SPDX-FileCopyrightText: © 2021 CrowdSec <info@crowdsec.net>

namespace Reticen8\CrowdSec;

/**
 * Class OverviewController
 * @package Reticen8\CrowdSec
 */
class OverviewController extends \Reticen8\Base\IndexController
{
    public function indexAction()
    {
        $this->view->pick('Reticen8/CrowdSec/overview');
    }
}

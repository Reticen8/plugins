<?php

// SPDX-License-Identifier: MIT
// SPDX-FileCopyrightText: © 2021 CrowdSec <info@crowdsec.net>

namespace Reticen8\CrowdSec;

/**
 * Class GeneralController
 * @package Reticen8\CrowdSec
 */
class GeneralController extends \Reticen8\Base\IndexController
{
    public function indexAction()
    {
        $this->view->pick('Reticen8/CrowdSec/general');
        $this->view->generalForm = $this->getForm("general");
    }
}

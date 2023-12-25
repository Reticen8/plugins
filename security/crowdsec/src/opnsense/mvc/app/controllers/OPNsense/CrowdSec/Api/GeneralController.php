<?php

// SPDX-License-Identifier: MIT
// SPDX-FileCopyrightText: © 2021 CrowdSec <info@crowdsec.net>

namespace Reticen8\CrowdSec\Api;

use Reticen8\Base\ApiMutableModelControllerBase;

/**
 * @package Reticen8\CrowdSec
 */
class GeneralController extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'general';
    protected static $internalModelClass = '\Reticen8\CrowdSec\General';
}

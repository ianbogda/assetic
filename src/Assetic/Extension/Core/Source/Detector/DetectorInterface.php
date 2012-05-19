<?php

/*
 * This file is part of Assetic, an OpenSky project.
 *
 * (c) 2010-2012 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Assetic\Extension\Core\Source\Detector;

use Assetic\Extension\Core\Source\SourceInterface;

/**
 * Determines the MIME type of a source.
 */
interface DetectorInterface
{
    function detectMimeType(SourceInterface $source);
}
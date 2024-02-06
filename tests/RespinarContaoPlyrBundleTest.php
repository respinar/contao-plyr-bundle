<?php

declare(strict_types=1);

/*
 * This file is part of Contao Plyr Bundle.
 *
 * (c) Hamid Peywasti 2024 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\ContaoPlyr\Tests;

use Respinar\ContaoPlyr\RespinarContaoPlyrBundle;
use PHPUnit\Framework\TestCase;

class RespinarContaoPlyrBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new RespinarContaoPlyrBundle();

        $this->assertInstanceOf('Respinar\ContaoPlyr\RespinarContaoPlyrBundle', $bundle);
    }
}
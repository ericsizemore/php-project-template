<?php

declare(strict_types=1);

/**
 * This file is part of Esi\PhpProjectTemplate.
 *
 * (c) Eric Sizemore <admin@secondversion.com>
 *
 * This source file is subject to the MIT license. For the full copyright and
 * license information, please view the LICENSE file that was distributed with
 * this source code.
 */

namespace Esi\PhpProjectTemplate\Tests;

use Esi\PhpProjectTemplate\PhpProjectTemplate;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
#[CoversClass(PhpProjectTemplate::class)]
final class PhpProjectTemplateTest extends TestCase
{
    public function testFoo(): void
    {
        self::assertSame('bar', (new PhpProjectTemplate())->foo());
    }
}

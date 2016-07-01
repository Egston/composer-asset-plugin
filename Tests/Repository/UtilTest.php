<?php

/*
 * This file is part of the Fxp Composer Asset Plugin package.
 *
 * (c) François Pluchino <francois.pluchino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fxp\Composer\AssetPlugin\Tests\Repository;

use Fxp\Composer\AssetPlugin\Repository\Util;

/**
 * Repository Util Tests.
 *
 * @author François Pluchino <francois.pluchino@gmail.com>
 */
class UtilTest extends \PHPUnit_Framework_TestCase
{
    public function getPackageNames()
    {
        return array(
            array('vendor/package',        'vendor/package',        null),
            array('vendor/package-name',   'vendor/package-name',   null),
            array('vendor/package_name',   'vendor/package_name',   null),
            array('vendor/package-1',      'vendor/package-1',      null),
            array('vendor/package_1',      'vendor/package_1',      null),
            array('vendor/package-name-1', 'vendor/package-name-1', null),
            array('vendor/package_name_1', 'vendor/package_name_1', null),
            array('vendor/package-1.0',    'vendor/package',        '1.0'),
            array('vendor/package-1.x',    'vendor/package',        '1.x'),
            array('vendor/package-1.X',    'vendor/package',        '1.X'),
            array('vendor/package-1.0.0',  'vendor/package',        '1.0.0'),
            array('vendor/package-1.0.x',  'vendor/package',        '1.0.x'),
            array('vendor/package-1.0.X',  'vendor/package',        '1.0.X'),

            array('vendor-name/package',        'vendor-name/package',          null),
            array('vendor-name/package-name',   'vendor-name/package-name',     null),
            array('vendor-name/package-1',      'vendor-name/package-1',        null),
            array('vendor-name/package-name-1', 'vendor-name/package-name-1',   null),
            array('vendor-name/package-1.0',    'vendor-name/package',          '1.0'),
            array('vendor-name/package-1.x',    'vendor-name/package',          '1.x'),
            array('vendor-name/package-1.X',    'vendor-name/package',          '1.X'),
            array('vendor-name/package-1.0.0',  'vendor-name/package',          '1.0.0'),
            array('vendor-name/package-1.0.x',  'vendor-name/package',          '1.0.x'),
            array('vendor-name/package-1.0.X',  'vendor-name/package',          '1.0.X'),

            array('vendor_name/package',        'vendor_name/package',          null),
            array('vendor_name/package-name',   'vendor_name/package-name',     null),
            array('vendor_name/package-1',      'vendor_name/package-1',        null),
            array('vendor_name/package-name-1', 'vendor_name/package-name-1',   null),
            array('vendor_name/package-1.0',    'vendor_name/package',          '1.0'),
            array('vendor_name/package-1.x',    'vendor_name/package',          '1.x'),
            array('vendor_name/package-1.X',    'vendor_name/package',          '1.X'),
            array('vendor_name/package-1.0.0',  'vendor_name/package',          '1.0.0'),
            array('vendor_name/package-1.0.x',  'vendor_name/package',          '1.0.x'),
            array('vendor_name/package-1.0.X',  'vendor_name/package',          '1.0.X'),
        );
    }

    /**
     * @dataProvider getPackageNames
     *
     * @param string $name
     * @param string $validName
     */
    public function testConvertAliasName($name, $validName)
    {
        $this->assertSame($validName, Util::convertAliasName($name));
    }

    /**
     * @dataProvider getPackageNames
     *
     * @param string $name
     * @param string $validName
     * @param string $validVersion
     */
    public function testParseAliasName($name, $validName, $validVersion)
    {
        $this->assertSame(array($validName, $validVersion), Util::parseAliasName($name));
    }
}

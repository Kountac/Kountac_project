<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Intl\Tests\DateFormatter\Verification;

use Symfony\Component\Intl\DateFormatter\IntlDateFormatter;
use Symfony\Component\Intl\Tests\DateFormatter\AbstractIntlDateFormatterTest;
use Symfony\Component\Intl\Util\IntlTestHelper;

/**
 * Verifies that {@link AbstractIntlDateFormatterTest} matches the behavior of
 * the {@link \IntlDateFormatter} class in a specific version of ICU.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IntlDateFormatterTest extends AbstractIntlDateFormatterTest
{
    protected function setUp()
    {
        IntlTestHelper::requireFullIntl($this, false);

        parent::setUp();
    }

    /**
     * It seems IntlDateFormatter caches the timezone id when not explicitly set via constructor or by the
     * setTimeZoneId() method. Since testFormatWithDefaultTimezoneIntl() runs using the default environment
     * time zone, this test would use it too if not running in a separated process.
     *
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testFormatWithTimezoneFromEnvironmentVariable()
    {
        parent::testFormatWithTimezoneFromEnvironmentVariable();
    }

    /**
     * @dataProvider formatTimezoneProvider
     * @requires PHP 5.5
     */
    public function testFormatTimezone($pattern, $timezone, $expected)
    {
        IntlTestHelper::requireFullIntl($this, '59.1');

        parent::testFormatTimezone($pattern, $timezone, $expected);
    }

    public function testFormatUtcAndGmtAreSplit()
    {
        IntlTestHelper::requireFullIntl($this, '59.1');

        parent::testFormatUtcAndGmtAreSplit();
    }

    /**
     * @dataProvider dateAndTimeTypeProvider
     */
    public function testDateAndTimeType($timestamp, $datetype, $timetype, $expected)
    {
        IntlTestHelper::requireFullIntl($this, '59.1');

        parent::testDateAndTimeType($timestamp, $datetype, $timetype, $expected);
    }

    protected function getDateFormatter($locale, $datetype, $timetype, $timezone = null, $calendar = IntlDateFormatter::GREGORIAN, $pattern = null)
    {
        IntlTestHelper::requireFullIntl($this, '55.1');

        if (!$formatter = new \IntlDateFormatter($locale, $datetype, $timetype, $timezone, $calendar, $pattern)) {
            throw new \InvalidArgumentException(intl_get_error_message());
        }

        return $formatter;
    }

    protected function getIntlErrorMessage()
    {
        return intl_get_error_message();
    }

    protected function getIntlErrorCode()
    {
        return intl_get_error_code();
    }

    protected function isIntlFailure($errorCode)
    {
        return intl_is_failure($errorCode);
    }
}

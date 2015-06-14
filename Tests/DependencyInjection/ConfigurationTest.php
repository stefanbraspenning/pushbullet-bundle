<?php

namespace SB\Bundle\PushbulletBundle\Tests\DependencyInjection;

use SB\Bundle\PushbulletBundle\DependencyInjection\Configuration;
use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;

class ConfigurationTest extends AbstractConfigurationTestCase
{
    public function testValuesAreValidWithTokenOrNull()
    {
        $this->assertConfigurationIsValid(
            [
                [
                    'api_token' => '1234',
                ]
            ]
        );

        $this->assertConfigurationIsValid(
            [
                [
                    'api_token' => null,
                ]
            ]
        );

        $this->assertConfigurationIsValid(
            [
                []
            ]
        );
    }

    public function testValuesAreInvalidIfTypeOfApiTokenIsInvalid()
    {
        $this->assertConfigurationIsInvalid([
            [
                'api_token' => [],
            ]
        ], 'api_token');

        $this->assertConfigurationIsInvalid([
            [
                'api_token' => new \stdClass(),
            ]
        ], 'api_token');
    }

    /**
     * {@inheritdoc}
     */
    protected function getConfiguration()
    {
        return new Configuration();
    }
}

<?php

namespace SB\Bundle\PushbulletBundle\Tests\DependencyInjection;

use SB\Bundle\PushbulletBundle\DependencyInjection\SBPushbulletExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class ExtensionTest extends AbstractExtensionTestCase
{
    public function testParameters()
    {
        $this->load([
            'api_token' => '1234',
        ]);

        $this->assertContainerBuilderHasParameter('sb_pushbullet.api_token', '1234');
    }

    public function testServiceDefinitions()
    {
        $this->load([
            'api_token' => '1234',
        ]);

        $this->assertContainerBuilderHasService('sb_pushbullet.api_client', 'Pushbullet\Pushbullet');
        $this->assertContainerBuilderHasServiceDefinitionWithArgument('sb_pushbullet.api_client', 0, '%sb_pushbullet.api_token%');
    }

    /**
     * {@inheritdoc}
     */
    protected function getContainerExtensions()
    {
        return [new SBPushbulletExtension()];
    }
}

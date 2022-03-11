<?php

namespace Ujamii\OpenImmo\Tests\Generator\ApiGenerator;

class ApiGeneratorTest extends FileGeneratingTest
{
    public function testDefaultTargetFolder(): void
    {
        $this->assertEquals('./src/API/', $this->generator->getTargetFolder());
    }

    public function testSetExistingTargetFolder(): void
    {
        $folder = sys_get_temp_dir();
        $this->generator->setTargetFolder($folder);
        $this->assertEquals($folder, $this->generator->getTargetFolder());
    }

    /**
     * @throws \Exception
     */
    public function testSetNonExistingTargetFolder(): void
    {
        $this->expectException(\Exception::class);
        $folder = '/dev/null';
        $this->generator->setTargetFolder($folder);
    }

    public function testWipeTargetFolder(): void
    {
        $targetFolder = $this->tmpDir;
        $filename = $targetFolder . 'testfile.php';

        $content = 'This file should NOT be wiped';
        file_put_contents($filename, $content);
        $this->generator->generateApiClasses('./tests/fixtures/Ausblick.xsd', false, $this->tmpDir);
        $this->assertFileExists($filename);
        $this->assertEquals($content, file_get_contents($filename));
        unlink($filename);

        $filename = $targetFolder . 'testfile2.php';
        $content = 'This file should be wiped';
        file_put_contents($filename, $content);
        $this->generator->generateApiClasses('./tests/fixtures/Ausblick.xsd', true, $this->tmpDir);
        $this->assertFileDoesNotExist($filename);

        // test wipe by default
        $filename = $targetFolder . 'testfile3.php';
        $content = 'This file should be wiped';
        file_put_contents($filename, $content);
        $this->generator->setTargetFolder($this->tmpDir);
        $this->generator->generateApiClasses('./tests/fixtures/Ausblick.xsd');
        $this->assertFileDoesNotExist($filename);
    }
}

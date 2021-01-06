<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class AnwesenheitsSimulationValidationTest extends TestCaseSymconValidation
{
    public function testValidateModuleLibrary(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateModule(): void
    {
        $this->validateModule(__DIR__ . '/../Module');
        $this->assertFalse(false);
    }
}
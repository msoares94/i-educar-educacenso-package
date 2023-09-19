<?php

namespace iEducar\Packages\Educacenso\Tests\Import;

use Carbon\Carbon;
use iEducar\Packages\Educacenso\Services\HandleFileService;
use iEducar\Packages\Educacenso\Services\ImportServiceFactory;
use Illuminate\Http\UploadedFile;
use Tests\EducacensoTestCase;

class Import2021Test extends EducacensoTestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->year = 2021;
        $this->dateEnrollment = new Carbon('2021-01-01');

        $yearImportService = ImportServiceFactory::createImportService(
            $this->year,
            $this->dateEnrollment->format('d/m/Y')
        );

        $importFileService = new HandleFileService($yearImportService, $this->user);

        $importFileService->handleFile(new UploadedFile(
            resource_path('../tests/Educacenso/importacao_educacenso_2021.txt'),
            'importacao_educacenso_2021.txt'
        ));
    }
}

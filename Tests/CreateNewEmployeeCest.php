<?php

declare(strict_types=1);


use Codeception\Util\HttpCode;
use Tests\Support\ApiTester;

class CreateNewEmployeeCest
{
    public function CreateEmployee(ApiTester $apiTester): void
    {

        $apiTester->wantToTest('new employee added');

        $requestBody = [
            'name' => 'Kuku',
            'email' => 'kuku@mail.ru',
            'position' => 'QA',
            'age' => 21
        ];

        $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::CREATED);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseMatchesJsonType(
            [
                'id' => 'integer'

            ]
        );
    }

    public function CreateNewEmployeeNullName(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('new employee null name');

        $requestBody = [
            'name' => '',
            'email' => 'room@mail.ru',
            'position' => 'QA',
            'age' => 28
        ];

        $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::BAD_REQUEST);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => 'string'

            ]
        );
    }

    public function CreateNewEmployeeNullEmail(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('new employee null email');

        $requestBody = [
            'name' => 'Robert',
            'email' => '',
            'position' => 'TA',
            'age' => 33
        ];

        $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::BAD_REQUEST);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => 'string'

            ]
        );
    }

    public function CreateNewEmployeeNullPosition(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('new employee null position');

        $requestBody = [
            'name' => 'YoYo',
            'email' => 'yoyo@mail.ru',
            'position' => '',
            'age' => 31
        ];

        $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::BAD_REQUEST);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => 'string'

            ]
        );
    }

    public function CreateNewEmployeeNullAge(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('new employee null age');

        $requestBody = [
            'name' => 'Root',
            'email' => 'root@mail.ru',
            'position' => 'Dev',
            'age' => null
        ];

        $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::BAD_REQUEST);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => 'string'

            ]
        );
    }

    public function CreateNewEmployeeStringAge(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('new employee string age');

        $requestBody = [
            'name' => 'Soso',
            'email' => 'soso@mail.ru',
            'position' => 'Dev',
            'age' => 'asd'
        ];

        $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::BAD_REQUEST);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => 'string'

            ]
        );
    }

    public function CreateNewEmployeeInvalidEmail(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('new employee invalid email');

        $requestBody = [
            'name' => 'try',
            'email' => 'asdasd',
            'position' => 'QA',
            'age' => 27
        ];

        $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::BAD_REQUEST);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => 'string'

            ]
        );
    }

    public function CreateNewEmployeeUniqueEmail(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('new employee unique email');

        $requestBody = [
            'name' => 'Kuku',
            'email' => 'kuku@mail.ru',
            'position' => 'QA',
            'age' => 21
        ];

        $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::BAD_REQUEST);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => 'string'

            ]
        );
    }
}
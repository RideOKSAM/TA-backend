<?php

//declare(strict_types=1);

use Codeception\Util\HttpCode;
use Tests\Support\ApiTester;

class DeleteEmployeeIdCest
{
    private string $emId;

    public function PostEmployeeId(ApiTester $apiTester): void
    {
        $requestBody = [
            'name' => 'Willow',
            'email' => 'Willow@mail.ru',
            'position' => 'Commandos',
            'age' => 29
        ];

        $response = $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::CREATED);

        $this->emId = $response['id'];

    }

    public function DeleteEmployeeId(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('Delete Employee id');

        $response = $apiTester->sendDelete("remove/$this->emId");

        $apiTester->seeResponseCodeIs(HttpCode::NO_CONTENT);
    }
    public function DeleteEmployeeNullId(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('Delete Employee Null id');

        $response = $apiTester->sendDelete("remove/0");

        $apiTester->seeResponseCodeIs(HttpCode::NO_CONTENT);
    }
    public function DeleteEmployeeNoId(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('Delete Employee No id');

        $response = $apiTester->sendDelete("remove/9999");

        $apiTester->seeResponseCodeIs(HttpCode::NO_CONTENT);
    }
    public function DeleteEmployeeIncorrectId(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('Delete Employee Incorrect id');

        $response = $apiTester->sendDelete("remove/asd");

        $apiTester->seeResponseCodeIs(HttpCode::INTERNAL_SERVER_ERROR);
    }
    public function getEmployeeDelId(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('get Employee id');

        $response = $apiTester->sendGet($this->emId);

        $apiTester->seeResponseCodeIs(HttpCode::NOT_FOUND);
    }
}



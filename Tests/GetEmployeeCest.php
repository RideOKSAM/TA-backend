<?php

use Codeception\Util\HttpCode;
use PHPUnit\Framework\Attributes\After;
use PHPUnit\Framework\Attributes\Before;
use Tests\Support\ApiTester;

class GetEmployeeCest
{
    private string $emId;

    #[Before('GetEmployee')]
    public function Precondition(ApiTester $apiTester): void
    {

        $requestBody = [
            'name' => 'Wilson',
            'email' => 'Wilson@mail.ru',
            'position' => 'Commandos',
            'age' => 34
        ];
        $response = $apiTester->sendPostAsJson('add', $requestBody);

        $apiTester->seeResponseCodeIs(HttpCode::CREATED);

        $this->emId = $response['id'];

    }

    public function GetEmployee(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('Get Employee id');

        $apiTester->sendGet($this->emId);

        $apiTester->seeResponseCodeIs(HttpCode::OK);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseContainsJson(
            [
                'id' => $this->emId,
                'name' => 'Wilson',
                'email' => 'Wilson@mail.ru',
                'position' => 'Commandos',
                'age' => 34
            ]

        );

    }

    public function GetEmployeeNullId(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('Get Employee Null id');

        $apiTester->sendGet('0');

        $apiTester->seeResponseCodeIs(HttpCode::INTERNAL_SERVER_ERROR);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseContainsJson(
            [
                'message'=> 'Internal Server Error'
            ]

        );

    }

    public function GetEmployeeNoId(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('Get Employee No id');

        $apiTester->sendGet('9999');

        $apiTester->seeResponseCodeIs(HttpCode::NOT_FOUND);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseContainsJson(
            [
                'message'=> 'Employee not found'
            ]

        );

    }

    public function GetEmployeeIncorrectId(ApiTester $apiTester): void
    {
        $apiTester->wantToTest('Get Employee Incorrect id');

        $apiTester->sendGet('asd');

        $apiTester->seeResponseCodeIs(HttpCode::INTERNAL_SERVER_ERROR);

        $apiTester->seeResponseIsJson();

        $apiTester->seeResponseContainsJson(
            [
                'message'=> 'Internal Server Error'
            ]

        );

    }

    #[After('GetEmployee')]
    public function PostCondition(ApiTester $apiTester): void
    {
        $apiTester->sendDelete("remove/$this->emId");

        $apiTester->seeResponseCodeIs(HttpCode::NO_CONTENT);


    }
}
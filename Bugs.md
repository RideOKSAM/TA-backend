﻿#  Баг-репорты

## Баг №1. Обязательное для заполнения поле "Name"(POST)

Предшествующие условия:
1. Headers request: Content-Type: application/json
2. Тестовые данные: 
Параметры в случае POST передаются в теле запроса в JSON объекте.
*  Name = 
* email = kuku@mail.ru
* position = QA
* age = 21

Тело запроса:

		{
		"name": "",
		"email": "kuku@mail.ru",
		"position": "QA",
		"age": 21
		}
	
Шаги:
1. Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
2. Проверить код состояния
3. Проверить тело ответа от сервера

Фактический результат: Полученный результат: код ответа 201 Created

		{
			"id": 307
		}

Ожидаемый результат: Полученный результат: Код ответа 400 Bad Request

		{
			"message": "validation failed"
		}

Окружение: Windows 10, Google Chrom.Версия 113.0.5672.93.

Серьезность: Major 

## Баг №2. Обязательное для заполнения поле "Position"(POST)

Предшествующие условия:
1. Headers request: Content-Type: application/json
2. Тестовые данные: 
Параметры в случае POST передаются в теле запроса в JSON объекте.
*  Name = Kuku
* email = kuku@mail.ru
* position = 
* age = 21

Тело запроса:

		{
		"name": "Kuku",
		"email": "kuku@mail.ru",
		"position": "",
		"age": 21
		}
	
Шаги:
1. Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
2. Проверить код состояния
3. Проверить тело ответа от сервера

Фактический результат: Полученный результат: код ответа 201 Created

		{
			"id": 308
		}

Ожидаемый результат: Полученный результат: Код ответа 400 Bad Request

		{
			"message": "validation failed"
		}

Окружение: Windows 10, Google Chrom.Версия 113.0.5672.93.

Серьезность: Major 

## Баг №3. Обязательное для заполнения поле "Age"(POST)

Предшествующие условия:
1. Headers request: Content-Type: application/json
2. Тестовые данные: 
Параметры в случае POST передаются в теле запроса в JSON объекте.
*  Name = Kuku
* email = kuku@mail.ru
* position = QA
* age = 

Тело запроса:

		{
		"name": "Kuku",
		"email": "kuku@mail.ru",
		"position": "QA",
		"age": 
		}
		
Шаги:
1. Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
2. Проверить код состояния
3. Проверить тело ответа от сервера

Фактический результат: Полученный результат: код ответа 201 Created

		{
			"id": 309
		}

Ожидаемый результат: Полученный результат: Код ответа 400 Bad Request

		{
			"message": "validation failed"
		}

Окружение: Windows 10, Google Chrom.Версия 113.0.5672.93.

Серьезность: Major 

## Баг №4. Уникальная почта "Email"(POST)

Предшествующие условия:
1. Headers request: Content-Type: application/json
2. Тестовые данные: 
Параметры в случае POST передаются в теле запроса в JSON объекте.

*  Name = erewr
* email = kuku@mail.ru
* position = QA
* age = 35

Тело запроса:

		{
		"name": "erewr",
		"email": "kuku@mail.ru",
		"position": "QA",
		"age": 35
		}
		
Шаги:
1. Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
2. Проверить код состояния
3. Проверить тело ответа от сервера

Фактический результат: Полученный результат: код ответа 201 Created

		{
			"id": 310
		}

Ожидаемый результат: Полученный результат: Код ответа 400 Bad Request

		{
			"message": "validation failed"
		}

Окружение: Windows 10, Google Chrom.Версия 113.0.5672.93.

Серьезность: Major 

## Баг №5. Неликвидное значение поля "Age"(POST)

Предшествующие условия:
1. Headers request: Content-Type: application/json
2. Тестовые данные: 
Параметры в случае POST передаются в теле запроса в JSON объекте.

*  Name = erewr
* email = sdfgasfsad@fggg.ru
* position = QA
* age = asdasd

Тело запроса:

		{
		"name": "erewr",
		"email": "sdfgasfsad@fggg.ru",
		"position": "QA",
		"age": asdasd
		}
		
Шаги:
1. Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
2. Проверить код состояния
3. Проверить тело ответа от сервера

Фактический результат: Полученный результат: код ответа 201 Created

		{
			"id": 311
		}

Ожидаемый результат: Полученный результат: Код ответа 400 Bad Request

		{
			"message": "validation failed"
		}

Окружение: Windows 10, Google Chrom.Версия 113.0.5672.93.

Серьезность: Major 

## Баг №6. Удаление сотрудника (DELETE)

Предшествующие условия:
1. Headers request: Content-Type: application/json
2. Тестовые данные: 

* id = 307
* integer($int64)
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/{id}
		
Шаги:
1. Отправить DELETE запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/307
2. Проверить код состояния
3. Проверить тело ответа от сервера
4. Отправить запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/307
5. Проверить код состояния
6. Проверить тело ответа от сервера


Фактический результат: Полученный результат: 
1. код ответа 204 No content (запрос Delete)
2. код ответа 200 Ok (запрос Get)

Тело ответа:

		{
			"id": 307,
			"name": "Kuku",
			"email": "kuku@mail.ru",
			"position": "QA",
			"age": "21"
		}



Ожидаемый результат: Полученный результат: 
1. Код ответа 204 OK

		{
		    "message": "Employee has been delete"
		}

2. Код ответа 404 Not Found

		{
			"message": "Employee not found"
		}

Окружение: Windows 10, Google Chrom.Версия 113.0.5672.93.

Серьезность: Critical  

# Тест-кейсы https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/doc

## Тест-кейс №1. Добавление нового сотрудника (POST)

1. Приоритет: High
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 

Параметры в случае POST передаются в теле запроса в JSON объекте.
*  Name = Kuku
* email = kuku@mail.ru
* position = QA
* age = 21

Тело запроса:

		{
		"name": "Kuku",
		"email": "kuku@mail.ru",
		"position": "QA",
		"age": 21
		}

4. Шаги: 
* Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 201 Created
* Тело ответа:

		{
			"id": 307
		}
		
## Тест-кейс №2. Добавление нового сотрудника пустое поле "Name"(POST)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
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
	
4. Шаги: 
* Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 400 Bad Request
* Тело ответа:

		{
			"message": "validation failed"
		}

## Тест-кейс №3. Добавление нового сотрудника пустое поле "Email"(POST)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
Параметры в случае POST передаются в теле запроса в JSON объекте.
*  Name = Kuku
* email = 
* position = QA
* age = 21

Тело запроса:

		{
		"name": "Kuku",
		"email": "",
		"position": "QA",
		"age": 21
		}
	
4. Шаги: 
* Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 400 Bad Request 
* Тело ответа:

		{
			"message": "validation failed"
		}
		
## Тест-кейс №4. Добавление нового сотрудника пустое поле "Position"(POST)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
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
	
4. Шаги: 
* Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 400 Bad Request 
* Тело ответа:

		{
			"message": "validation failed"
		}
		
## Тест-кейс №5. Добавление нового сотрудника пустое поле "Age"(POST)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
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
	
4. Шаги: 
* Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 400 Bad Request
* Тело ответа:

		{
			"message": "validation failed"
		}
		
## Тест-кейс №6. Проверка уникальной почты "kuku@mail.ru"(POST)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 

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

4. Шаги: 
* Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 400 Bad Request
* Тело ответа:

		{
			"message": "validation failed"
		}

## Тест-кейс №7. Проверка маски @email (POST)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 

Параметры в случае POST передаются в теле запроса в JSON объекте.
*  Name = erewr
* email = sdfgasfsad
* position = QA
* age = 35

Тело запроса:

		{
		"name": "erewr",
		"email": "sdfgasfsad",
		"position": "QA",
		"age": 35
		}

4. Шаги: 
* Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 400 Bad Request 
* Тело ответа:

		{
			"message": "validation failed"
		}

## Тест-кейс №8. Проверка поля age(integer) (POST)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 

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

4. Шаги: 
* Отправить POST запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 400 Bad Request 
* Тело ответа:

		{
			"message": "validation failed"
		}
		
## Тест-кейс №9. Удаление сотрудника (DELETE)

1. Приоритет: High
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
* id = 307
* integer($int64)
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/{id}
4. Шаги: 
* Отправить DELETE запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/307
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 204 OK
* Тело ответа:

		{
		    "message": "Employee has been delete"
		}
		
## Тест-кейс №10. Удаление не существующего сотрудника (DELETE)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
* id = 1000
* integer
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/{id}
4. Шаги: 
* Отправить DELETE запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/1000
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 404 No Content
* Тело ответа:
	
		{
		    "message": "employee not found"
		}

## Тест-кейс №11. Удаление сотрудника неликвидный "id" (DELETE)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
* id = asdas
* integer
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/{id}
4. Шаги: 
* Отправить DELETE запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/asdas
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 500 Internal Server Error
* Тело ответа:
			
			
		{
			"message": "Internal Server Error"
		}
		
## Тест-кейс №12. Удаление сотрудника Null(пустой) "id" (DELETE)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
* id = 
* integer
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/{id}
4. Шаги: 
* Отправить DELETE запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 500 Internal Server Error
* Тело ответа:
			
			
		{
			"message": "Internal Server Error"
		}

## Тест-кейс №13. Просмотр существующего сотрудника (Get)

1. Приоритет: High
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
* id = 307
* integer
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}
4. Шаги: 
* Отправить GET запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/307
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 200 OK
* Тело ответа:

		{
			"id": 307,
			"name": "Kuku",
			"email": "kuku@mail.ru",
			"position": "QA",
			"age": "21"
		}

## Тест-кейс №14. Просмотр сотрудника не существующего (Get)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
* id = 1000
* integer
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}
4. Шаги: 
* Отправить GET запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/1000
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 404 Not Found
* Тело ответа:

		{
			"message": "Employee not found"
		}

## Тест-кейс №15. Просмотр неликвидного "id" (Get)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
* id = asd
* integer
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}
4. Шаги: 
* Отправить GET запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/asd
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 500 Internal Server Error
* Тело ответа:

		{
			"message": "Internal Server Error"
		}

## Тест-кейс №16. Просмотр Null(пустой) id (Get)

1. Приоритет: Medium
2. Предусловия: Headers request: Content-Type: application/json
3. Тестовые данные: 
* id = 
* integer
* https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}
4. Шаги: 
* Отправить GET запрос https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee
* Проверить код состояния
* Проверить тело ответа от сервера

5. Ожидаемый результат:
* Запрос успешно отправлен
* HTTP Status: 500 Internal Server Error
* Тело ответа:

		{
			"message": "Internal Server Error"
		}


<?php
/**

 * Класс Contacts
 */
class Contacts {
    /**
     * Этот метод создает добавляет контакты.
     * @param
     * @return void
     */
    public function createContacts () {
        $first_name = [
            'Иван',
            'Петр',
            'Федр',
            'Степан',
            'Максим',
            'Степан',
            'Денис',
            'Влад',
            'Вова',
            'Владимир',
            'Владисдав',
            'Никита',
            'Игорь',
            'Олег',
            'Кирилл',
            'Дмитрий',
            'Артем',
            'Андрей',
            'Антон',
            'Константин'
        ];
        $last_name = [
            'Иванов',
            'Петров',
            'Сидоров',
            'Максимов',
            'Федоров',
            'Степнов',
            'Старшов',
            'Антонов',
            'Кириллов',
            'Меньшов',
            'Смирнов',
            'Владимиров',
            'Чернов',
            'Белов',
            'Вьюнов',
            'Ветров',
            'Морозов',
            'Николаев',
            'Носов',
            'Якушев'
        ];

        $number_generate = '';
        for ($i = 1; $i <= 4; $i++) {
            $number = rand(0,9);
            $number_generate = $number_generate . "$number";
        }
        $phone_value_one = [
            '88009003031',
            '88009003032',
            '88009003033',
            '88009003034',
            '88009003035',
            '88009003041',
            '88009003042',
            '88009003043',
            '88009003044',
            '88009003045',
            '8800900' . $number_generate,
            '8800901' . $number_generate,
            '8800902' . $number_generate,
            '8800903' . $number_generate,
            '8800905' . $number_generate,
            '8800906' . $number_generate,
            '8800907' . $number_generate,
            '8800908' . $number_generate,
            '8800909' . $number_generate,
            '8800910' . $number_generate,
        ];
        $phone_value_two = [
            '88009103031',
            '88009103032',
            '88009103033',
            '88009103034',
            '88009103035',
            '88009103041',
            '88009103042',
            '88009103043',
            '88009103044',
            '88009103045',
            '8800910' . $number_generate,
            '8800911' . $number_generate,
            '8800912' . $number_generate,
            '8800913' . $number_generate,
            '8800915' . $number_generate,
            '8800916' . $number_generate,
            '8800917' . $number_generate,
            '8800918' . $number_generate,
            '8800919' . $number_generate,
            '8800910' . $number_generate,
        ];
        $email_value_one = [
            'test@mail.ru',
            'test1@mail.ru',
            'test2@mail.ru',
            'test3@mail.ru',
            'test4@mail.ru',
            'test5@mail.ru',
            'test6@mail.ru',
            'test7@mail.ru',
            'test8@mail.ru',
            'test9@mail.ru',
            'test10@mail.ru',
            'test11@mail.ru',
            'test12@mail.ru',
            'test13@mail.ru',
            'test14@mail.ru',
            'test15@mail.ru',
            'test16@mail.ru',
            'test17@mail.ru',
            'test18@mail.ru',
            'test19@mail.ru'
        ];
        $email_value_two = [
            'testtest@mail.ru',
            'testtest1@mail.ru',
            'testtest2@mail.ru',
            'testtest3@mail.ru',
            'testtest4@mail.ru',
            'testtest5@mail.ru',
            'testtest6@mail.ru',
            'testtest7@mail.ru',
            'testtest8@mail.ru',
            'testtest9@mail.ru',
            'testtest10@mail.ru',
            'testtest11@mail.ru',
            'testtest12@mail.ru',
            'testtest13@mail.ru',
            'testtest14@mail.ru',
            'testtest15@mail.ru',
            'testtest16@mail.ru',
            'testtest17@mail.ru',
            'testtest18@mail.ru',
            'testtest19@mail.ru'
        ];

        $queue_data = new SplQueue();
        $queue_data->setIteratorMode(SplQueue::IT_MODE_DELETE);

        for($id=1; $id<=100000; $id++) {
            $first_name_add = $first_name[rand(0,19)];
            $last_name_add = $last_name[rand(0,19)];
            $data['add'] = [
                [
                    'name' => $first_name_add . ' ' . $last_name_add,
                    'first_name' => $first_name_add,
                    'last_name' => $last_name_add,
                    'responsible_user_id' => 13263726,
                    'group_id' => 0,
                    'custom_fields' => [
                        [
                            'id' => 1310841,
                            'field_name' => 'Телефон',
                            'field_code' => 'PHONE',
                            'field_type' => 'multitext',
                            'values'=> [
                                [
                                    'value' => $phone_value_one[rand(0,19)],
                                    'enum_id' => 1252573,
                                    'enum' =>'WORK'
                                ],
                                [
                                    'value' => $phone_value_two[rand(0,19)],
                                    'enum_id' => 1252573,
                                    'enum' =>'WORK'
                                ]
                            ]
                        ],
                        [
                            'id' => 1310843,
                            'field_name' => 'Email',
                            'field_code' => 'EMAIL',
                            'field_type' => 'multitext',
                            'values'=> [
                                [
                                    'value' => $email_value_one[rand(0,19)],
                                    'enum_id' => 1252585,
                                    'enum' =>'WORK'
                                ],
                                [
                                    'value' => $email_value_two[rand(0,19)],
                                    'enum_id' => 1252585,
                                    'enum' =>'WORK'
                                ]
                            ]
                        ],
                        [
                            'id' => 1310839,
                            'field_name' => 'Должность',
                            'field_code' => 'POSITION',
                            'field_type' => 'multitext',
                            'values'=> [
                                [
                                    'value' => 'worker',
                                ]
                            ]
                        ],
                    ],
                    'account_id'=>32787098,
                    "_embedded" => ["tags"=> [],"companies" => []],
                ]
            ];
            $queue_data[] = $data;
        }

        foreach ($queue_data as $task) {
            $insert_data = $task;
            $this->requestContacts('POST', $insert_data);
        }

        echo "Контакты успешно созданы<br>";
    }

    /**
     * Этот метод осуществляет поиск дубликатов контактов.
     * @param $type
     * @return array
     */
    public function findDuplContacts ($type = 'PHONE') {
        $contacts_data = $this->requestContacts();
        foreach ($contacts_data['_embedded']['items'] as $contacts) {
            foreach ($contacts['custom_fields'] as $custom_field) {
                if ($custom_field['code'] == $type) {
                    $custom_field_array[] = $custom_field['values'][0]['value'];
                }
            }
        }

        $count_custom_fields = array_count_values($custom_field_array);

        $duplicates_fields = array_filter($count_custom_fields, function($count) {
            return $count > 1;
        });

        if (!empty($duplicates_fields)) {
            foreach ($duplicates_fields as $duplicates_field_key => $duplicates_field) {
                echo "Найдено $duplicates_field дублей по типу $type со значением $duplicates_field_key". "<br>";
            }
        } else {
            echo "Дубликатов нет";
        }
    }

    /**
     * Этот метод отправляет контакты по api.
     * @param $type
     * @return void
     */
    public function requestContacts ($type_request = 'GET', $data = NULL) {
        /** Получаем access_token из вашего хранилища */
        $access_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjVhZmRkNzI1YjhiNDUwMmI4ZTk0Y2I1YmI0MjA1Zjk2MmRiNzFjYjJmMTZhNDczNTYyZDk4NWI5OGMyZTgwOTJmOTM5Mzg4OTMwNTI2NjNmIn0.eyJhdWQiOiIzM2Y0YTYyYi0zNjQ4LTRiMzktODdjMy1mNmRkNmM0ZjU3MmQiLCJqdGkiOiI1YWZkZDcyNWI4YjQ1MDJiOGU5NGNiNWJiNDIwNWY5NjJkYjcxY2IyZjE2YTQ3MzU2MmQ5ODViOThjMmU4MDkyZjkzOTM4ODkzMDUyNjYzZiIsImlhdCI6MTc2NDQxOTI1MiwibmJmIjoxNzY0NDE5MjUyLCJleHAiOjE3NjUwNjU2MDAsInN1YiI6IjEzMjYzNzI2IiwiZ3JhbnRfdHlwZSI6IiIsImFjY291bnRfaWQiOjMyNzg3MDk4LCJiYXNlX2RvbWFpbiI6ImFtb2NybS5ydSIsInZlcnNpb24iOjIsInNjb3BlcyI6WyJjcm0iLCJmaWxlcyIsImZpbGVzX2RlbGV0ZSIsIm5vdGlmaWNhdGlvbnMiLCJwdXNoX25vdGlmaWNhdGlvbnMiXSwiaGFzaF91dWlkIjoiOTg1ZWMyNDEtZmYyNS00ZGViLWFmZTItMzY5NTMxNzQ4ZjczIiwidXNlcl9mbGFncyI6MCwiYXBpX2RvbWFpbiI6ImFwaS1iLmFtb2NybS5ydSJ9.Md0DkW1c-NWXE1c-631zC9VkAZGZMyM4JZZ_agJDQn1QJcVKyoytEpbXSm7LeJP_CG4UMIAShWJgh_H0DvbB_aLHpmGU32CcbtaxsPBe02r_kxV1jUci7DK4hIGlOl2ZPFVkoLXs-drlW7ERhIshiKi46HJauTq50UDnd1X1PNE2-MKt8WcN-0MfCfB3QE2PE7zXP9SfSAk3sF63DuE_a4sr3a_puSUPV9TUBD9-a74DJwyjE9F0wM_cJIlFCiManyrtGRQQisvcWq9ZAFe5o6vSI9U0-6Nmi6RC4Mw_9T3qOGa_4LnvHa8cA6ov7ATxN3vEy01CcKBVADuYTjRh_g';
        /** Формируем заголовки */
        $headers = [
            'Authorization: Bearer ' . $access_token
        ];
        /* Теперь подготовим данные, необходимые для запроса к серверу */
        $subdomain = 'evgeniyaerofeeva'; #Наш аккаунт - поддомен
        $link = 'https://' . $subdomain . '.amocrm.ru/api/v2/contacts';
        /* Нам необходимо инициировать запрос к серверу. Воспользуемся библиотекой cURL (поставляется в составе PHP). Подробнее о работе с этой
        библиотекой Вы можете прочитать в мануале. */
        $curl = curl_init(); #Сохраняем дескриптор сеанса cURL
        #Устанавливаем необходимые опции для сеанса cURL
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $type_request);
        if (isset($data)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

        $out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        /* Теперь мы можем обработать ответ, полученный от сервера. Это пример. Вы можете обработать данные своим способом. */
        $code = (int)$code;
        $errors = [
            301 => 'Moved permanently',
            400 => 'Bad request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not found',
            500 => 'Internal server error',
            502 => 'Bad gateway',
            503 => 'Service unavailable',
        ];
        try {
            #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
            if ($code != 200 && $code != 204) {
                throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error', $code);
            }

        } catch (Exception $E) {
            die('Ошибка: ' . $E->getMessage() . PHP_EOL . 'Код ошибки: ' . $E->getCode());
        }
        /*
        Данные получаем в формате JSON, поэтому, для получения читаемых данных,
        нам придётся перевести ответ в формат, понятный PHP
        */
        $response = json_decode($out, true);

        return $response;
    }
}

$contacts = new Contacts();
$contacts->createContacts();
$contacts->findDuplContacts();
$contacts->findDuplContacts('EMAIL');

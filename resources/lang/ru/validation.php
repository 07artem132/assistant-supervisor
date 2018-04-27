<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'Значение поля :attribute не является допустимым URL-адресом.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'Значени поля :attribute может содержать только буквы.',
    'alpha_dash'           => 'Значения поля :attribute может содержать только буквы, цифры и тире.',
    'alpha_num'            => 'Значение поля :attribute может содержать только буквы и цифры.',
    'array'                => 'Значение поля :attribute должно быть массивом.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'Значение поля :attribute должно находиться в диапазоне от : min до : max',
        'file'    => 'Содержимое поля :attribute должно быть от :min до :max килобайт.',
        'string'  => 'Строка :attribute должна иметь от :min до :max символов.',
        'array'   => 'Значение поля :attribute должно находится между :min и :max элементами.',
    ],
    'boolean'              => 'Поле :attribute должно быть истинным или ложным.',
    'confirmed'            => 'Подтверждение :attribute не соответствует.',
    'date'                 => 'Значение поля :attribute не является действительной датой.',
    'date_format'          => 'Значение поля :attribute не соответствует формату :format.',
    'different'            => 'Значение поля :attribute и :other должны быть разными.',
    'digits'               => 'Значение поля :attribute должно быть заполнено :digits цифрами.',
    'digits_between'       => 'Значение поля :attribute должно находится в диапазоне от :min до :max цифр.',
    'dimensions'           => 'Содержимое поля :attribute имеет недопустимые размеры изображения.',
    'distinct'             => 'Значение поля :attribute имеет двойное значение.',
    'email'                => 'Значение поля :attribute должно быть действительным адресом электронной почты.',
    'exists'               => 'Выбранный :attribute недействительный.',
    'file'                 => 'Содержимое поля :attribute должно быть файлом.',
    'filled'               => 'Поле :attribute должно иметь значение.',
    'image'                => 'Содержимое поля :attribute должно быть изображением.',
    'in'                   => 'Выбранный :attribute недействительный.',
    'in_array'             => ':attribute не существует в :other.',
    'integer'              => 'Значение поля :attribute должно быть целым числом.',
    'ip'                   => 'Значение поля :attribute должно быть действительным IP-адресом.',
    'ipv4'                 => 'Значение поля :attribute должно быть действительным адресом IPv4.',
    'ipv6'                 => 'Значение поля :attribute должно быть действительным адресом IPv6.',
    'json'                 => 'Значение поля :attribute должно быть действительной строкой JSON.',
    'max'                  => [
        'numeric' => 'Значение поля :attribute не может быть больше :max.',
        'file'    => 'Содержимое поля :attribute не может быть больше :max килобайтов.',
        'string'  => 'Строка :attribute не может сдержать больше :max символов.',
        'array'   => 'Массив :attribute не может содержать больше :max элементов.',
    ],
    'mimes'                => 'Содержимое :attribute должно быть файлом, тип которого: :values.',
    'mimetypes'            => 'Содержимое :attribute должно быть файлом, тип которого: :values.',
    'min'                  => [
        'numeric' => 'Значение поля :attribute должно быть не менее :min.',
        'file'    => 'Содержимое поля :attribute должно быть не менее :min килобайт.',
        'string'  => 'Строка :attribute должна иметь не менее :min символов.',
        'array'   => 'Массив :attribute должен иметь не менее :min элементов.',
    ],
    'not_in'               => 'Выбранное поля :attribute недопустимо.',
    'not_regex'            => 'Недопустимый формат :attribute.',
    'numeric'              => 'Значение поля :attribute должно быть числом.',
    'present'              => 'Поле :attribute должно присутствовать.',
    'regex'                => 'недопустимый формат :attribute.',
    'required'             => 'Поле :attribute обязателно должно быть заполнено.',
    'required_if'          => 'Поле :attribute обязателно должно быть заполнено, когда :other это :value.',
    'required_unless'      => 'Поле :attribute обязателно должно быть заполнено, если  :other находится в :values.',
    'required_with'        => 'Поле :attribute обязателно должно быть заполнено, когда присутствует :values.',
    'required_with_all'    => 'Поле :attribute обязателно должно быть заполнено, когда присутствует :values.',
    'required_without'     => 'Поле :attribute обязателно должно быть заполнено, когда :values нет.',
    'required_without_all' => 'Поле :attribute обязателно должно быть заполнено, когда  отсутстуют все :values .',
    'same'                 => 'Значения поля :attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'Значение поля :attribute должно быть :size.',
        'file'    => 'Содержимое поля :attribute должно иметь размер :size килобайт.',
        'string'  => 'Значение поля :attribute должно содержать :size символов.',
        'array'   => 'Поле :attribute должно содержать :size элементов.',
    ],
    'string'               => 'Значение поля :attribute должно быть строкой.',
    'timezone'             => 'Значение поля :attribute должно быть действительным.',
    'unique'               => 'Значение поля :attribute уже было использовано.',
    'uploaded'             => 'Не удалось загрузить :attribute.',
    'url'                  => 'Недопустимый формат :attribute.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];

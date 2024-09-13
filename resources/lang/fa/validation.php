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

    'accepted' => 'فیلد ' . ' :attribute ' . 'باید پذیرفته شود',
    'active_url' => 'فیلد ' . ' :attribute ' . ' url نیست',
    'after' => 'فیلد ' . ' :attribute ' . ' باید یک تاریخ بعد از ' . ' :date ' . ' باشد ',
    'after_or_equal' => 'فیلد ' . ' :attribute ' . ' باید یک تاریخ بعد یا مساوی ' . ' :date ' . ' باشد ',
    'alpha' => 'فیلد ' . ' :attribute ' . ' باید شامل حروف باشد',
    'alpha_dash' => 'فیلد ' . ' :attribute ' . ' باید شامل حروف، اعداد، خط فاصله و آندرلاین باشد',
    'alpha_num' => 'فیلد ' . ' :attribute ' . ' باید شامل حروف و اعداد باشد',
    'array' => 'فیلد ' . ' :attribute ' . ' باید شامل آرایه باشد',
    'before' => 'فیلد ' . ' :attribute ' . ' باید یک تاریخ قبل از ' . ' :date ' . ' باشد ',
    'before_or_equal' => 'فیلد ' . ' :attribute ' . ' باید یک تاریخ قبل یا مساوی ' . ' :date ' . ' باشد ',
    'between' => [
        'numeric' => 'فیلد ' . ' :attribute ' . 'باید بین' . ':min' . ' یا ' . ':max' . ' باشد ',
        'file' => 'حجم فایل ' . ' :attribute ' . 'باید بین' . ':min' . ' یا ' . ':max' . ' باشد ',
        'string' => 'تعداد کارکتر ' . ' :attribute ' . 'باید بین' . ':min' . ' یا ' . ':max' . ' باشد ',
        'array' => 'تعداد آیتم های ' . ' :attribute ' . 'باید بین' . ':min' . ' یا ' . ':max' . ' باشد ',
    ],
    'boolean' => 'فیلد ' . ' :attribute ' . 'باید درست یا غلط باشد',
    'confirmed' => 'فیلد ' . ' :attribute ' . ' مچ نشد ',
    'current_password' => 'روز عبور معتبر نیست.',
    'date' => 'فیلد ' . ' :attribute ' . ' باید تاریخ باشد ',
    'date_equals' => 'فیلد ' . ' :attribute ' . ' باید یک تاریخ برابر با ' . ' :date ' . ' باشد ',
    'date_format' => 'فیلد ' . ' :attribute ' . ' باید یک تاریخ با فرمت ' . ' :format ' . ' باشد ',
    'different' => 'فیلد ' . ' :attribute و :other' . ' باید متفاوت باشد',
    'digits' => 'فیلد ' . ' :attribute ' . ' باید  ' . ' :digits ' . ' رقم باشد ',
    'digits_between' => 'فیلد ' . ' :attribute ' . 'باید بین' . ':min' . ' یا ' . ':max' . ' رقم باشد ',
    'dimensions' => 'فیلد ' . ' :attribute ' . ' باید یک تصویر باشد ',
    'distinct' => 'فیلد ' . ' :attribute ' . ' تکراری است ',
    'email' => 'فیلد ' . ' :attribute ' . '  باید یک ایمیل باشد ',
    'ends_with' => 'فیلد ' . ' :attribute ' . ' باید با یکی از مقادیر ' . ' :values ' . ' پایان یابد ',
    'exists' => 'فیلد انتخاب شده ' . ' :attribute ' . ' معتبر نمی باشد ',
    'file' => 'فیلد ' . ' :attribute ' . ' باید یک فایل باشد ',
    'filled' => 'فیلد ' . ' :attribute ' . ' باید مقدار داشته باشد ',
    'gt' => [
        'numeric' => 'فیلد ' . ' :attribute ' . ' باید بزرگتر از ' . ' :value ' . ' باشد ',
        'file' => 'فیلد ' . ' :attribute ' . ' باید بزرگتر از ' . ' :value ' . ' kilobytes باشد ',
        'string' => 'فیلد ' . ' :attribute ' . ' باید بزرگتر از ' . ' :value ' . ' کاراکتر باشد ',
        'array' => 'فیلد ' . ' :attribute ' . ' باید بزرگتر از ' . ' :value ' . ' آیتم باشد ',
    ],
    'gte' => [
        'numeric' => 'فیلد ' . ' :attribute ' . ' باید بزرگتر یا مساوی از ' . ' :value ' . ' باشد ',
        'file' => 'فیلد ' . ' :attribute ' . ' باید بزرگتر یا مساوی از ' . ' :value ' . ' kilobytes باشد ',
        'string' => 'فیلد ' . ' :attribute ' . ' باید بزرگتر یا مساوی از ' . ' :value ' . ' کاراکتر باشد ',
        'array' => 'فیلد ' . ' :attribute ' . ' باید بزرگتر یا مساوی از ' . ' :value ' . ' آیتم باشد ',
    ],
    'image' => 'فیلد ' . ' :attribute ' . ' باید یک تصویر باشد ',
    'in' => 'فیلد انتخاب شده ' . ' :attribute ' . ' معتبر نمی باشد ',
    'in_array' => 'فیلد ' . ' :attribute ' . ' در آیتم های ' . ' :other ' . ' وجود ندارد ',
    'integer' => 'فیلد ' . ' :attribute ' . ' باید عدد باشد ',
    'ip' => 'فیلد ' . ' :attribute ' . ' باید آیپی باشد ',
    'ipv4' => 'فیلد ' . ' :attribute ' . ' باید IPv4 باشد ',
    'ipv6' => 'فیلد ' . ' :attribute ' . ' باید ipv6 باشد ',
    'json' => 'فیلد ' . ' :attribute ' . ' باید JSON باشد ',
    'lt' => [
        'numeric' => 'فیلد ' . ' :attribute ' . ' باید کوچکتر از ' . ' :value ' . ' باشد ',
        'file' => 'فیلد ' . ' :attribute ' . ' باید کوچکتر از ' . ' :value ' . ' kilobytes باشد ',
        'string' => 'فیلد ' . ' :attribute ' . ' باید کوچکتر از ' . ' :value ' . ' کاراکتر باشد ',
        'array' => 'فیلد ' . ' :attribute ' . ' باید کوچکتر از ' . ' :value ' . ' آیتم باشد ',
    ],
    'lte' => [
        'numeric' => 'فیلد ' . ' :attribute ' . ' باید کوچکتر یا مساوی از ' . ' :value ' . ' باشد ',
        'file' => 'فیلد ' . ' :attribute ' . ' باید کوچکتر یا مساوی از ' . ' :value ' . ' kilobytes باشد ',
        'string' => 'فیلد ' . ' :attribute ' . ' باید کوچکتر یا مساوی از ' . ' :value ' . ' کاراکتر باشد ',
        'array' => 'فیلد ' . ' :attribute ' . ' باید کوچکتر یا مساوی از ' . ' :value ' . ' آیتم باشد ',
    ],
    'max' => [
        'numeric' => 'فیلد ' . ' :attribute ' . ' باید حداکثر ' . ' :value ' . ' باشد ',
        'file' => 'فیلد ' . ' :attribute ' . ' باید حداکثر ' . ' :value ' . ' kilobytes باشد ',
        'string' => 'فیلد ' . ' :attribute ' . ' باید حداکثر ' . ' :value ' . ' کاراکتر باشد ',
        'array' => 'فیلد ' . ' :attribute ' . ' باید حداکثر ' . ' :value ' . ' آیتم باشد ',
    ],
    'mimes' => 'فیلد ' . ' :attribute ' . ' باید یک فایل با فرمت ' . ' :values ' . ' باشد ',
    'mimetypes' => 'فیلد ' . ' :attribute ' . ' باید یک فایل با فرمت ' . ' :values ' . ' باشد ',
    'min' => [
        'numeric' => 'فیلد ' . ' :attribute ' . ' باید حداقل ' . ' :value ' . ' باشد ',
        'file' => 'فیلد ' . ' :attribute ' . ' باید حداقل ' . ' :value ' . ' kilobytes باشد ',
        'string' => 'فیلد ' . ' :attribute ' . ' باید حداقل ' . ' :value ' . ' کاراکتر باشد ',
        'array' => 'فیلد ' . ' :attribute ' . ' باید حداقل ' . ' :value ' . ' آیتم باشد ',
    ],
    'multiple_of' => 'فیلد ' . ' :attribute ' . ' باید مضربی از ' . ' :value ' . ' باشد ',
    'not_in' => 'فیلد ' . ' :attribute ' . ' معتبر نمی باشد ',
    'not_regex' => 'فیلد ' . ' :attribute ' . ' معتبر نمی باشد ',
    'numeric' => 'فیلد ' . ' :attribute ' . ' باید عدد باشد ',
    'password' => 'رمز عبور وارد شده معتبر نمی باشد',
    'present' => 'مقدار وارد شده معتبر نمی باشد',
    'regex' => 'مقدار وارد شده معتبر نمی باشد',
    'required' => 'فیلد ' . ' :attribute ' . ' اجباری است ',
    'required_if' => 'فیلد ' . ' :attribute ' . ' اجباری است اگر مقدار فیلد ' . ':other' . ' برابر با :value باشد',
    'required_unless' => 'فیلد ' . ' :attribute ' . ' اجباری است اگر مقدار فیلد ' . ':other' . ' برابر با :value نباشد',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'same' => 'مقدار :attribute و :other باید مچ باشد.',
    'size' => [
        'numeric' => 'فیلد ' . ' :attribute ' . ' باید ' . ' :size ' . ' باشد ',
        'file' => 'فیلد ' . ' :attribute ' . ' باید ' . ' :size ' . ' kilobytes باشد ',
        'string' => 'فیلد ' . ' :attribute ' . ' باید ' . ' :size ' . ' کاراکتر باشد ',
        'array' => 'فیلد ' . ' :attribute ' . ' باید ' . ' :size ' . ' آیتم باشد ',
    ],
    'starts_with' => 'مقدار :attribute باید با مقادیر :values شروع شود.',
    'string' => 'مقدار :attribute باید از نوع رشته باشد.',
    'timezone' => 'مقدار :attribute باید از نوع زمان باشد.',
    'unique' => 'مقدار :attribute در حال حاضر سلکت شده است.',
    'uploaded' => 'فایل :attribute آپلود نشد.',
    'url' => 'مقدار :attribute باید URL باشد.',
    'uuid' => 'مقدار :attribute باید UUID باشد.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

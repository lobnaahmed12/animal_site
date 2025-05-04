<?php
return [
'accepted'             => 'يجب قبول الحقل :attribute.',
'active_url'           => 'الحقل :attribute ليس رابط URL صالح.',
'after'                => 'يجب أن يكون الحقل :attribute تاريخًا بعد :date.',
'after_or_equal'       => 'يجب أن يكون الحقل :attribute تاريخًا يساوي أو بعد :date.',
'alpha'                => 'يجب أن يحتوي الحقل :attribute على حروف فقط.',
'alpha_dash'           => 'يمكن أن يحتوي الحقل :attribute على حروف، أرقام، وشرطات فقط.',
'alpha_num'            => 'يجب أن يحتوي الحقل :attribute على حروف وأرقام فقط.',
'array'                => 'يجب أن يكون الحقل :attribute مصفوفة.',
'before'               => 'يجب أن يكون الحقل :attribute تاريخًا قبل :date.',
'before_or_equal'      => 'يجب أن يكون الحقل :attribute تاريخًا يساوي أو قبل :date.',
'between' => [
    'numeric' => 'يجب أن يكون الحقل :attribute بين :min و :max.',
    'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
    'string'  => 'يجب أن يكون الحقل :attribute بين :min و :max حرفًا.',
    'array'   => 'يجب أن يحتوي الحقل :attribute على بين :min و :max عنصرًا.',
],
'boolean'              => 'يجب أن يكون الحقل :attribute صحيحًا أو خاطئًا.',
'confirmed'            => 'تأكيد الحقل :attribute غير متطابق.',
'date'                 => 'الحقل :attribute ليس تاريخًا صالحًا.',
'date_equals'          => 'يجب أن يكون الحقل :attribute تاريخًا مساويًا لـ :date.',
'date_format'          => 'لا يتطابق الحقل :attribute مع الشكل :format.',
'different'            => 'يجب أن يكون الحقل :attribute مختلفًا عن :other.',
'digits'               => 'يجب أن يحتوي الحقل :attribute على :digits رقمًا.',
'digits_between'       => 'يجب أن يحتوي الحقل :attribute على ما بين :min و :max رقمًا.',
'dimensions'           => 'أبعاد صورة الحقل :attribute غير صالحة.',
'distinct'             => 'الحقل :attribute يحتوي على قيمة مكررة.',
'email'                => 'يجب أن يكون الحقل :attribute بريدًا إلكترونيًا صالحًا.',
'ends_with'            => 'يجب أن ينتهي الحقل :attribute بأحد القيم التالية: :values.',
'exists'               => 'القيمة المحددة في الحقل :attribute غير صالحة.',
'file'                 => 'يجب أن يكون الحقل :attribute ملفًا.',
'filled'               => 'الحقل :attribute يجب أن يحتوي على قيمة.',
'gt' => [
    'numeric' => 'يجب أن يكون الحقل :attribute أكبر من :value.',
    'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
    'string'  => 'يجب أن يكون الحقل :attribute أكبر من :value حرفًا.',
    'array'   => 'يجب أن يحتوي الحقل :attribute على أكثر من :value عنصرًا.',
],
'gte' => [
    'numeric' => 'يجب أن يكون الحقل :attribute أكبر أو يساوي :value.',
    'file'    => 'يجب أن يكون حجم الملف :attribute أكبر أو يساوي :value كيلوبايت.',
    'string'  => 'يجب أن يكون الحقل :attribute أكبر أو يساوي :value حرفًا.',
    'array'   => 'يجب أن يحتوي الحقل :attribute على :value عنصرًا أو أكثر.',
],
'image'                => 'يجب أن يكون الحقل :attribute صورة.',
'in'                   => 'القيمة المحددة في الحقل :attribute غير صالحة.',
'in_array'             => 'الحقل :attribute غير موجود في :other.',
'integer'              => 'يجب أن يكون الحقل :attribute عددًا صحيحًا.',
'ip'                   => 'يجب أن يكون الحقل :attribute عنوان IP صالح.',
'ipv4'                 => 'يجب أن يكون الحقل :attribute عنوان IPv4 صالح.',
'ipv6'                 => 'يجب أن يكون الحقل :attribute عنوان IPv6 صالح.',
'json'                 => 'يجب أن يكون الحقل :attribute سلسلة JSON صالحة.',
'lt' => [
    'numeric' => 'يجب أن يكون الحقل :attribute أقل من :value.',
    'file'    => 'يجب أن يكون حجم الملف :attribute أقل من :value كيلوبايت.',
    'string'  => 'يجب أن يكون الحقل :attribute أقل من :value حرفًا.',
    'array'   => 'يجب أن يحتوي الحقل :attribute على أقل من :value عنصرًا.',
],
'lte' => [
    'numeric' => 'يجب أن يكون الحقل :attribute أقل أو يساوي :value.',
    'file'    => 'يجب أن يكون حجم الملف :attribute أقل أو يساوي :value كيلوبايت.',
    'string'  => 'يجب أن يكون الحقل :attribute أقل أو يساوي :value حرفًا.',
    'array'   => 'يجب ألا يحتوي الحقل :attribute على أكثر من :value عنصرًا.',
],
'max' => [
    'numeric' => 'يجب ألا يكون الحقل :attribute أكبر من :max.',
    'file'    => 'يجب ألا يكون حجم الملف :attribute أكبر من :max كيلوبايت.',
    'string'  => 'يجب ألا يحتوي الحقل :attribute على أكثر من :max حرفًا.',
    'array'   => 'يجب ألا يحتوي الحقل :attribute على أكثر من :max عنصرًا.',
],
'mimes'                => 'يجب أن يكون الملف :attribute من النوع: :values.',
'mimetypes'            => 'يجب أن يكون الملف :attribute من النوع: :values.',
'min' => [
    'numeric' => 'يجب أن يكون الحقل :attribute على الأقل :min.',
    'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
    'string'  => 'يجب أن يحتوي الحقل :attribute على الأقل :min حرفًا.',
    'array'   => 'يجب أن يحتوي الحقل :attribute على الأقل :min عنصرًا.',
],
'not_in'               => 'القيمة المحددة في الحقل :attribute غير صالحة.',
'not_regex'            => 'تنسيق الحقل :attribute غير صالح.',
'numeric'              => 'يجب أن يكون الحقل :attribute رقمًا.',
'password'             => 'كلمة المرور غير صحيحة.',
'present'              => 'يجب أن يكون الحقل :attribute موجودًا.',
'regex'                => 'تنسيق الحقل :attribute غير صالح.',
'required'             => 'الحقل :attribute مطلوب.',
'required_if'          => 'الحقل :attribute مطلوب عندما يكون :other هو :value.',
'required_unless'      => 'الحقل :attribute مطلوب إلا إذا كان :other في :values.',
'required_with'        => 'الحقل :attribute مطلوب عندما تكون :values موجودة.',
'required_with_all'    => 'الحقل :attribute مطلوب عندما تكون :values موجودة.',
'required_without'     => 'الحقل :attribute مطلوب عندما لا تكون :values موجودة.',
'required_without_all' => 'الحقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
'same'                 => 'يجب أن يتطابق الحقل :attribute مع :other.',
'size' => [
    'numeric' => 'يجب أن يكون الحقل :attribute بمقدار :size.',
    'file'    => 'يجب أن يكون الملف :attribute بمقدار :size كيلوبايت.',
    'string'  => 'يجب أن يحتوي الحقل :attribute على :size حرفًا.',
    'array'   => 'يجب أن يحتوي الحقل :attribute على :size عنصرًا.',
],
'starts_with'          => 'يجب أن يبدأ الحقل :attribute بأحد القيم التالية: :values.',
'string'               => 'يجب أن يكون الحقل :attribute سلسلة نصية.',
'timezone'             => 'يجب أن يكون الحقل :attribute منطقة زمنية صالحة.',
'unique'               => 'قيمة الحقل :attribute مستخدمة بالفعل.',
'uploaded'             => 'فشل في رفع الملف :attribute.',
'url'                  => 'تنسيق الحقل :attribute غير صالح.',
'uuid'                 => 'يجب أن يكون الحقل :attribute UUID صالحًا.',

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
        'rule-name' => 'رسالة مخصصة',
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

   'attributes' => [
    'address'   => 'العنوان',
    'age'       => 'العمر',
    'body'      => 'المحتوى',
    'cell'      => 'الجوال',
    'city'      => 'المدينة',
    'country'   => 'الدولة',
    'date'      => 'التاريخ',
    'day'       => 'اليوم',
    'excerpt'   => 'الملخص',
    'first_name'=> 'الاسم الأول',
    'gender'    => 'الجنس',
    'hour'      => 'الساعة',
    'last_name' => 'اسم العائلة',
    'message'   => 'الرسالة',
    'minute'    => 'الدقيقة',
    'mobile'    => 'الهاتف المحمول',
    'month'     => 'الشهر',
    'name'      => 'الاسم',
    'neighborhood' => 'الحي',
    'number'    => 'الرقم',
    'password'  => 'كلمة المرور',
    'phone'     => 'الهاتف',
    'second'    => 'الثانية',
    'sex'       => 'النوع',
    'state'     => 'الولاية',
    'street'    => 'الشارع',
    'subject'   => 'الموضوع',
    'text'      => 'النص',
    'time'      => 'الوقت',
    'title'     => 'العنوان',
    'username'  => 'اسم المستخدم',
    'year'      => 'السنة',
    'description' => 'الوصف',
    'password_confirmation' => 'تأكيد كلمة المرور',
],

];

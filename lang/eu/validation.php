<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baieztapenaren Hizkuntzaren Lerroak
    |--------------------------------------------------------------------------
    |
    | Hurrengo hizkuntzaren lerroak balidatzaile klaseak erabiltzen dituen
    | mezuak gordetzen ditu. Arlo horietako zenbait arau multzoak dituzte,
    | adibidez, tamainako arauak. Sentitu libre izan mezu horiek modu pertsonalizatuan
    | ezartzeko.
    |
    */

    'accepted' => ':attribute eremua onartu behar da.',
    'accepted_if' => ':attribute eremua :other :value izatean onartu behar da.',
    'active_url' => ':attribute eremua baliozko URL izan behar da.',
    'after' => ':attribute eremua :date osteko data bat izan behar da.',
    'after_or_equal' => ':attribute eremua :date osteko data bat edo data hori izan behar da.',
    'alpha' => ':attribute eremua letrak soilik izan behar ditu.',
    'alpha_dash' => ':attribute eremua letrak, zenbakiak, marrak eta azpimarrak soilik izan behar ditu.',
    'alpha_num' => ':attribute eremua letrak eta zenbakiak soilik izan behar ditu.',
    'array' => ':attribute eremua bilduma izan behar da.',
    'ascii' => ':attribute eremua bytetan soilik alfanumeriko karaktereak eta sinboloak izan behar ditu.',
    'before' => ':attribute eremua :date aurreko data bat izan behar da.',
    'before_or_equal' => ':attribute eremua :date aurreko data bat edo data hori izan behar da.',
    'between' => [
        'array' => ':attribute eremua :min eta :max arteko elementuak izan behar ditu.',
        'file' => ':attribute eremua :min eta :max kilobyte artean egon behar da.',
        'numeric' => ':attribute eremua :min eta :max artean egon behar da.',
        'string' => ':attribute eremua :min eta :max karaktere artean izan behar da.',
    ],
    'boolean' => ':attribute eremua egia edo gezurra izan behar da.',
    'can' => ':attribute eremuan baimendutako balioa dauka.',
    'confirmed' => ':attribute eremuko konfirmazioa ez dator bat.',
    'current_password' => 'Pasahitza ez da zuzena.',
    'date' => ':attribute eremua baliozko data izan behar da.',
    'date_equals' => ':attribute eremua :date bera izan behar da.',
    'date_format' => ':attribute eremua :format formatua izan behar da.',
    'decimal' => ':attribute eremua :decimal hamartarrak izan behar ditu.',
    'declined' => ':attribute eremua baztertuta egon behar da.',
    'declined_if' => ':attribute eremua :other :value izatean baztertuta egon behar da.',
    'different' => ':attribute eta :other ezberdinak izan behar dira.',
    'digits' => ':attribute eremua :digits digitu izan behar ditu.',
    'digits_between' => ':attribute eremua :min eta :max arteko digituak izan behar ditu.',
    'dimensions' => ':attribute eremuko irudien neurriak baliogabeak dira.',
    'distinct' => ':attribute eremua bikoiztutako balioa dauka.',
    'doesnt_end_with' => ':attribute eremua hurrengoetako bat ezin da bukatu: :values.',
    'doesnt_start_with' => ':attribute eremua hurrengoetako bat ezin da hasi: :values.',
    'email' => ':attribute eremua baliozko helbide elektroniko bat izan behar da.',
    'ends_with' => ':attribute eremua hurrengoetako batekin amaitu behar da: :values.',
    'enum' => 'Aukeratutako :attribute baliogabea da.',
    'exists' => 'Aukeratutako :attribute baliogabea da.',
    'extensions' => ':attribute eremuak hurrengo luzapenetakoa izan behar du: :values.',
    'file' => ':attribute eremua fitxategia izan behar da.',
    'filled' => ':attribute eremua balioa izan behar du.',
    'gt' => [
        'array' => ':attribute eremua :value elementu baino gehiago izan behar ditu.',
        'file' => ':attribute eremua :value kilobyte baino handiagoa izan behar da.',
        'numeric' => ':attribute eremua :value baino handiagoa izan behar da.',
        'string' => ':attribute eremua :value karaktere baino handiagoa izan behar da.',
    ],
    'gte' => [
        'array' => ':attribute eremua :value elementu edo gehiago izan behar ditu.',
        'file' => ':attribute eremua :value kilobyte edo handiagoa izan behar da.',
        'numeric' => ':attribute eremua :value baino handiagoa edo berdina izan behar da.',
        'string' => ':attribute eremua :value karaktere baino handiagoa edo berdina izan behar da.',
    ],
    'hex_color' => ':attribute eremua baliozko hexadecimal kolorea izan behar da.',
    'image' => ':attribute eremua irudia izan behar da.',
    'in' => 'Aukeratutako :attribute baliogabea da.',
    'in_array' => ':attribute eremua ez da existitzen :other.',
    'integer' => ':attribute eremua zenbaki osoa izan behar da.',
    'ip' => ':attribute eremua baliozko IP helbidea izan behar da.',
    'ipv4' => ':attribute eremua baliozko IPv4 helbidea izan behar da.',
    'ipv6' => ':attribute eremua baliozko IPv6 helbidea izan behar da.',
    'json' => ':attribute eremua baliozko JSON katea izan behar da.',
    'lowercase' => ':attribute eremua letra xehez idatzia izan behar da.',
    'lt' => [
        'array' => ':attribute eremua :value elementu baino gutxiago izan behar ditu.',
        'file' => ':attribute eremua :value kilobyte baino txikiagoa izan behar da.',
        'numeric' => ':attribute eremua :value baino txikiagoa izan behar da.',
        'string' => ':attribute eremua :value karaktere baino txikiagoa izan behar da.',
    ],
    'lte' => [
        'array' => ':attribute eremua :value elementu edo gutxiago izan behar ditu.',
        'file' => ':attribute eremua :value kilobyte edo txikiagoa izan behar da.',
        'numeric' => ':attribute eremua :value baino txikiagoa edo berdina izan behar da.',
        'string' => ':attribute eremua :value karaktere baino txikiagoa edo berdina izan behar da.',
    ],
    'mac_address' => ':attribute eremua baliozko MAC helbidea izan behar da.',
    'max' => [
        'array' => ':attribute eremua :max elementu baino gehiago izan ezin da.',
        'file' => ':attribute eremua :max kilobyte baino handiagoa izan ezin da.',
        'numeric' => ':attribute eremua :max baino handiagoa izan ezin da.',
        'string' => ':attribute eremua :max karaktere baino handiagoa izan ezin da.',
    ],
    'max_digits' => ':attribute eremua :max digito baino gehiago izan ezin da.',
    'mimes' => ':attribute eremua hurrengo motako fitxategi bat izan behar da: :values.',
    'mimetypes' => ':attribute eremua hurrengo motako fitxategi bat izan behar da: :values.',
    'min' => [
        'array' => ':attribute eremua gutxienez :min elementu izan behar ditu.',
        'file' => ':attribute eremua gutxienez :min kilobyte izan behar ditu.',
        'numeric' => ':attribute eremua gutxienez :min izan behar da.',
        'string' => ':attribute eremua gutxienez :min karaktere izan behar ditu.',
    ],
    'min_digits' => ':attribute eremua gutxienez :min digito izan behar ditu.',
    'missing' => ':attribute eremua falta da.',
    'missing_if' => ':attribute eremua falta da :other :value izatean.',
    'missing_unless' => ':attribute eremua falta da :values-en ez egotean.',
    'missing_with' => ':attribute eremua falta da :values egotean.',
    'missing_with_all' => ':attribute eremua falta da :values guztiak egotean.',
    'multiple_of' => ':attribute eremua :value-ren biderkadura izan behar da.',
    'not_in' => 'Aukeratutako :attribute baliogabea da.',
    'not_regex' => ':attribute eremuaren formatua baliogabea da.',
    'numeric' => ':attribute eremua zenbaki bat izan behar da.',
    'password' => [
        'letters' => ':attribute eremua gutxienez letra bat izan behar du.',
        'mixed' => ':attribute eremua gutxienez letra larri bat eta xehe bat izan behar ditu.',
        'numbers' => ':attribute eremua gutxienez zenbaki bat izan behar du.',
        'symbols' => ':attribute eremua gutxienez sinbolo bat izan behar du.',
        'uncompromised' => ':attribute emandako datu-lehioan agertu da. Mesedez, hautatu :attribute beste bat.',
    ],
    'present' => ':attribute eremua egon behar da.',
    'present_if' => ':attribute eremua egon behar da :other :value izan behar denean.',
    'present_unless' => ':attribute eremua egon behar da :values-en ez egotean.',
    'present_with' => ':attribute eremua egon behar da :values egon behar denean.',
    'present_with_all' => ':attribute eremua egon behar da :values guztiak egon behar denean.',
    'prohibited' => ':attribute eremua debekatuta dago.',
    'prohibited_if' => ':attribute eremua debekatuta dago :other :value izan denean.',
    'prohibited_unless' => ':attribute eremua debekatuta dago :values-en ez egotean.',
    'prohibits' => ':attribute eremua :other egotea debekatzen du.',
    'regex' => ':attribute eremuaren formatua baliogabea da.',
    'required' => ':attribute eremua beharrezkoa da.',
    'required_array_keys' => ':attribute eremua :values-entzako sarrera izan behar ditu.',
    'required_if' => ':attribute eremua beharrezkoa da :other :value izan denean.',
    'required_if_accepted' => ':attribute eremua beharrezkoa da :other onartua izan denean.',
    'required_unless' => ':attribute eremua beharrezkoa da :values-en egotean.',
    'required_with' => ':attribute eremua beharrezkoa da :values egon denean.',
    'required_with_all' => ':attribute eremua beharrezkoa da :values guztiak egon denean.',
    'required_without' => ':attribute eremua beharrezkoa da :values ez dagoenean.',
    'required_without_all' => ':attribute eremua beharrezkoa da :values guztiak ez dagoenean.',
    'same' => ':attribute eta :other bat etorri behar dira.',
    'size' => [
        'array' => ':attribute eremua :size elementu izan behar ditu.',
        'file' => ':attribute eremua :size kilobyte izan behar ditu.',
        'numeric' => ':attribute eremua :size izan behar da.',
        'string' => ':attribute eremua :size karaktere izan behar ditu.',
    ],
    'starts_with' => ':attribute eremua hurrengo batekin hasi behar da: :values.',
    'string' => ':attribute eremua katea izan behar da.',
    'timezone' => ':attribute eremua baliozko ordu-eremua izan behar da.',
    'unique' => ':attribute jada hartuta dago.',
    'uploaded' => ':attribute kargatzeak huts egin du.',
    'uppercase' => ':attribute eremua maiuskulaz idatzia izan behar da.',
    'url' => ':attribute eremua baliozko URL izan behar da.',
    'ulid' => ':attribute eremua baliozko ULID izan behar da.',
    'uuid' => ':attribute eremua baliozko UUID izan behar da.',

    /*
    |--------------------------------------------------------------------------
    | Adibidezko Baieztapenaren Hizkuntzaren Lerroak
    |--------------------------------------------------------------------------
    |
    | Hemen, atributuen arauen baieztapenaren hizkuntzaren adibidezko lerroak zehaztu ditzakezu
    | "attribute.rule" konbentzioa erabiliz lerro bat zehazteko. Hau azkarrak egiten digu
    | arau batzuetarako adibidezko hizkuntza-lerro bat zehazteko.
    |
    */

    'custom' => [
        'nombre-de-atributo' => [
            'nombre-de-regla' => 'mezua-pertsonalizatua',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Adibidezko Baieztapenaren Hizkuntzaren Atributuak
    |--------------------------------------------------------------------------
    |
    | Hurrengo hizkuntza-lerroak gure atributuaren tokiaz aldatzen gaituzte
    | "email" ordez "Helbide elektronikoa" bezala. Hau soilik laguntzen digu gure mezua espressiboagoa izateko.
    |
    */

    'attributes' => [],

];

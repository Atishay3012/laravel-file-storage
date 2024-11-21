<?php
return [

    'accepted' => ':attribute moet aanvaard worden.',
    'active_url' => ':attribute is geen geldige URL.',
    'after' => ':attribute moet een datum zijn na :date',
    'alpha' => ':attribute mag enkel letters bevatten.',
    'alpha_dash' => ':attribute mag enkel letters, cijfers en koppeltekens bevatten.',
    'alpha_num' => ':attribute mag enkel letters en cijfers bevatten.',
    'array' => ':attribute moet een array zijn.',
    'before' => ':attribute moet een datum voor :date zijn.',
    'between' => [
        'numeric' => ':attribute moet tussen :min en :max zijn.',
        'file' => ':attribute moet tussen :min en :max kilobytes zijn.',
        'string' => ':attribute moet tussen :min en :max tekens lang zijn.',
        'array' => ':attribute moet tussen :min en :max voorwerpen bevatten',
    ],
    'boolean' => ':attribute moet true of false zijn.',
    'confirmed' => ':attribute bevestiging stemt niet overeen.',
    'date' => ':attribute is geen geldige datum',
    'date_format' => ':attribute is geen :format formaat',
    'different' => ':attribute en :other moeten verschillend zijn.',
    'digits' => ':attribute moet :digits cijfers bevatten',
    'digits_between' => ':attribute moet tussen :min en  :max cijfers lang zijn.',
    'dimensions' => ':attribute heeft ongeldige afmetingen.',
    'distinct' => ':attribute heeft een duplicaat waarde.',
    'email' => ':attribute moet een geldig e-mailadres zijn.',
    'exists' => 'De gekozen :attribute is ongeldig.',
    'file' => ':attribute moet een bestand zijn.',
    'filled' => ':attribute veld is vereist.',
    'image' => ':attribute moet een afbeelding zijn.',
    'in' => 'De gekozen :attribute is ongeldig.',
    'in_array' => 'Het veld :attribute bestaat niet in :other',
    'integer' => ':attribute moet een integer zijn.',
    'ip' => ':attribute moet een geldig IP adres zijn',
    'json' => ':attribute moet een geldige JSON string zijn.',
    'max' => [
        'numeric' => ':attribute mag niet groter zijn dan :max',
        'file' => ':attribute mag niet groter zijn dan :max kilobytes.',
        'string' => ':attribute mag niet meer dan :max tekens tellen.',
        'array' => ':attribute mag niet meer dan :max items tellen',
    ],
    'mimes' => ':attribute moet een bestand zijn van het type: :values.',
    'numeric' => ':attribute moet een cijfer zijn.',
    'min' => [
        'numeric' => ':attribute moet minstens :min zijn.',
        'file' => ':attribute moet minstens :min kilobytes zijn.',
        'string' => ':attribute moet minstens :min tekens bevatten.',
        'array' => ':attribute moet minstens :min items bevatten.',
    ],
    'not_in' => 'Gekozen :attribute is ongeldig.',
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'regex' => 'Formaat van :attribute is ongeldig.',
    'required' => ':attribute is vereist',
    'required_if' => ':attribute is vereist wanneer :other gelijk is aan :value.',
    'required_unless' => ':attribute is vereist tenzij :other behoort to :values.',
    'required_with' => ':attribute is vereist wanneer :values aanwezig zijn.',
    'required_with_all' => ':attribute is vereist wanneer :values aanwezig zijn.',
    'required_without' => ':attribute is vereist wanneer :values niet aanwezig zijn.',
    'required_without_all' => ':attribute is vereist wnneer geen enkel of :values aanwezig zijn.',
    'same' => ':attribute en :other moeten overeenstemmen.',
    'size' => [
        'numeric' => ':attribute moet :size groot zijn.',
        'file' => ':attribute moet :size kilobytes zwaar zijn',
        'string' => ':attribute moet :size tekens lang zijn.',
        'array' => ':attribute moet :size items bevatten.',
    ],
    'string' => ':attribute moet een sting zijn.',
    'timezone' => ':attribute moet een geldige zone zijn.',
    'unique' => ':attribute werd reeds genomen.',
    'url' => 'Het formaat van :attribute is ongeldig.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'aangepast-bericht',
        ],
    ],

];
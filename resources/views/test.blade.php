@php
    $operatorMap = [
        'postalCode' => 'postal_code'
    ];

    $parm = 'postal_code';
@endphp

{{ $columnMap[$parm] ?? $parm }}
@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'from',
        'label' => 'From',
        'maxlength' => 1000,
        'note' => 'Please type a full url, like '.config('app.url').'/from-url'
    ])

    @formField('input', [
        'name' => 'to',
        'label' => 'To',
        'maxlength' => 1000,
        'note' => 'Please type a full url, like '.config('app.url').'/to-url'
    ])

    @formField('select', [
        'name' => 'status_code',
        'label' => 'Status code',
        'min' => 1,
        'max' => 2,
        'options' => [
            [
                'value' => 301,
                'label' => '301 - Moved Permanently'
            ],
            [
                'value' => 302,
                'label' => '302 - Found'
            ],
            [
                'value' => 307,
                'label' => '307 - Temporary Redirect'
            ],
        ]
    ])
@stop

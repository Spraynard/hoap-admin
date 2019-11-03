@component('mail::message')
    # There's a new participant form submission waiting for you!

@component('mail::table')
| Field         | Value         |
| ------------- | ------------- |
@foreach($fields as $field => $value)
| {{ $field }}  | {{$value}}    |
@endforeach
@endcomponent

@endcomponent

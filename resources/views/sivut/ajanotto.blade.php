<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>5. Ajanotto</title>
    <link rel="stylesheet" href="../resources/style/style.css">
    @php
    $tehtava = 'tehtava';
    $tiimii = 'tiimi';
    @endphp
</head>
<body>
    <header>
        <h1>text</h1>
    </header>

<div style="justify-content:center;
            color:#7BA4A0"
    class="container">
    <p style="color:#70826E">{{ $tehtava }}</p>
    <div position="" class="container">
        <p>{{ $tiimi }}</p>
    </div>
    
    {{-- @if(array_key_exists('submitForm', $_POST))
    @endif --}}
</div>
{{-- 
@if(array_key_exists('codePage', $_POST))

@endif --}}


{{-- @unless ()


@else

@endunless --}}

</body>
</html>
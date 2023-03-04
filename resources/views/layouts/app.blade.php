<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    @vite(['resources/css/app.css'])
    <title>Wer hat den SPÖ Vorsitz?</title>
    <meta
        name="description"
        content="Wer ist aktuelle/r SPÖ Vorsitzende/r"
    >
    <meta
        name="twitter:title"
        content="Wer hat den SPÖ Vorsitz?"
    >
    <meta
        name="twitter:description"
        content="Wer ist aktuell SPÖ-Vorsitzende/r"
    >
    <meta
        name="twitter:image"
        content="{{ config('image.url') }}"
    >
    <meta
        name="twitter:card"
        content="summary_large_image"
    >
    <meta
        property="og:title"
        content="Wer hat den SPÖ Vorsitz?"
    >
    <meta
        property="og:description"
        content="Wer ist aktuell SPÖ-Vorsitzende/r"
    >
    <meta
        property="og:image"
        content="{{ config('image.url') }}"
    >
    <meta
        property="og:url"
        content="{{ config('app.url') }}"
    >
</head>

<body>
    @yield('content')
</body>

</html>

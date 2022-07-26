<!DOCTYPE html>
<html lang="en">

<head>
@include("elements.header_link")
</head>

<body>
@yield('content')

@include("elements.script_links")

@yield("script")

</body>

</html>

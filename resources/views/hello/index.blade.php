<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>practice3</title>
</head>
<body>
    lara_0818_u2 test 2

    @extends('layouts.master')

    @section('title','Hello')

    @section('content')
        <h1>This is {{ $name}}'s home.</h1>
    @endsection
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test | Laravel</title>
</head>
<body>
    <h1>Hello From Test View.</h1>

    {{-- <?php foreach ($users as $user) { ?>
        <span><?= $user->name ?></span><br>
    <?php } ?> --}}

    @foreach ( $users as $user )
        <span>{{ $user->name }}</span><br>
    @endforeach

</body>
</html>

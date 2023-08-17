<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- <?php
    $arrayPoint = [2, 5, 7, 9, 4];
    $arrayAnimal = ['Cho', 'Meo', 'Ga', 'Vit', 'Heo'];

    foreach ($arrayAnimal as $key => $animal) {
        $color = 'green';
        if (($key + 1) % 2 === 0) {
            $color = 'red';
        }
        echo ($key + 1) . ".<span style='color:" . $color . ";'>$animal</span><br>";
    }
    ?> --}}
    @php
        $arrayPoint = [2, 5, 7, 9, 4];
        $arrayAnimal = ['Cho', 'Meo', 'Ga', 'Vit', 'Heo'];
    @endphp
    @foreach($arrayAnimal as $key => $animal)
        {{-- {{$animal}} --}}
        @if (($key+1)%2===0)
            {!! ($key+1).".<span style='color:red;'>".$animal."</span><br>" !!}
        @else
            {!! ($key+1).".<span style='color:blue;'>".$animal."</span><br>" !!}
        @endif
    @endforeach
    @foreach ($arrayPoint as $point)
        {{  $point  }}<br>
    @endforeach
    <h1>New Text2</h1>
</body>

</html>

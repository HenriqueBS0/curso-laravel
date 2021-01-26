<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
      <h1>Algum Titulo</h1>
      @if (10 > 5)
          <p>A condição é true</p>
      @endif
      @if ($nome == 'Henrique')
          <p>O nome é {{ $nome }}, ele tem {{ $idade }} anos e trabalha como {{ $profissao }}</p>
      @else
          <p>O nome não é $nome</p>
      @endif
      @for ($i = 0; $i < count($arr); $i++)
          <p>{{ $arr[$i] }} - {{ $i }}</p>
          @if ($i == 2)
              <p>O i é igual a 2</p>
          @endif
      @endfor

      @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
      @endforeach

      @php
          $name = 'João';
          echo $name
      @endphp
    </body>
</html>

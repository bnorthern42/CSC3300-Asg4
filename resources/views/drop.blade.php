
<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
      <div class="card-header">Dashboard</div>

        <div class="table_responsive">

          <table class=" table table-bordered table-striped">

            <tbody>

              <thead>
                after drop course
                <tr>
                  <th>TABLE NAME</th>

                </tr>
              </thead>
              <tbody>

                @foreach($tables as $row)
                <tr>
                  <td>{{$row}}</td>
                </tr>
                @endforeach
          </table>
        </div>

    </body>
    @endsection
</html>

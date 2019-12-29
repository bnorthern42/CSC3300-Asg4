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
          Average salary:
          <table class=" table table-bordered table-striped">
            <thead>
              <tr>
                <th>avg salary</th>
                <th>dept_name</th>
              </tr>
            </thead>
            <tbody>
              @foreach($avgS as $row)
              <tr>
                <td>{{$row->average_salary}}</td>
                <td>{{$row->dept_name}}</td>
              </tr>
              @endforeach
          </table>
        </div>

    </body>
    @endsection
</html>

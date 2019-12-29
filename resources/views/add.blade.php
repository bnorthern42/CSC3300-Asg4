
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
          before update
          <table class=" table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>dept_name</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tbody>
              @foreach($select1 as $row)
              <tr>
                <td>{{$row->ID}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->dept_name}}</td>
                <td>{{$row->salary}}</td>

              </tr>
              @endforeach
          </table>
          after update
          <table class=" table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>dept_name</th>
                <th>Salary</th>
                <th>Office number</th>
              </tr>
            </thead>
            <tbody>
              @foreach($select as $row)
              <tr>
                <td>{{$row->ID}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->dept_name}}</td>
                <td>{{$row->salary}}</td>
                <td>
                  <?php if(empty($row->office_no))
                    {
                        echo '<p>' . '' . '</p>';
                    }
                    else if(!empty('$row->office_no')) {
                      echo '<p>'. $row->office_no. '<p>';
                    }
                    ?>
                </td>


              </tr>
              @endforeach
          </table>
        </div>

    </body>
    @endsection
</html>

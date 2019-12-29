@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Dashboard</h3></div>

                <div class="card-body">



                  <div style="text-align: center;" >
                      <form action="/avg" method="get">
                      <button type="submit" name="avg"  class="btn btn-primary">Go to avg salary</button>
                      </form>
                      <br>
                      <form action="/inc" method="get">
                      <button type="submit" name="Increase"  class="btn btn-primary">Increase salary</button>


                      </form>
                      <br>
                      <form action="/del" method="get">
                      <button type="submit" name="del_in"  class="btn btn-primary">delete instructors in physics</button>
                      </form>
                      <br>
                      <form action="/add" method="get">
                      <button type="submit" name="add_attr"  class="btn btn-primary">add offic_no to instructor</button>



                      </form>
                      <br>
                      <form action="/drop" method="get">
                      <button type="submit" name="drop_co"  class="btn btn-primary">drop course table</button>

                      </form>
                      <br>

                      <h3><font color= "4F2984"><b> Warning, this also delete users!!!</b> </h3>



                      <form action="/revert" method="get">
                      <button type="submit" name="revert"  class="btn btn-primary">refresh all tables</button>
                    </div>
                      </form>
                      <br>
                    <h5><font color= "black"><b>You are logged in!</b></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

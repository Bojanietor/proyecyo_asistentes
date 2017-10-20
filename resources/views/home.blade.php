@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal"  action="/actualizar/{{ Auth::user()->id }}" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder="">
                       <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" placeholder=""><br>
                       <input class="form-control" type="text" name="ocupacion" value="{{ Auth::user()->ocupacion }}" placeholder=""><br>
                       <input class="form-control" type="text" name="edad" value="{{ Auth::user()->edad }}" placeholder=""><br>
                       <input class="btn btn-primary" type="submit" name="" value="Actualizar">
                        </div>

                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                          <avatar-upload></avatar-upload>
                        </div>
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text"
                                 class="form-control"
                                 id="name"
                                 name="name"
                                 value="{{ old('name') ?? auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

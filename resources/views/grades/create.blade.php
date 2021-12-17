@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-md-12">
                        <div class="col-md-12" style="padding-right:18%;padding-left: 18%">
        @if (count($errors) > 0)
        <div class="alert alert-danger" >
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(Session::has('success'))
        <p class="alert alert-success">{{Session('success')}}</p>
        @endif

    </div>

                    <div class="card">


                        <form action="{{ route('admin.grades.store') }}" method="POST">
                            @csrf
                        <div class="card-header">{{ __('New Grade') }}</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="grade-name">{{ __('Name') }}</label>
                                        <input value="{{ old('name') }}" class="form-control" name="name" type="text" placeholder="{{ __('Grade name') }}" id="grade-name" required autofocus>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit"> {{ __('Save') }}</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

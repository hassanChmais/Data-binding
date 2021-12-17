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


                        <form action="{{ route('admin.grades.classrooms.update',[$grade,$classroom]) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="card-header">{{ __('Update Class') }}</div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="classroom-name">{{ __('Name') }}</label>
                                        <input class="form-control" name="name" type="text" id="classroom-name" value="{{$classroom->name}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit"> {{ __('Save') }}</button>
                        </div>
                        </form>
                    </div>
                    <form action="{{route('admin.grades.classrooms.destroy',[$grade,$classroom])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit"
                            onclick="return confirm('{{ __('Are you sure?') }}')"> {{ __('Delete This Class') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

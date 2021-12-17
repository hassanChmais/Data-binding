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


                        <form action="{{ route('admin.classrooms.sections.store',$classroom) }}" method="POST">
                            @csrf
                        <div class="card-header">{{ __('New Section in') }}
<b>{{$classroom->name}}</b>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="section-name">{{ __('Name') }}</label>
                                        <input value="{{ old('name') }}" class="form-control" name="name" type="text" placeholder="{{ __('Section name') }}" id="section-name" required autofocus>
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
                        <div class="row">
                <div class="col-md-8">
                <div class="card">
<table class="table table-responsive-sm">
<thead>
<tr>
<th>Sections In {{$classroom->name}}</th>
<th>Edit Section</th>
</tr>
</thead>
<tbody>
@foreach($sections as $section)
<tr>
<td>{{$section->name}}</td>
<td>
    <a href="{{route('admin.classrooms.sections.edit',[$classroom,$section])}}">
    <span class="badge badge-success">Edit</span>
    </a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div></div>
            </div>
        </div>
    </div>
@endsection

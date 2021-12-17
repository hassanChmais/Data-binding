<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="text-center mt-2">
        <img src="{{ asset('img/logo.png') }}" />
    </div>
    <ul class="c-sidebar-nav">

            <li class="c-sidebar-nav-title">{{ __('Dashboard') }}</li>
            
                <li class="c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-dropdown-toggle" href="#">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-folder-open') }}"></use>
                        </svg> Grades
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">
                        @foreach(\App\Models\Grade::all() as $grade)
                <li class="c-sidebar-nav-dropdown">
                    <a class="ml-2 c-sidebar-nav-dropdown-toggle" href="#">
                                <svg class="c-sidebar-nav-icon">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-note-add') }}"></use>
                                </svg>
                                {{$grade->name}}
                            </a>
                    <ul class="c-sidebar-nav-dropdown-items">
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" style="padding: 1rem .5rem .5rem 76px"
                               href="{{route('admin.grades.classrooms.create',$grade)}}">
                                    <svg class="c-sidebar-nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"></use>
                                    </svg>
                            Add Class
                        </a>
                            </li>
                                                    <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" style="padding: 1rem .5rem .5rem 76px"
                               href="{{route('admin.grades.edit',$grade)}}">
                                    <svg class="c-sidebar-nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"></use>
                                    </svg>
                            Edit Grade
                        </a>
                            </li>
                        
                    </ul>
                        </li>
                        @endforeach
                     <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" style="padding: 1rem .5rem .5rem 76px"
                               href="{{route('admin.grades.create')}}">
                                    <svg class="c-sidebar-nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"></use>
                                    </svg>
Create Grade
                                    
                                </a>
                            </li>
                    </ul>
                </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>

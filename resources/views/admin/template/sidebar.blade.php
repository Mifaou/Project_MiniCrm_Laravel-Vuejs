<div class="slim-sidebar">
    {{-- <label class="sidebar-label">Navigation</label> --}}

    <ul class="nav nav-sidebar">
        <li class="sidebar-nav-item">
            <a href="{{route('dashboard')}}" class="sidebar-nav-link {{setSingleActive('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i>
&nbsp;&nbsp;Dashboard</a>
        </li>
    {{-- </ul> --}}
    <label class="sidebar-label mt-3">Companies</label>
        <li class="sidebar-nav-item">
        <li class="sidebar-nav-item">
            <a href="{{route('admin.companies')}}" class="sidebar-nav-link {{setActive(['admin.companies','company_form'])}}"><i class="fa fa-building" aria-hidden="true"></i>
&nbsp;&nbsp;All Companies</a>
        <a href="{{route('admin.company_form')}}" class="sidebar-nav-link "><i class="fa fa-plus" aria-hidden="true"></i>

&nbsp;&nbsp;Add Company</a>


        </li>



        </li>
    </ul>
    <label class="sidebar-label mt-3">Employees</label>
          <li class="sidebar-nav-item">
            <a href="{{route('admin.employee')}}" class="sidebar-nav-link "><i class="fa fa-users" aria-hidden="true"></i>
&nbsp;&nbsp;All Employees</a>

        </li>
<li class="sidebar-nav-item">
<a href="{{route('admin.employee_form')}}" class="sidebar-nav-link "><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Employee</a>


        </li>
    </ul>


  </div>

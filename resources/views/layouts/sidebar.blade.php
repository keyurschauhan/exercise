<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="@if(Request::Route()->getName() == 'home') active @endif"><a class="waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>

                <li class="@if(Request::Route()->getName() == 'companies.index' || Request::Route()->getName() == 'companies.create' || Request::Route()->getName() == 'companies.edit' || Request::Route()->getName() == 'companies.show') active @endif"><a class="waves-effect waves-dark" href="{{ route('companies.index') }}" aria-expanded="false"><i class="mdi mdi-hospital-building text-info"></i><span class="hide-menu">Companies </span></a></li>

                <li class="@if(Request::Route()->getName() == 'employees.index' || Request::Route()->getName() == 'employees.create' || Request::Route()->getName() == 'employees.edit' || Request::Route()->getName() == 'employees.show') active @endif"><a class="waves-effect waves-dark" href="{{ route('employees.index') }}" aria-expanded="false"><i class="mdi mdi-account-multiple text-info"></i><span class="hide-menu">Employees</span></a></li>
                
            </ul>
        </nav>
    </div>
</aside>
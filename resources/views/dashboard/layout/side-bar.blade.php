<aside class="left-sidebar">
    <ul id="slide-out" class="sidenav">
        <li>
            <ul class="collapsible">
                <li class="small-cap"><span class="hide-menu">Home</span></li>
                <li>
                    <a href="{{ route('dashboard') }}" class="collapsible-header" tabindex="0">
                        <i class="material-icons">dashboard</i>
                        <span class="hide-menu"> Dashboard </span>
                    </a>
                </li>
                <li class="small-cap">
                    <span class="hide-menu">Users</span>
                </li>
                <li>
                    <a href="{{ route('users.index') }}"  class="{{ is_active('users') }}" tabindex="0">
                        <i class="material-icons">personal</i>
                        <span class="hide-menu"> Users </span>
                    </a>
                </li>
                <li {{ is_active('doctors') }}>
                    <a href="{{ route('doctors.index') }}"  class="{{ is_active('doctors') }}" tabindex="0">
                        <i class="material-icons">directions_walk</i>
                        <span class="hide-menu"> Doctors </span>
                    </a>
                </li>
                <li {{ is_active('patients') }}>
                    <a href="{{ route('patients.index') }}"  class="{{ is_active('patients') }}" tabindex="0">
                        <i class="material-icons">directions_walk</i>
                        <span class="hide-menu"> Patients </span>
                    </a>
                </li>
                <li class="small-cap">
                    <span class="hide-menu">Hospital</span>
                </li>
                <li {{ is_active('hospitals') }}>
                    <a href="{{ route('hospitals.index') }}"  class="{{ is_active('hospitals') }}" tabindex="0">
                        <i class="material-icons">local_hospital</i>
                        <span class="hide-menu"> Hospitals </span>
                    </a>
                </li>
                <li>
                    <a  href="{{ route('categories.index') }}"  class="{{ is_active('categories') }}"  tabindex="0">
                        <i class="material-icons">account_balance</i>
                        <span class="hide-menu"> Categories </span>
                    </a>
                </li>
                <li class="small-cap">
                    <span class="hide-menu">Pharmacy</span>
                </li>
                <li {{ is_active('pharmacies') }}>
                    <a href="{{ route('pharmacies.index') }}"  class="{{ is_active('pharmacies') }}" tabindex="0">
                        <i class="material-icons">local_pharmacy</i>
                        <span class="hide-menu"> Pharmacies </span>
                    </a>
                </li>
                <li>
                    <a  href="{{ route('medicines.index') }}"  class="{{ is_active('medicines') }}"  tabindex="0">
                        <i class="material-icons">local_pharmacy</i>
                        <span class="hide-menu"> Medicines </span>
                    </a>
                </li>
            </ul>

{{--            <ul class="collapsible">--}}
{{--                <li class="small-cap"><span class="hide-menu">Home</span></li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('dashboard') }}" class="collapsible-header" tabindex="0"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard </span></a>--}}
{{--                </li>--}}
{{--                <li class="small-cap"><span class="hide-menu">Users</span></li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('users.index') }}" class="collapsible-header" tabindex="0"><i class="material-icons">personal</i><span class="hide-menu"> Users </span></a>--}}
{{--                </li>--}}
{{--                <li class="small-cap"><span class="hide-menu">Hospital</span></li>--}}
{{--                <li {{ is_active('') }}>--}}
{{--                    <a href="{{ route('hospitals.index') }}" class="collapsible-header" tabindex="0"><i class="material-icons">local_hospital</i><span class="hide-menu"> Hospitals </span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{ route('categories.index') }}" class="collapsible-header" tabindex="0"><i class="material-icons">account_balance</i><span class="hide-menu"> Categories </span></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
        </li>
    </ul>
</aside>

@php
$default = \App\Language::where('is_default', 1)->first();
$admin = Auth::guard('admin')->user();
if (!empty($admin->role)) {
    $permissions = $admin->role->permissions;
    $permissions = json_decode($permissions, true);
}

$data = \App\BasicExtra::first();
@endphp

<div class="sidebar sidebar-style-2" data-background-color="light">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @if (!empty(Auth::guard('admin')->user()->image))
                    <img src="{{asset('assets/admin/img/propics/'.Auth::guard('admin')->user()->image)}}" alt="..."
                    class="avatar-img rounded">
                    @else
                    <img src="{{asset('assets/admin/img/propics/blank_user.jpg')}}" alt="..." class="avatar-img rounded">
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{Auth::guard('admin')->user()->first_name}}
                            @if (empty(Auth::guard('admin')->user()->role))
                            <span class="user-level">Owner</span>
                            @else
                            <span class="user-level">{{Auth::guard('admin')->user()->role->name}}</span>
                            @endif
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{route('admin.editProfile')}}">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.changePass')}}">
                                    <span class="link-collapse">Change Password</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.logout')}}">
                                    <span class="link-collapse">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary mt-0">
                <div class="row mb-2">
                    <div class="col-12">
                        <form action="">
                            <div class="form-group py-0">
                                <input name="term" type="text" class="form-control sidebar-search" value="" placeholder="Search Menu Here...">
                            </div>
                        </form>
                    </div>
                </div>

                @if (empty($admin->role) || (!empty($permissions) && in_array('Dashboard', $permissions)))
                {{-- Dashboard --}}
                <li class="nav-item @if(request()->path() == 'admin/dashboard') active @endif">
                    <a href="{{route('admin.dashboard')}}">
                        <i class="la flaticon-paint-palette"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @endif





<!-- @if (empty($admin->role) || (!empty($permissions) && in_array('Pages', $permissions)))
{{-- Dynamic Pages --}}
<li class="nav-item
@if(request()->path() == 'admin/page/create') active
@elseif(request()->path() == 'admin/page/settings') active
@elseif(request()->path() == 'admin/pages') active
@elseif(request()->is('admin/page/*/edit')) active
@endif">
<a data-toggle="collapse" href="#pages">
    <i class="la flaticon-file"></i>
    <p>Custom Pages <span class="badge badge-danger p-1 sidenav-badge">Pagebuilder</span></p>
    <span class="caret"></span>
</a>
<div class="collapse
@if(request()->path() == 'admin/page/create') show
@elseif(request()->path() == 'admin/page/settings') show
@elseif(request()->path() == 'admin/pages') show
@elseif(request()->is('admin/page/*/edit')) show
@endif" id="pages">
<ul class="nav nav-collapse">
    <li class="@if(request()->path() == 'admin/page/settings') active @endif">
        <a href="{{route('admin.page.settings')}}">
            <span class="sub-item">Settings</span>
        </a>
    </li>
    <li class="@if(request()->path() == 'admin/page/create') active @endif">
        <a href="{{route('admin.page.create') . '?language=' . $default->code}}">
            <span class="sub-item">Create Page</span>
        </a>
    </li>
    <li class="@if(request()->path() == 'admin/pages') active @endif">
        <a href="{{route('admin.page.index') . '?language=' . $default->code}}">
            <span class="sub-item">Pages</span>
        </a>
    </li>
</ul>
</div>
</li>
@endif -->

{{--gg--}}
@if (empty($admin->role) || (!empty($permissions) && in_array('Pages', $permissions)))
    {{-- Dynamic Pages --}}
    <li class="nav-item
    @if(request()->path() == 'admin/pages/create') active
    @elseif(request()->path() == 'admin/pages') active
    @elseif(request()->is('admin/pages/*/edit')) active
    @endif">
        <a data-toggle="collapse" href="#pages">
            <i class="la flaticon-file"></i>
            <p>Custom Pages(CK) <span class="badge badge-danger p-1 sidenav-badge">Pagebuilder</span></p>
            <span class="caret"></span>
        </a>
        <div class="collapse
        @if(request()->path() == 'admin/pages/create') show
        @elseif(request()->path() == 'admin/pages') show
        @elseif(request()->is('admin/pages/*/edit')) show
        @endif" id="pages">
            <ul class="nav nav-collapse">
                <li class="@if(request()->path() == 'admin/pages') active @endif">
                    <a href="{{ route('admin.page.index') . '?language=' . $default->code }}">
                        <span class="sub-item">Pages</span>
                    </a>
                </li>
                <li class="@if(request()->path() == 'admin/pages/create') active @endif">
                    <a href="{{ route('admin.page.create') . '?language=' . $default->code }}">
                        <span class="sub-item">Create Page</span>
                    </a>
                </li>   
                <li class="@if(request()->path() == 'admin/media-upload/create') active @endif">
                    <a href="{{ route('admin.media.upload.create') . '?language=' . $default->code }}">
                        <span class="sub-item">Image & Video Upload</span>
                    </a>
                </li>
                <li class="@if(request()->path() == 'admin/media-upload/') active @endif">
                    <a href="{{ route('admin.media.upload.index') . '?language=' . $default->code }}">
                        <span class="sub-item">Image & Video Pages</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
@endif





@if (empty($admin->role) || (!empty($permissions) && in_array('Package Management', $permissions)))
{{-- Package Management --}}
<li class="nav-item
@if(request()->path() == 'admin/packages') active
@elseif(request()->routeIs('admin.package.edit')) active
@elseif(request()->path() == 'admin/package/form') active
@elseif(request()->is('admin/package/*/inputEdit')) active
@elseif(request()->path() == 'admin/all/orders') active
@elseif(request()->path() == 'admin/pending/orders') active
@elseif(request()->path() == 'admin/processing/orders') active
@elseif(request()->path() == 'admin/completed/orders') active
@elseif(request()->path() == 'admin/rejected/orders') active
@elseif(request()->path() == 'admin/package/settings') active
@elseif(request()->path() == 'admin/package/categories') active
@elseif(request()->routeIs('admin.subscriptions')) active
@elseif(request()->path() == 'admin/package/order/report') active
@endif"
>
<a data-toggle="collapse" href="#packages">
    <i class="la flaticon-box-1"></i>
    <p>Package Management</p>
    <span class="caret"></span>
</a>
<div class="collapse
@if(request()->path() == 'admin/packages') show
@elseif(request()->routeIs('admin.package.edit')) show
@elseif(request()->path() == 'admin/package/form') show
@elseif(request()->is('admin/package/*/inputEdit')) show
@elseif(request()->path() == 'admin/all/orders') show
@elseif(request()->path() == 'admin/pending/orders') show
@elseif(request()->path() == 'admin/processing/orders') show
@elseif(request()->path() == 'admin/completed/orders') show
@elseif(request()->path() == 'admin/rejected/orders') show
@elseif(request()->path() == 'admin/package/settings') show
@elseif(request()->path() == 'admin/package/categories') show
@elseif(request()->routeIs('admin.subscriptions')) show
@elseif(request()->path() == 'admin/package/order/report') show
@endif" id="packages"
>
<ul class="nav nav-collapse">
    <li class="@if(request()->path() == 'admin/package/settings') active @endif">
        <a href="{{route('admin.package.settings')}}">
            <span class="sub-item">Settings</span>
        </a>
    </li>
    @if ($data->package_category_status == 1)
    <li class="@if(request()->path() == 'admin/package/categories') active @endif">
        <a href="{{route('admin.package.categories') . '?language=' . $default->code}}">
            <span class="sub-item">Categories</span>
        </a>
    </li>
    @endif
    <li class="@if(request()->path() == 'admin/package/form') active
        @elseif(request()->is('admin/package/*/inputEdit')) active
        @endif"
        >
        <a href="{{route('admin.package.form') . '?language=' . $default->code}}">
            <span class="sub-item">Form Builder</span>
        </a>
    </li>
    <li class="@if(request()->path() == 'admin/packages') active
        @elseif(request()->routeIs('admin.package.edit')) active
        @endif"
        >
        <a href="{{route('admin.package.index') . '?language=' . $default->code}}">
            <span class="sub-item">Packages</span>
        </a>
    </li>
    @if ($bex->recurring_billing == 1)
    <li class="submenu">
        <a data-toggle="collapse" href="#manageSubscriptions"
        aria-expanded="{{((request()->routeIs('admin.subscriptions') && request()->input('type') != 'request')) ? 'true' : 'false' }}">
        <span class="sub-item">Subscriptions</span>
        <span class="caret"></span>
    </a>
    <div class="collapse @if((request()->routeIs('admin.subscriptions') && request()->input('type') != 'request')) show @endif" id="manageSubscriptions" style="">
        <ul class="nav nav-collapse subnav">
            <li class="@if(request()->routeIs('admin.subscriptions') && request()->input('type') == 'all') active @endif">
                <a href="{{route('admin.subscriptions', ['type' => 'all'])}}">
                    <span class="sub-item">All Subscriptions</span>
                </a>
            </li>
            <li class="@if(request()->routeIs('admin.subscriptions') && request()->input('type') == 'active') active @endif">
                <a href="{{route('admin.subscriptions', ['type' => 'active'])}}">
                    <span class="sub-item">Active Subscriptions</span>
                </a>
            </li>
            <li class="@if(request()->routeIs('admin.subscriptions') && request()->input('type') == 'expired') active @endif">
                <a href="{{route('admin.subscriptions', ['type' => 'expired'])}}">
                    <span class="sub-item">Expired Subscriptions</span>
                </a>
            </li>
        </ul>
    </div>
</li>
<li class="@if(request()->routeIs('admin.subscriptions') && request()->input('type') == 'request') active @endif">
    <a href="{{route('admin.subscriptions', ['type' => 'request'])}}">
        <span class="sub-item">Subscription Requests</span>
    </a>
</li>
@endif
@if ($bex->recurring_billing == 0)
<li class="submenu">
    <a data-toggle="collapse" href="#packageOrders"
    aria-expanded="{{(request()->path() == 'admin/all/orders' || request()->path() == 'admin/pending/orders' || request()->path() == 'admin/processing/orders' || request()->path() == 'admin/completed/orders' || request()->path() == 'admin/rejected/orders' || request()->path() == 'admin/package/order/report') ? 'true' : 'false' }}">
    <span class="sub-item">Manage Orders</span>
    <span class="caret"></span>
</a>
<div class="collapse {{(request()->path() == 'admin/all/orders' || request()->path() == 'admin/pending/orders' || request()->path() == 'admin/processing/orders' || request()->path() == 'admin/completed/orders' || request()->path() == 'admin/package/order/report') ? 'show' : '' }}" id="packageOrders" style="">
    <ul class="nav nav-collapse subnav">
        <li class="@if(request()->path() == 'admin/all/orders') active @endif">
            <a href="{{route('admin.all.orders')}}">
                <span class="sub-item">All Orders</span>
            </a>
        </li>
        <li class="@if(request()->path() == 'admin/pending/orders') active @endif">
            <a href="{{route('admin.pending.orders')}}">
                <span class="sub-item">Pending Orders</span>
            </a>
        </li>
        <li class="@if(request()->path() == 'admin/processing/orders') active @endif">
            <a href="{{route('admin.processing.orders')}}">
                <span class="sub-item">Processing Orders</span>
            </a>
        </li>
        <li class="@if(request()->path() == 'admin/completed/orders') active @endif">
            <a href="{{route('admin.completed.orders')}}">
                <span class="sub-item">Completed Orders</span>
            </a>
        </li>
        <li class="@if(request()->path() == 'admin/rejected/orders') active @endif">
            <a href="{{route('admin.rejected.orders')}}">
                <span class="sub-item">Rejected Orders</span>
            </a>
        </li>
        <li class="@if(request()->path() == 'admin/package/order/report') active @endif">
            <a href="{{route('admin.package.report')}}">
                <span class="sub-item">Report</span>
            </a>
        </li>
    </ul>
</div>
</li>
@endif
</ul>
</div>
</li>
@endif

@if (empty($admin->role) || (!empty($permissions) && in_array('Quote Management', $permissions)))
{{-- Quotes --}}
<li class="nav-item
@if(request()->path() == 'admin/quote/form') active
@elseif(request()->is('admin/quote/*/inputEdit')) active
@elseif(request()->path() == 'admin/all/quotes') active
@elseif(request()->path() == 'admin/pending/quotes') active
@elseif(request()->path() == 'admin/processing/quotes') active
@elseif(request()->path() == 'admin/completed/quotes') active
@elseif(request()->path() == 'admin/rejected/quotes') active
@elseif(request()->path() == 'admin/quote/visibility') active
@endif">
{{-- gg --}}
<a data-toggle="collapse" href="#quote">
    <i class="la flaticon-list"></i>
    <p>Mentor</p>
    <span class="caret"></span>
</a>
<div class="collapse
@if(request()->path() == 'admin/quote/form') show
@elseif(request()->is('admin/quote/*/inputEdit')) show
@elseif(request()->path() == 'admin/all/quotes') show
@elseif(request()->path() == 'admin/pending/quotes') show
@elseif(request()->path() == 'admin/processing/quotes') show
@elseif(request()->path() == 'admin/completed/quotes') show
@elseif(request()->path() == 'admin/rejected/quotes') show
@elseif(request()->path() == 'admin/quote/visibility') show
@endif" id="quote">
<ul class="nav nav-collapse">
    <li class="
    @if(request()->path() == 'admin/homes') active
    @endif">
    <a href="{{route('admin.homes.index')}}">
        <span class="sub-item"> Home Mentors</span>
    </a>
<li class="@if(request()->path() == 'admin/homes/create') active @endif">
    <a href="{{route('admin.homes.create')}}">
        <span class="sub-item">Create Home Mentor</span>
    </a>
</li>
<li class="@if(request()->path() == 'admin/mentor_chanakya') active @endif">
    <a href="{{route('admin.mentor_chanakya.index')}}">
        <span class="sub-item">Chanakya Mentors</span>
    </a>
</li>
<li class="@if(request()->path() == 'admin/mentor_chanakya/create') active @endif">
    <a href="{{route('admin.mentor_chanakya.create')}}">
        <span class="sub-item">Create Chanakya Mentor</span>
    </a>
</li>
<li class="@if(request()->path() == 'admin/mentor_team') active @endif">
    <a href="{{route('admin.mentor_team.index')}}">
        <span class="sub-item">Team Mentors</span>
    </a>
</li>
<li class="@if(request()->path() == 'admin/mentor_team/create') active @endif">
    <a href="{{route('admin.mentor_team.create')}}">
        <span class="sub-item">Create Team Mentor</span>
    </a>
</li>
</ul>
</div>
</li>
@endif





{{-- Events Manage --}}
@if (empty($admin->role) || (!empty($permissions) && in_array('Events Management', $permissions)))
<li class="nav-item
@if(request()->path() == 'admin/event/categories') active
@elseif(request()->path() == 'admin/event/settings') active
@elseif(request()->path() == 'admin/events') active
@elseif(request()->path() == 'admin/events/payment-log') active
@elseif(request()->is('admin/event/*/edit')) active
@elseif(request()->path() == 'admin/events/report') active
@endif">
<a data-toggle="collapse" href="#event_manage">
    <i class="fas fa-calendar-alt"></i>
    <p>Events Management</p>
    <span class="caret"></span>
</a>
<div class="collapse
@if(request()->path() == 'admin/event/categories') show
@elseif(request()->path() == 'admin/event/settings') show
@elseif(request()->path() == 'admin/events') show
@elseif(request()->path() == 'admin/events/payment-log') show
@elseif(request()->is('admin/event/*/edit')) show
@elseif(request()->path() == 'admin/events/report') show
@endif" id="event_manage">
<ul class="nav nav-collapse">
    <li class="@if(request()->path() == 'admin/event/settings') active @endif">
        <a href="{{route('admin.event.settings')}}">
            <span class="sub-item">Settings</span>
        </a>
    </li>
    <li class="@if(request()->path() == 'admin/event/categories') active @endif">
        <a href="{{route('admin.event.category.index') . '?language=' . $default->code}}">
            <span class="sub-item">Category</span>
        </a>
    </li>
    <li class="
    @if(request()->path() == 'admin/events') active
    @elseif(request()->is('admin/event/*/edit')) active
    @endif">
    <a href="{{route('admin.event.index') . '?language=' . $default->code}}">
        <span class="sub-item">All Events</span>
    </a>
</li>
<li class="@if(request()->path() == 'admin/events/payment-log') active @endif">
    <a href="{{route('admin.event.payment.log') . '?language=' . $default->code}}">
        <span class="sub-item">Bookings</span>
    </a>
</li>
<li class="@if(request()->path() == 'admin/events/report') active @endif">
    <a href="{{route('admin.event.report')}}">
        <span class="sub-item">Report</span>
    </a>
</li>
</ul>
</div>
</li>
@endif


</ul>
</div>
</div>
</div>

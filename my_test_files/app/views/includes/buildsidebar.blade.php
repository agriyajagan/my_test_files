<?php
$userroles = [];
if (Auth::check()) {
    foreach (Auth::user()->roles()->getResults()->toArray() as $role) {
        $userroles[] = $role['role_id'];
    }
}
?>
@if(in_array(1, $userroles))
<ul class="nav navbar-nav side-nav">

    <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>

    <li class="">
        <a href="">
            <i class="fa fa-gears"></i> User Management <b class="caret"></b>
        </a>
        <ul>
            <li><a href="{{ URL::to('admin/users/') }}"><i class="fa fa-user"></i> User</a></li>
            <li><a href="{{ URL::to('admin/roles/') }}"><i class="fa fa-users"></i> User Roles</a></li>
            <li><a href="{{ URL::to('admin/acl/') }}"><i class="fa fa-lock"></i> Access Control</a></li>
        </ul>
    </li>

    <li class="">
        <a href="">
            <i class="fa fa-tablet"></i> Mobile Management <b class="caret"></b>
        </a>
        <ul>
            <li><a href="{{ URL::to('mobile/push/device/') }}"><i class="fa fa-mobile"></i> Device</a></li>
            <li><a href="{{ URL::to('mobile/push/message/') }}"><i class="fa fa-envelope"></i> Message</a></li>
            <li><a href="{{ URL::to('mobile/push/failedmessage/') }}"><i class="fa fa-chain-broken"></i> Failed Messages</a></li>
        </ul>
    </li>

    <li class="">
        <a href="">
            <i class="fa fa-caret-square-o-down"></i> Template <b class="caret"></b>
        </a>
        <ul>
            <li><a href="#/common/blank-page">Version</a></li>
        </ul>
    </li>

</ul>
@endif
<div class="profile-top-header">
    <nav class="navbar">
        <div class="navbar-inner">
            <div class="navbar-header hidden-xs">
                <a class="navbar-brand <?php echo (isset($maintab) && $maintab == 'home') ? 'active' : ''; ?>" href="{{ URL::to('/profiles/') }}">
                    <strong>Parent</strong> Profiles <sup class="small">SM</sup>
                </a>
            </div>
            <ul class="menu-tabs nav nav-tabs navbar-header">
                <li class="tab first <?php echo (isset($maintab) && $maintab == 'pregnant') ? 'active' : ''; ?>">
                    <a href="{{ URL::to('/profiles/pregnant/') }}" class="no-radius pregnant">
                        <span>Pregnant</span>
                    </a>
                    <ul class="dropdown-menu no-box-shadow hidden-xs">
                        <li><a href="#">Find Hopeful Adoptive Parents</a></li>
                        <li><a href="#">Birth Parent Success Stories</a></li>
                        <li><a href="{{ URL::to('profiles/faq') }}">Frequently Asked Questions</a></li>
                        <li><a href="#">Support Groups</a></li>
                        <li><a href="#">Choosing an Adoptive Family</a></li>
                        <li><a href="#">Is Open Adoption Right for Me?</a></li>
                    </ul>
                </li>
                <li class="tab <?php echo (isset($maintab) && $maintab == 'adopting') ? 'active' : ''; ?>">
                    <a href="{{ URL::to('/profiles/adopting/') }}" class="no-radius adopting">
                        <span>Adopting</span>
                    </a>
                    <ul class="dropdown-menu no-box-shadow hidden-xs">
                        <li><a href="{{ URL::to('profiles/success-story') }}">Adoptive Parent Success Stories</a></li>
                        <li><a href="{{ URL::to('profiles/faq') }}">Frequently Asked Questions</a></li>
                        <li><a href="#">Support Groups</a></li>
                        <li><a href="{{ URL::to('profiles/adoption-scam-tips') }}">How to Stay Safe</a></li>
                        <li><a href="{{ URL::to('profiles/spread-the-word') }}">Spread The Word</a></li>
                    </ul>
                </li>
                <li class="tab last <?php echo (isset($maintab) && $maintab == 'professional') ? 'active' : ''; ?>">
                    <a href="{{ URL::to('/profiles/professional/') }}" class="no-radius professional">
                        <span>Professional</span>
                    </a>
                </li>
            </ul>

            <div class="navbar-right hidden-xs profile-btn">
                @if(Auth::check())
                <a class="btn btn-sm btn-orange-border" href="{{ URL::to('/profiles/member/profile.php?profile_id=myself') }}">MY PROFILE </a>
                @else
                <a class="btn btn-sm btn-orange-border" href="{{ URL::to('/sso/login') }}">Log In </a>
                @endif
            </div>
        </div>
    </nav>
</div>

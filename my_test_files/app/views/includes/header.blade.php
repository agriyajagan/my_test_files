<div class="navbar-header pull-left">
    <button type="button" class="navbar-toggle hidden-sm hidden-md">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand  hidden-xs" href="javascript:void(0);" data-toggle="modal" data-target=".globalnav-modal-lg">
        <img class="pull-left" src="{{ App\Libraries\Helper::asset('img/adoption.com_logo.png') }}" alt="Adoption.com" />
        <i class="fa fa-chevron-down"></i>
    </a>
</div>

<!-- Large modal -->
<div class="modal fade globalnav-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="popup-logo">
                <a href="{{Url::to('/')}}">
                    <img class="pull-left" src="{{ App\Libraries\Helper::asset('img/adoption.com_login_logo.png') }}" width="128" height="20" alt="Adoption.com" />
                </a>
            </div>

            <div class="row menu-popup">
                {{ App\Libraries\Helper::globalMenuModal() }}
            </div>

            <button type="button" class="close pull-left popup-hidden-button" data-dismiss="modal">
                <span aria-hidden="true"><i class="fa fa-chevron-up"></i></span>
            </button>
        </div>
    </div>
</div>

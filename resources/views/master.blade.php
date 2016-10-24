<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=">
    <link rel="icon" type="image/x-icon" href="/favicon.ico?v=">
    <title>Sociobet</title>
    <meta name="keywords" content="">
    <meta name="description" content="">-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Sosyobet CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap-slider/slider.css">
    <link rel="stylesheet" href="/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="/plugins/iCheck/all.css">
    <link rel="stylesheet" href="/css/skin-blue.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>

</head>
<body class="hold-transition skin-blue fixed sidebar-collapse">
<?php
$user = Auth::user();
?>
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Sociobet</b>.com</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-fixed-top" role="navigation">
        @if (Auth::check())
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle hidden-sm hidden-md hidden-lg" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu message-menu-id">

                    </li>
                    <!-- /.messages-menu -->
                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu" id="notification-menu-id">

                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="http://placehold.it/160x160" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo $user->username; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="http://placehold.it/160x160" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $user->username; ?>
                                    <small>Kasım 2016'dan Beri Üyesiniz</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Takipçilerim</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Takiptekiler</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Kuponlarım</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/profil/{{ $user->username }}" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-right">
                                    <form action="{{ url('/logout') }}" method="POST">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn btn-default btn-flat">
                                            Çıkış Yap
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    @if (Auth::check())
                    <?php /* if ($this->user['is_admin']) :*/ ?>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                    <?php /*endif;*/ ?>
                </ul>
            </div>
            @else
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/giris">Giriş Yap</a></li>
                    <li class=""><a href="/kayit">Kayıt Ol</a></li>
                </ul>
            </div>
            @endif
        @endif
        </nav>
    </header>
    <!-- Left side clumn. contains the logo and sidebar -->
    <aside class="main-sidebar  hidden-sm hidden-md hidden-lg">
        <!-- sidebar: style can be found in sidebar.less -->
    @if (Auth::check())
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="http://placehold.it/160x160" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $user->username; ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Çevirimiçi</a>
                </div>
            </div>
            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Arama...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header"></li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="/"><i class="fa fa-link"></i> <span>Anasayfa</span></a></li>
                <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Kuponlar</span></a></li>
                <li><a href="#"><i class="fa fa-link"></i> <span>Market</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Profil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Profil Ayarları</a></li>
                        <li><a href="#">Çıkış</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    @endif
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container">
            <!-- Your Page Content Here -->


                    @if (Auth::check())
                    <div class="row">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                            <li class="active">Kuponlar</li>
                        </ol>
                    </section>
                </div>
                    @endif

    @yield('content')

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            <strong><a href="#"></a></strong>
        </div>
        <!-- Default to the left -->
        <strong>&copy; 2016 <a href="#">Sosyobet.com</a></strong> - Bahisçilerin Ortak Adresi.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        @if (Auth::check())
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Olaylar</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-check bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Güncelleme</h4>

                                <p>Maç Durumları</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Yükleniyor</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Durum
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">Ayarlar</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Bildirimler
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Anlık bildirimlerin sisteme düşmesi.
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
        @endif
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<div class="example-modal">
    <div class="modal" id="shareModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Paylaş</h4>
                </div>
                <div class="modal-body" id="shareModalContent">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary" onclick="shareShare();" id="shareShareButton">Paylaş</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->

    <!-- Scripts -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.min.js"></script>
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <script src="/plugins/bootstrap-slider/bootstrap-slider.js"></script>
    <script src="/plugins/pace/pace.min.js"></script>
    <!-- Select2 -->
    <script src="/plugins/select2/select2.full.min.js"></script>
    <script type="text/javascript">
        /// Affix ///
        $(window).bind('resize scroll hide.bs.collapse show.bs.collapse', function()
        {
            var $affixElement = $('div[data-spy="affix"]');
            var $anotherDiv = $('.col-sm-9');
            var $newWidth = $anotherDiv.width()/3;
            $affixElement.width($affixElement.parent().width());
        });
        /// Filtre Slider ///
        $(function () {
            $('.slider').slider();
        });
        /// CheckBOX && RadioButton ///
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });
        $(".select2").select2();
        function loadall(){
            $('#notification-menu-id').load('/loadNotification',function () {
                /*$(this).unwrap();*/
            });
            $('.message-menu-id').load('/loadMessageLast',function () {
                /*$(this).unwrap();*/
            });
        }
        function sendShare() {

            var inputContent = document.getElementById('inputContent').value;
            $("#inputContent").prop('disabled', true);
            $("#send-btn-share").prop('disabled', true);
            $.ajax({
                url: '/addShare',
                type: 'POST',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                data: {inputContent: inputContent },
                success: function(data){
                    loadshare();
                    $('#inputContent').val(" ");
                    $("#inputContent").prop('disabled', false);
                    $("#send-btn-share").prop('disabled', false);
                },
                error: function(jqXHR, textStatus, err){}
            })
        }
        function shareLike(shareid)
        {
            $.ajax({
                url: '/addShareLike',
                type: 'POST',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                data: {shareId: shareid },
                success: function(data){
                    loadshare();
                },
                error: function(jqXHR, textStatus, err){}
            })
        }
        function shareComment(shareid)
        {
            var deger = "msg"+shareid;
            var bttn = "msgbttn"+shareid;
            var message = document.getElementById(deger).value;
            $("#"+deger).prop('disabled', true);
            $("#"+bttn).prop('disabled', true);
            $.ajax({
                url: '/addShareComment',
                type: 'POST',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                data: {message: message, shareId: shareid },
                success: function(data){
                    loadshare();
                    $("#"+deger).prop('disabled', false);
                    $("#"+bttn).prop('disabled', false);
                },
                error: function(jqXHR, textStatus, err){}
            })
        }
        function userFollow(followid)
        {

            $.ajax({
                url: '/userFollow',
                type: 'POST',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                data: {followId: followid },
                success: function(data){
                    /*loadshare();*/
                    location.reload();
                },
                error: function(jqXHR, textStatus, err){}
            })
        }
        function shareShare(shareid)
        {
            var shareContent = document.getElementById('inputShareShareContent').value;
            $.ajax({
                url: '/addShareShare',
                type: 'POST',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                data: {shareId: shareid, shareContent: shareContent },
                success: function(data){
                    $('#shareModalContent').empty();
                    $('#shareModal').modal('hide');
                    loadshare();
                },
                error: function(jqXHR, textStatus, err){}
            })
        }
        function trigShareModal(shareid)
        {
            $('#shareModal').modal('show');
            $('#shareModalContent').load('/showShare/'+shareid,function () {
            });
            $("#shareShareButton").attr("onclick","shareShare("+shareid+")");
        }
        function ntfnDelete(ntfnid)
        {
            $('#profileNtfn'+ntfnid).hide();
            $.ajax({
                url: '/deleteNtfn',
                type: 'POST',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                data: {ntfnid: ntfnid },
                success: function(data){
                    /*loadshare();*/
                    /*location.reload();*/
                },
                error: function(jqXHR, textStatus, err){}
            })
        }
        function sendMessage(receiver)
        {
            var pvMessage = document.getElementById('pvMessage').value;
            $("#pvMessage").prop('disabled', true);
            $("#pvMessageBttn").prop('disabled', true);
            $.ajax({
                url: '/saveMessage',
                type: 'POST',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf-token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                data: {pvMessage: pvMessage, receiver: receiver },
                success: function(data){
                    loadmessage(receiver);
                    $('#pvMessage').val(" ");
                    $("#pvMessage").prop('disabled', false);
                    $("#pvMessageBttn").prop('disabled', false);
                },
                error: function(jqXHR, textStatus, err){}
            })
        }
        loadall();
        setInterval(function(){
            loadall(); // this will run after every 30 seconds
            /*loadmessage();*/
        }, 20000);

    </script>
</body>
</html>
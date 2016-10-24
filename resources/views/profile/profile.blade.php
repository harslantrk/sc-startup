@extends('master')

@section('content')
<?php
$user = Auth::user();
?>
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="http://placehold.it/128x128" alt="User profile picture">

                <h3 class="profile-username text-center"><?php echo $profilUser->name." ".$profilUser->surname; ?></h3>

                <p class="text-muted text-center"> <?php echo $profilUser->username ?></p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Takipçiler</b> <a class="pull-right">{{ $followerCount }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Takip Ettikleri</b> <a class="pull-right">{{ $followCount }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Kuponlar</b> <a class="pull-right">102</a>
                    </li>
                </ul>
                @if ($user->username==$profilUser->username)
                <a href="/çıkış" class="btn btn-danger btn-block"><b>Çıkış</b></a>
                @else
                    @if($followStatus=="1")
                        <button class="btn btn-danger btn-block" onclick="userFollow({{ $profilUser->id }});"><b>Takip Bırak!</b></button>
                    @else
                        <button class="btn btn-primary btn-block" onclick="userFollow({{ $profilUser->id }});"><b>Takip Et!</b></button>
                    @endif
                @endif
                <a href="/mesajlar/{{ $profilUser->username }}" class="btn btn-success btn-block"><b>Mesaj Gönder</b></a>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Başarı</h3>
            </div>
            <div class="box-body">
                <div class="progress active">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                        %67
                    </div>
                </div>
            </div>
        </div>

        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Hakkında</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i> Bilgi</strong>

                <p class="text-muted">
                    Kullanıcı Hakkında Önyazı Kullanıcının Kendisinin Girdiği Herkese Gözükecek Olan
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Konum</strong>

                <p class="text-muted">Şişli, İstanbul</p>

                <hr>

                <strong><i class="fa fa-soccer-ball-o margin-r-5"></i> İlgilendiği Sporlar</strong>

                <p>
                    <span class="label label-danger">Basketbol</span>
                    <span class="label label-success">Futbol</span>
                    <span class="label label-info">Voleybol</span>
                    <span class="label label-warning">At Yarışı</span>
                </p>

                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notlar</strong>

                <p>Bu kullanıcı Şimdiye Kadar <a>57</a> kez kazandırdı!</p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <img src="http://placehold.it/800x300" class="img-responsive" style="height:300px; width:100%;">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Paylaşımlar</a></li>
                <li><a href="#timeline" data-toggle="tab">Kuponlar</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="http://placehold.it/35x35" alt="user image">
                        <span class="username">
                          <a href="#">Özgür Sel</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                            <span class="description">Herkeze Açık - 7:30 PM Bugün</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                            Kullanıcının Pasylaştığı Metinler, Kuponlar Sekmesinde Sadece Kuponlar Gözükecek İsteğe Göre Hepsinin Aynı bir Akıştada Akmasını Sağlayabiliriz,
                        </p>
                        <ul class="list-inline">
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Paylaş</a></li>
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Beğen</a>
                            </li>
                            <li class="pull-right">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Yorumlar
                                    (5)</a></li>
                        </ul>

                        <input class="form-control input-sm" type="text" placeholder="Yorum Yaz..">
                    </div>
                    <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <li class="time-label">
                        <span class="bg-blue">
                          12 Kasım 2016
                        </span>
                        </li>
                        <!-- /.timeline-label -->
                        <li>
                            <i class="fa fa-asterisk bg-yellow"></i>
                            <div class="timeline-item">
                                <span style="color:white" class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h3 class="timeline-header bg-yellow">Kupon Başlığı (Sonucu Bilinmeyen)</h3>
                                <div class="timeline-body">
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Kupon Detayı</a>
                                    <a class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-check bg-green"></i>
                            <div class="timeline-item">
                                <span style="color:white" class="time"><i class="fa fa-clock-o"></i> 19:25</span>
                                <h3 class="timeline-header bg-green">Kupon Başlığı (Tutan Kupon)</h3>
                                <div class="timeline-body">

                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Kupon Detayı</a>
                                    <a class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-check bg-green"></i>
                            <div class="timeline-item">
                                <span style="color:white" class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h3 class="timeline-header bg-green">Kupon Başlığı (Tutan Kupon)</h3>
                                <div class="timeline-body">

                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Kupon Detayı</a>
                                    <a class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-times bg-red"></i>
                            <div class="timeline-item">
                                <span style="color:white" class="time"><i class="fa fa-clock-o"></i> 13:50</span>
                                <h3 class="timeline-header bg-red">Kupon Başlığı (Yatan Kupon)</h3>
                                <div class="timeline-body">

                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Kupon Detayı</a>
                                    <a class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="time-label">
                    <span class="bg-red">
                      10 Kasım 2016
                    </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-minus bg-gray"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h3 class="timeline-header">Kupon Başlığı (Sonucu Bilinmeyen)</h3>
                                <div class="timeline-body">
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Kupon Detayı</a>
                                    <a class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                        </li>
                    </ul>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
@endsection
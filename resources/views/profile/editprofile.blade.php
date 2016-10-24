@extends('master')

@section('content')
    <link rel="stylesheet" href="/plugins/croppie/croppie.css" type="text/css" />
<?php
$user = Auth::user();
?>
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="http://placehold.it/128x128" alt="User profile picture">
                <div style="text-align:center; cursor:pointer;" onclick="trigImageCrop();"><i class="fa fa-upload" aria-hidden="true"></i></div>

                <h3 class="profile-username text-center"><?php echo $profilUser->name." ".$profilUser->surname; ?></h3>

                <p class="text-muted text-center"> <?php echo $profilUser->username ?></p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Takipçiler</b> <a class="pull-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                        <b>Takip Ettikleri</b> <a class="pull-right">543</a>
                    </li>
                    <li class="list-group-item">
                        <b>Kuponlar</b> <a class="pull-right">102</a>
                    </li>
                </ul>
                @if ($user->username==$profilUser->username)
                    <a href="/mesajlar" class="btn btn-primary btn-block"><b>Mesajlarım</b></a>
                    <a href="/çıkış" class="btn btn-danger btn-block"><b>Çıkış</b></a>
                @else
                <a href="#" class="btn btn-primary btn-block"><b>Takip Et!</b></a>
                @endif
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
                <li><a href="#notification" data-toggle="tab">Bildirimler</a></li>
                <li><a href="#settings" data-toggle="tab">Ayarlar</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane showMyShare" id="activity">

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

                <!-- /.tab-pane -->
                <div class="tab-pane" id="notification">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <li class="time-label">
                        <span class="bg-blue">
                          Son 20 Bildiriminiz
                        </span>
                        </li>
                        <!-- /.timeline-label -->
                        @foreach($notification as $ntnvalue)
                            <?php
                                if($ntnvalue->type==1)
                                    {
                                        $bgclass = "bg-green";
                                    }
                                elseif($ntnvalue->type==2)
                                    {
                                        $bgclass = "bg-aqua";
                                    }
                                elseif($ntnvalue->type==3)
                                    {
                                        $bgclass = "bg-blue";
                                    }
                                elseif($ntnvalue->type==4)
                                    {
                                        $bgclass = "bg-green";
                                    }
                                elseif($ntnvalue->type==5)
                                    {
                                        $bgclass = "bg-aqua";
                                    }
                            ?>
                        <li id="profileNtfn{{ $ntnvalue->id }}">
                            <i class="fa fa-asterisk {{ $bgclass }}"></i>
                            <div class="timeline-item">
                                <span style="color:white" class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h3 class="timeline-header {{ $bgclass }}">{{ $ntnvalue->content }}</h3>
                                <div class="timeline-body">
                                </div>
                                <div class="timeline-footer">
                                    <a href="{{ $ntnvalue->url }}" class="btn btn-primary btn-xs">Bildirime Git</a>
                                    <button class="btn btn-danger btn-xs" onclick="ntfnDelete({{ $ntnvalue->id }});" data-widget="remove">Sil</button>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <!-- END timeline item -->
                        <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                        </li>
                    </ul>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="/guncelleProfil" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Kullanıcı Adı</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputUsername" placeholder="Kullanıcı Adı" value="{{ $profilUser->username }}" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ $profilUser->email }}" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Ad</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Ad" value="{{ $profilUser->name }}" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Soyad</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSurname" placeholder="Soyad" value="{{ $profilUser->surname }}" name="surname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Hakkında</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputExperience" placeholder="Hakkında" name="about">{{ $profilUser->about }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">İlgilendiğin Sporlar</label>

                            <div class="col-sm-10">
                                <select class="form-control select2" multiple="multiple" data-placeholder="İlgilendiğin Sporlar" style="width: 100%;" name="inputSkills[]">
                                        <option value="Futbol">Futbol</option>
                                        <option value="Basketbol">Basketbol</option>
                                        <option value="Voleybol">Voleybol</option>
                                        <option value="Hentbol">Voleybol</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Ayarları Kaydet</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<div class="example-modal">
    <div class="modal" id="imageCropModal">
        <div class="modal-dialog">
            <div class="modal-content" style="width:750px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Profil Resmi</h4>
                </div>
                <div class="modal-body">
                    <!-- This is the image we're attaching Jcrop to -->
                    <!--<div class="col-1-2">
                        <div id="cropbox"></div>
                    </div>-->
                    <div class="col-1-2">
                        <div class="actions">
                            <a class="btn file-btn">
                                <span>Upload</span>
                                <input type="file" id="upload" value="Choose a file" accept="image/*" />
                            </a>
                            <button class="upload-result">Result</button>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="upload-msg">
                            Upload a file to start cropping
                        </div>
                        <div id="upload-demo"></div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary" onclick="shareShare();" id="shareShareButton">Paylaş</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->
<script src="/plugins/croppie/croppie.js"></script>
<script type="text/javascript">
    function loadmyshare(){
        $(".showMyShare").load("/loadMYShare/{{ $user->id }}");
        setTimeout(loadmyshare, 50000);
    }
    function imageCrop() {
        $( "#cropbox" ).empty();
        var $uploadCrop;

        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.upload-demo').addClass('ready');
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function(){
                        console.log('jQuery bind complete');
                    });

                }

                reader.readAsDataURL(input.files[0]);
            }
            else {
                swal("Sorry - you're browser doesn't support the FileReader API");
            }
        }

        $uploadCrop = $('#upload-demo').croppie({
            viewport: {
                width: 100,
                height: 100,
                type: 'circle'
            },
            boundary: {
                width: 300,
                height: 300
            },
            enableExif: true
        });

        $('#upload').on('change', function () { readFile(this); });
        $('.upload-result').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {
                popupResult({
                    src: resp
                });
            });
        });
        /*var $w = $('.basic-width'),
                $h = $('.basic-height'),
                basic = $('#cropbox').croppie({
                    viewport: {
                        width: 150,
                        height: 200
                    }
                });
        basic.croppie('bind', {
            url: '/plugins/croppie/demo/cat.jpg',
            points: [77,469,280,739]
        });

        $('.basic-result').on('click', function() {
            var w = parseInt($w.val(), 10),
                    h = parseInt($h.val(), 10),
                    size = 'viewport';
            if (w || h) {
                size = { width: w, height: h };
            }
            basic.croppie('result', {
                type: 'canvas',
                size: size
            }).then(function (resp) {
                popupResult({
                    src: resp
                });
            });
        });*/
    }
    function trigImageCrop()
    {
        imageCrop();
        $('#imageCropModal').modal('show');
    }
    loadmyshare();

</script>
@endsection
@extends('master')

@section('content')
    <style>
        .affix {
            top: 70px;
            position: fixed !important;
        }
    </style>
    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <div id="leftbar">
                <div id="leftmain" class="box box-primary">
                    <div class="box-body box-profile">
                        <a href="/kupon-olustur" class="btn btn-success btn-block"><b>Kupon Oluştur</b></a>
                        <a href="/market" class="btn btn-danger btn-block"><b>Market</b></a>
                        <h3 class="profile-username text-center"></h3>
                        <p class="text-muted text-center"></p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Aktif Kupon Sayısı</b> <a class="pull-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Tutan Kuponlar</b> <a class="pull-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Canlı Kupon Durumu</b> <a class="pull-right">102</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box box-warning" data-spy="affix" data-offset-top="370">
                    <div class="box-body box-profile">
                        <div class="box-header ui-sortable-handle" style="cursor: move;">
                            <i class="fa fa-globe"></i>
                            <h3 class="box-title">Canlı Maç Durumları</h3>
                        </div>

                        <h3 class="profile-username text-center"></h3>
                        <p class="text-muted text-center"></p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>268 | Barcelona-Real Madrid</b> (82:12)
                                <p>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 82%"></div>
                                </div>
                                Mac Durumu: Devam ediyor<a class="pull-right">2 - 1</a>
                            </li>
                            <li class="list-group-item">
                                <b>302 | Galatasaray-Konyaspor</b> (32:02)
                                <p>
                                <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar progress-bar-warning" style="width: 32%"></div>
                                </div>
                                Mac Durumu: Devam ediyor<a class="pull-right">2 - 1</a>
                            </li>                <li class="list-group-item">
                                <b>268 | Sivasspor-Antalyaspor</b> (90:00)
                                <p>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar progress-bar-danger" style="width: 100%"></div>
                                </div>
                                Mac Durumu: Bitti<a class="pull-right">1 - 3</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="input-group">
                        <textarea class="form-control" placeholder="Bildirim Paylaş" id="inputContent"></textarea>
                        <div class="input-group-addon">
                            <button type="submit" name="search" id="send-btn-share" class="btn btn-flat" onclick="sendShare();"><i class="fa fa-send"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">

                </div>
            </div>
            <div id="share">

            </div>
        <?php /*for ($i=0; $i < 20; $i++) { ?>
        <!-- Box Comment -->
            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <img class="img-circle" src="http://placehold.it/128x128" alt="User Image">
                        <span class="username"><a href="#">Özgür Sel</a></span>
                        <span class="description">Herkeze Açık - 7:30 PM Bugün</span>
                    </div>
                    <!-- /.user-block -->
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                            <i class="fa fa-circle-o"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p>Bu Kupon Tutar Beyler Oynayın.</p>

                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Kupon Başlığı</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body table-responsive" style="display: block;">


                            <!-- Kupon -->
                            <table style="font-size:12px; text-align:center;" class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">Kod</th>
                                    <th style="width: 200px">Karşılaşma</th>
                                    <th>Saat</th>
                                    <th style="width: 5px">MBS</th>
                                    <th>Maç Oranları</th>
                                    <th>Alt</th>
                                    <th>Üst</th>
                                    <th>Maç Sonucu</th>
                                    <th>Risk Oranı</th>
                                    <th style="width: 40px">Risk</th>
                                </tr>
                                <tr>
                                    <td>203</td>
                                    <td>Galatasaray - Konyaspor</td>
                                    <td>21:15</td>
                                    <td><span class="badge bg-blue">4</span></td>
                                    <td>2.30 | 1.80 | 1.15</td>
                                    <td>2.50</td>
                                    <td>3.30</td>
                                    <td>2</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-red">55%</span></td>
                                </tr>
                                <tr>
                                    <td>352</td>
                                    <td>Fenerbahçe - Beşiktaş</td>
                                    <td>21:00</td>
                                    <td><span class="badge bg-blue">4</span></td>
                                    <td>2.30 | 1.80 | 1.15</td>
                                    <td>2.50</td>
                                    <td>3.30</td>
                                    <td>1</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-yellow">70%</span></td>
                                </tr>
                                <tr>
                                    <td>302</td>
                                    <td>Bursaspor - Trabzonspor</td>
                                    <td>22:15</td>
                                    <td><span class="badge bg-blue">4</span></td>
                                    <td>2.30 | 1.80 | 1.15</td>
                                    <td>2.50</td>
                                    <td>3.30</td>
                                    <td>2</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-light-blue">30%</span></td>
                                </tr>
                                <tr>
                                    <td>272</td>
                                    <td>Sivasspor - Antalyaspor</td>
                                    <td>21:30</td>
                                    <td><span class="badge bg-green">3</span></td>
                                    <td>2.30 | 1.80 | 1.15</td>
                                    <td>2.50</td>
                                    <td>3.30</td>
                                    <td>1</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-green">90%</span></td>
                                </tr>
                                </tbody></table>
                            <!-- Kupon -->


                        </div>
                    </div>

                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Paylaş</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Beğen</button>
                    <span class="pull-right text-muted">127 Beğeni - 3 yorum</span>
                </div>
                <!-- /.box-body -->
                <div class="box-footer box-comments">
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="http://placehold.it/128x128" alt="User Image">

                        <div class="comment-text">
                      <span class="username">
                        Emrullah Hancer
                        <span class="text-muted pull-right">8:03 PM Bugün</span>
                      </span><!-- /.username -->
                            Bencede tutar hemen oynuyorum.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="http://placehold.it/128x128" alt="User Image">

                        <div class="comment-text">
                      <span class="username">
                        Rıza Rızaoğlu
                        <span class="text-muted pull-right">8:03 PM Bugün</span>
                      </span><!-- /.username -->
                            Ben bu kuponun tutacağından pek emin değilim galatasaray maçı yatar abi. risk sevenler buyursun..
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    <form action="#" method="post">
                        <img class="img-responsive img-circle img-sm" src="http://placehold.it/128x128" alt="Alt Text">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class="img-push">
                            <input type="text" class="form-control input-sm" placeholder="Yorum yaz...">
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
            <?php  } */?>
        </div>
        <div class="col-sm-2">
            <div id="leftmain" >
                <img class="img-responsive" src="http://placehold.it/200x500">
            </div>
        </div>
    </div>
    <script>
        function loadshare(){
            $('#share').load('/loadShare',function () {
                /*$(this).unwrap();*/
            });
        }
        loadshare(); // This will run on page load
        /*loadmessage();*/
        setInterval(function(){
            loadshare(); // this will run after every 30 seconds
            /*loadmessage();*/
        }, 30000);
    </script>
@endsection

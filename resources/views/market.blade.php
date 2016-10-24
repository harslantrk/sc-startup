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
            <div id="filter" class="box box-danger">
                <div class="box-body box-profile">
                    <div class="box-header">
                        <i class="ion-ios-toggle"></i>
                        <h3 class="box-title">Filtreleme</h3>
                    </div>
                    <h3 class="profile-username text-center"></h3>
                    <p class="text-muted text-center"></p>
                    <form action="#" method="get">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Kupon Ara..">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
      </span>
                        </div>
                    </form>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Ücretsiz Kuponlar</b> <a class="pull-right"><span class="badge badge-warning">18</span></a>
                        </li>
                        <li class="list-group-item">
                            <b>Ücretli Kuponlar</b> <a class="pull-right"><span class="badge badge-warning">59</span></a>
                        </li>
                        <li class="list-group-item">
                            <b>Sistem</b>
                            <a class="pull-right"><input type="checkbox" class="flat-red"></a>
                        </li>
                        <li class="list-group-item">
                            <b>Alt-Üst</b>
                            <a class="pull-right"><input type="checkbox" class="flat-red"></a>
                        </li>
                        <li class="list-group-item">
                            <b>İY / MS</b>
                            <a class="pull-right"><input type="checkbox" class="flat-red"></a>
                        </li>
                        <li class="list-group-item">
                            <b>Fiyat Aralığı</b>
                            <input type="text" value="" class="slider form-control" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[0,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green">
                        </li>
                        <li class="list-group-item">
                            <b>Kupon Güvenilirliği</b>
                            <input type="text" value="" class="slider form-control" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[0,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
                        </li>
                        <li class="list-group-item">
                            <b>Kupon Riski</b>
                            <input type="text" value="" class="slider form-control" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[0,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
                        </li>
                    </ul>
                    <button class="btn btn-danger btn-flat btn-block" >Filtrele</button>
                </div>
            </div>
            <div class="box box-warning" data-spy="affix" data-offset-top="595">
                <div class="box-body box-profile">
                    <div class="box-header">
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
    <div class="col-sm-9">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>5</h3>

                        <p>Sepet</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Sepeti Gör <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53</h3>

                        <p>Çok Satan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Kuponları Gör <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Takip Ettiklerin</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Detayları Gör <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Çok Kazandıran</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Detayları Gör <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
        </div>


        <div class="box box-widget">
            <div class="box-header with-border">
                <div class="user-block">
                    <img class="img-circle" src="http://placehold.it/128x128" alt="User Image">
                    <span class="username"><a href="#">Yakup Çelik</a></span>
                    <span class="description">Kilitli - 12:30 PM Bugün</span>
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
                <p>%100 Kazanma Garantisi</p>
                <div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Bu Kupon Kaçmaz!!!
                        </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body table-responsive" style="display: block;">


                        <!-- Kupon -->
                        <table style="text-align:center;" class="table table-bordered table-striped">
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
                                <th>Risk</th>
                            </tr>
                            <tr>
                                <td>203</td>
                                <td>Galatasaray - Konyaspor</td>
                                <td>21:15</td>
                                <td><span class="badge bg-blue">4</span></td>
                                <td>2.30 | 1.80 | 1.15</td>
                                <td>2.50</td>
                                <td>3.30</td>
                                <td colspan="3" rowspan="4"><i style="margin-top:20px; font-size:90px" class="fa fa-lock"></i></td>
                            </tr>
                            <tr>
                                <td>352</td>
                                <td>Fenerbahçe - Beşiktaş</td>
                                <td>21:00</td>
                                <td><span class="badge bg-blue">4</span></td>
                                <td>2.30 | 1.80 | 1.15</td>
                                <td>2.50</td>
                                <td>3.30</td>
                            </tr>
                            <tr>
                                <td>302</td>
                                <td>Bursaspor - Trabzonspor</td>
                                <td>22:15</td>
                                <td><span class="badge bg-blue">4</span></td>
                                <td>2.30 | 1.80 | 1.15</td>
                                <td>2.50</td>
                                <td>3.30</td>
                            </tr>
                            <tr>
                                <td>272</td>
                                <td>Sivasspor - Antalyaspor</td>
                                <td>21:30</td>
                                <td><span class="badge bg-green">3</span></td>
                                <td>2.30 | 1.80 | 1.15</td>
                                <td>2.50</td>
                                <td>3.30</td>
                            </tr>
                            </tbody></table>
                        <!-- Kupon -->


                    </div>
                    <div class="box-footer">
                        <i class ="ion-information-circled"></i> Bu kupon 62 Kez Satın Alındı
                        <a href="#" class="btn btn-flat btn-success  pull-right">Satın Al : 15 TL</a>
                        <a href="#" class="btn btn-flat btn-info  pull-right"><i class="fa fa-shopping-cart"></i> Sepete Ekle</a>
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
                    Özgür Sel
                    <span class="text-muted pull-right">8:03 PM Bugün</span>
                  </span><!-- /.username -->
                        Güzel Kupon yapmış. satın alabilirsiniz.
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


    <?php for ($i=0; $i < 20; $i++) { ?>
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
                        <table style="text-align:center;" class="table table-bordered table-striped">
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
        <?php  } ?>
    </div>
</div>
@endsection
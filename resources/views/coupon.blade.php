@extends('master')

@section('content')
<style>
    .affix {
        top: 70px;
        position: fixed !important;
    }
</style>



<div class="row">
    <div class="col-sm-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="ion-trophy"></i> Favori Ligler</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <?php for ($i=0; $i < 8; $i++) : ?>
                    <div class="panel box">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                                    Lig Adı
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="box-body">
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-sm-6">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#futbol" data-toggle="tab"><i class="ion-ios-football" ></i> Futbol</a></li>
                <li><a href="#basketbol" data-toggle="tab"><i class="ion-ios-basketball"></i> Basketbol</a></li>
                <li><a href="#motor" data-toggle="tab"><i class="ion-android-bicycle"></i> Motor Sporları</a></li>
                <li><a href="#tenis" data-toggle="tab"><i class="ion-ios-tennisball"></i> Tenis</a></li>
                <li><a href="#uzunvadeli" data-toggle="tab"><i class="ion-ios-clock"></i> Uzun Vadeli</a></li>
                <li><a href="#diğer" data-toggle="tab">Diğer</a></li>
            </ul>
            <div class="tab-content">
                <!-- /.tab-content -->
                <div class="active tab-pane" id="futbol">
                    <div class="box box-success">
                        <div class="box-body table-responsive no-padding" style="display: block;">


                            <!-- Kupon -->
                            <table style="font-size:12px; text-align:center;" class="table table-bordered table-striped table-hover">
                                <thead class="bg-green">
                                <th style="width: 10px">Kod</th>
                                <th style="width: 160px">Karşılaşma</th>
                                <th>Saat</th>
                                <th style="width: 5px">MBS</th>
                                <th colspan="3">Maç Oranları</th>
                                <th colspan="2">Alt/Üst</th>
                                <th>Detay</th>
                                <?php /*
              <th colspan="5">Handikap</th>
              <th colspan="3">Çifte Şans</th>
              <th colspan="2">Krş. Gol</th>
              */ ?>
                                </thead>
                                <?php for ($i=0; $i < 10 ; $i++) : ?>
                                <tbody>
                                <tr class="bg-yellow">
                                    <th colspan="3">Süper Toto Süperlig<span class="pull-right">12/10/2016</span></th>
                                    <th>MBS</th>
                                    <th>1</th>
                                    <th>X</th>
                                    <th>2</th>
                                    <th>Alt</th>
                                    <th>Üst</th>
                                    <td>+22</td>
                                    <!--
                                    <th>H1</th>
                                    <th>1</th>
                                    <th>X</th>
                                    <th>2</th>
                                    <th>H2</th>
                                    <th>1-X</th>
                                    <th>1-2</th>
                                    <th>2-X</th>
                                    <th>Var</th>
                                    <th>Yok</th>
                                    -->
                                </tr>
                                <tr>
                                    <td>203</td>
                                    <td>Galatasaray - Konyaspor</td>
                                    <td>21:15</td>
                                    <td><span class="badge bg-blue">4</span></td>
                                    <td>2.30</td>
                                    <td>1.80</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>3.30</td>
                                    <td>+22</td>
                                    <!--
                                    <td>-</td>
                                    <td>1.80</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>1</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>1.60</td>
                                    <td>2.50</td>
                                    <td>1.60</td>
                                    -->
                                </tr>
                                <tr>
                                    <td>352</td>
                                    <td>Fenerbahçe - Beşiktaş</td>
                                    <td>21:00</td>
                                    <td><span class="badge bg-blue">4</span></td>
                                    <td>2.30</td>
                                    <td>1.80</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>3.30</td>
                                    <td>+22</td>
                                    <!--
                                    <td>-</td>
                                    <td>1.80</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>-</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>1.60</td>
                                    <td>2.50</td>
                                    <td>1.60</td>
                                    -->
                                </tr>
                                <tr>
                                    <td>302</td>
                                    <td>Bursaspor - Trabzonspor</td>
                                    <td>22:15</td>
                                    <td><span class="badge bg-blue">4</span></td>
                                    <td>2.30</td>
                                    <td>1.80</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>3.30</td>
                                    <td>+22</td>
                                    <!--
                                    <td>-</td>
                                    <td>1.80</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>1</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>1.70</td>
                                    <td>2.50</td>
                                    <td>1.60</td>
                                    -->
                                </tr>
                                <tr>
                                    <td>272</td>
                                    <td>Sivasspor - Antalyaspor</td>
                                    <td>21:30</td>
                                    <td><span class="badge bg-green">3</span></td>
                                    <td>2.30</td>
                                    <td>1.80</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>3.30</td>
                                    <td>+22</td>
                                    <!--
                                    <td>-</td>
                                    <td>1.80</td>
                                    <td>1.15</td>
                                    <td>2.50</td>
                                    <td>1</td>
                                    <td>1.80</td>
                                    <td>2.00</td>
                                    <td>1.20</td>
                                    <td>2.50</td>
                                    <td>1.60</td>
                                    -->
                                </tr>
                                </tbody>
                                <?php endfor; ?>

                            </table>
                            <!-- Kupon -->


                        </div>
                        <div class="box-footer">
                            <i class ="ion-calendar"></i> <?php echo date('d/m/Y'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="basketbol">

                </div>
                <div class="tab-pane" id="uzunvadeli">

                </div>
                <div class="tab-pane" id="motor">

                </div>
                <div class="tab-pane" id="tenis">

                </div>
                <div class="tab-pane" id="diğer">

                </div>
            </div>
            <!-- /.tab-content -->
        </div>

    </div>
    <div class="col-sm-3 hidden-xs">
        <div id="righttbar">
            <div id="leftmain" class="box box-primary">
                <div class="box-body box-profile">
                    <div class="box-header">
                        <i class="fa fa-bookmark"></i>
                        <h3 class="box-title">Kuponum</h3>
                    </div>
                    <h3 class="profile-username text-center"></h3>
                    <p class="text-muted text-center"></p>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Krediniz</b> <a class="pull-right">350 TL</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kuponlarınız</b> <a class="pull-right">5</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kuponlarınız</b> <a class="pull-right">5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
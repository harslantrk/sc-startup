@foreach($share as $value)
<?php $say=0; ?>
@if($value->status=="1")
    <?php
    $spshare= \Illuminate\Support\Facades\DB::table('share')
            ->join('users', 'share.user_id', '=', 'users.id')
            ->orderBy('share.created_at', 'desc')
            ->select('share.*','users.username')
            ->where('share.id', $value->share_id)
            ->first();
    ?>
    <div class="box box-widget">
        <div class="box-header with-border">
            <div class="user-block">
                <img class="img-circle" src="http://placehold.it/128x128" alt="User Image">
                <span class="username"><a href="/profil/{{ $value->username }}">{{ $value->username }}</a></span>
                <span class="description">Herkeze Açık - 7:30 PM Bugün</span>
            </div>
            <!-- /.user-block -->
            <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <p>{{ $value->content }}</p>

            <!-- start inside share -->
            <div class="box box-widget" style="background-color:#ecf0f5;padding:10px;">
                <div class="box-header with-border">
                    <div class="user-block">
                        <img class="img-circle" src="http://placehold.it/128x128" alt="User Image">
                        <span class="username"><a href="/profil/{{ $spshare->username }}">{{ $spshare->username }}</a></span>
                        <span class="description">Herkeze Açık - 7:30 PM Bugün</span>
                    </div>
                    <!-- /.user-block -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p>{{ $spshare->content }}</p>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
            <!-- inside share -->
            <button type="button" class="btn btn-default btn-xs" onclick="trigShareModal({{ $value->id }});"><i class="fa fa-share"></i> Paylaş</button>
            @foreach($shareLike as $deger)
                @if($deger->share_id==$value->id)
                    <?php $say++;?>
                @endif
            @endforeach
            @if($say>0)
                <button type="button" class="btn btn-default btn-xs afterclick"><i class="fa fa-thumbs-o-up"></i> Beğendin</button>
            @else
                <button type="button" class="btn btn-default btn-xs" onclick="shareLike({{ $value->id }});"><i class="fa fa-thumbs-o-up"></i> Beğen</button>
            @endif
            <span class="pull-right text-muted">{{ $value->like_count }} Beğeni - {{ $value->comment_count }} yorum</span>
        </div>
        <!-- /.box-body -->
        <div class="box-footer box-comments">
            @foreach($shareComment as $deg)
                @if($deg->share_id==$value->id)
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="http://placehold.it/128x128" alt="User Image">

                        <div class="comment-text">
                      <span class="username">
        <a href="/profil/{{ $deg->username }}">{{ $deg->username }}</a>
        <span class="text-muted pull-right">8:03 PM Bugün</span>
                      </span><!-- /.username -->
                            {{ $deg->message }}
                        </div>
                        <!-- /.comment-text -->
                    </div>
            @endif
        @endforeach
        <!-- /.box-comment -->
        </div>
        <!-- /.box-footer -->
        <div class="box-footer">
            <img class="img-responsive img-circle img-sm" src="http://placehold.it/128x128" alt="Alt Text">
            <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control input-sm" placeholder="Yorum yaz..." id="msg{{ $value->id }}">
                <span class="input-group-btn">
                  <button class="btn btn-info btn-flat" type="button" style="background-color:#3c8dbc;" onclick="shareComment({{ $value->id }});">Gönder!</button>
                </span>
                </div>
            </div>
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->
@else
    <div class="box box-widget">
        <div class="box-header with-border">
            <div class="user-block">
                <img class="img-circle" src="http://placehold.it/128x128" alt="User Image">
                <span class="username"><a href="/profil/{{ $value->username }}">{{ $value->username }}</a></span>
                <span class="description">Herkeze Açık -
                    <?php
                    $date1 = new DateTime($value->created_at);
                    $date1Cikti = $date1->format('H:i');
                    $date2 = \Carbon\Carbon::now();
                    $diff=date_diff($date2,$date1);
                    if($diff->d<1)
                    {
                        $result=" Bugün";
                    }
                    elseif($diff->d<2){
                        $result=" Dün";
                    }
                    else{
                        $result=$diff->d." Gün Önce";
                    }
                    ?>{{ $date1Cikti }} {{ $result }}
                </span>
            </div>
            <!-- /.user-block -->
            <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <p>{{ $value->content }}</p>
            <button type="button" class="btn btn-default btn-xs" onclick="trigShareModal({{ $value->id }});"><i class="fa fa-share"></i> Paylaş</button>
            @foreach($shareLike as $deger)
                @if($deger->share_id==$value->id)
                    <?php $say++;?>
                @endif
            @endforeach
            @if($say>0)
                <button type="button" class="btn btn-default btn-xs afterclick"><i class="fa fa-thumbs-o-up"></i> Beğendin</button>
            @else
                <button type="button" class="btn btn-default btn-xs" onclick="shareLike({{ $value->id }});"><i class="fa fa-thumbs-o-up"></i> Beğen</button>
            @endif
            <span class="pull-right text-muted">{{ $value->like_count }} Beğeni - {{ $value->comment_count }} yorum</span>
        </div>
        <!-- /.box-body -->
        <div class="box-footer box-comments">
            @foreach($shareComment as $deg)
                @if($deg->share_id==$value->id)
                    <div class="box-comment" style="border-bottom:1px solid #eee;">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="http://placehold.it/128x128" alt="User Image">

                        <div class="comment-text">
                      <span class="username">
                        <a href="/profil/{{ $deg->username }}">{{ $deg->username }}</a>
                        <span class="text-muted pull-right">
                            <?php
                                $date1 = new DateTime($deg->created_at);
                                $date1Cikti = $date1->format('H:i');
                                $date2 = \Carbon\Carbon::now();
                                $diff=date_diff($date2,$date1);
                                if($diff->d<1)
                                {
                                    $result=" Bugün";
                                }
                                elseif($diff->d<2){
                                    $result=" Dün";
                                }
                                else{
                                    $result=$diff->d." Gün Önce";
                                }
                            ?>{{ $date1Cikti }} {{ $result }}
                        </span>
                      </span><!-- /.username -->
                            {{ $deg->message }}
                        </div>
                        <!-- /.comment-text -->
                    </div>
                @endif
            @endforeach
        <!-- /.box-comment -->
        </div>
        <!-- /.box-footer -->
        <div class="box-footer">
            <img class="img-responsive img-circle img-sm" src="http://placehold.it/128x128" alt="Alt Text">
            <!-- .img-push is used to add margin to elements next to floating images -->
            <div class="img-push">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control input-sm" placeholder="Yorum yaz..." id="msg{{ $value->id }}">
                <span class="input-group-btn">
                  <button class="btn btn-info btn-flat" type="button" style="background-color:#3c8dbc;" id="msgbttn{{ $value->id }}" onclick="shareComment({{ $value->id }});">Gönder!</button>
                </span>
                </div>
            </div>
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->
@endif

@endforeach
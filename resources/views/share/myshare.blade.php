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
    <!-- Post -->
    <div class="post">
        <div class="user-block">
            <img class="img-circle img-bordered-sm" src="http://placehold.it/35x35" alt="user image">
                            <span class="username">
                              <a href="#">{{ $value->username }}</a>
                              <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                            </span>
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
        <p>
            {{ $value->content }}
        </p>
        <ul class="list-inline">
            <li><a href="#" class="link-black text-sm" onclick="trigShareModal({{ $value->id }});"><i class="fa fa-share margin-r-5"></i> Paylaş</a></li>
            @foreach($shareLike as $deger)
                @if($deger->share_id==$value->id)
                    <?php $say++;?>
                @endif
            @endforeach
            @if($say>0)
                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Beğendiniz</a>
                </li>
            @else
                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Beğen</a>
                </li>
            @endif
            <li class="pull-right">
                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Yorumlar
                    (5)</a>
            </li>
        </ul>

        <input class="form-control input-sm" type="text" placeholder="Yorum Yaz..">
    </div>
    <!-- /.post -->
@else
    <!-- Post -->
    <div class="post">
        <div class="user-block">
            <img class="img-circle img-bordered-sm" src="http://placehold.it/35x35" alt="user image">
                            <span class="username">
                              <a href="/profil/{{ $value->username }}">{{ $value->username }}</a>
                              <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                            </span>
            <span class="description">Herkeze Açık - <?php
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
                ?>{{ $date1Cikti }} {{ $result }}</span>
        </div>
        <!-- /.user-block -->
        <p>
           {{ $value->content }}
        </p>
        <ul class="list-inline">
            <li><a href="#" class="link-black text-sm" onclick="trigShareModal({{ $value->id }});"><i class="fa fa-share margin-r-5"></i> Paylaş</a></li>
            @foreach($shareLike as $deger)
                @if($deger->share_id==$value->id)
                    <?php $say++;?>
                @endif
            @endforeach
            @if($say>0)
            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Beğendiniz</a>
            </li>
            @else
            <li><span href="#" class="link-black text-sm" onclick="shareLike({{ $value->id }});" style="cursor:pointer;"><i class="fa fa-thumbs-o-up margin-r-5"></i> Beğen</span>
            </li>
            @endif
            <li class="pull-right">
                <a href="#" class="link-black text-sm" style="margin-right:20px;"><i class="fa fa-thumbs-o-up margin-r-5"></i> Beğeniler
                    {{ $value->like_count }}</a>
                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Yorumlar
                    {{ $value->comment_count }}</a>
            </li>
        </ul>

        <input class="form-control input-sm" type="text" placeholder="Yorum Yaz..">
    </div>
    <!-- /.post -->
@endif
@endforeach
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
                <h3 class="box-title"><i class="fa fa-users"></i> Konuşmalar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    @if($status==1)
                    <div class="panel box" style="border-left:20px solid #3c8dbc;">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a href="/mesajlar/{{ $receiverUsername }}">
                                    {{ $receiverUsername }}
                                </a>
                            </h4>
                        </div>
                    </div>
                    @foreach($contactList as $value)
                        @if($value->sender_username != $receiverUsername)
                            <div class="panel box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a href="/mesajlar/{{ $value->sender_username }}">
                                            {{$value->sender_username}}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @else
                        @foreach($contactList as $value)
                            <div class="panel box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a href="/mesajlar/{{ $value->sender_username }}">
                                            {{$value->sender_username}}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-sm-6">
        <!-- Chat box -->
        <div class="box box-success">
            <div class="box-header">
                <i class="fa fa-comments-o"></i>
                <h3 class="box-title">Chat</h3>
                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                    <div class="btn-group" data-toggle="btn-toggle" >
                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                    </div>
                </div>
            </div>
            <div class="box-body chat showMessage" id="chat-box" style="background-color:#eee;">
                <!-- chat item -->
                <div class="row showMessageLast" id="none-effect">
                    @if($status=="1")
                        <input type="hidden" id="lastId" value="{{ $lastMessage[0]->id }}">
                        @foreach($oldMessage as $oldmsg)
                            <?php
                            $user=Auth::user();
                            session(['lastMessageId', $oldmsg->id]);
                            ?>
                            @if($oldmsg->sender == $user->id)
                                <div class="item" style="border: 1px solid #00a65a;background-color: #00a65a;border-radius: 5px;padding: 5px; width:60%; float:right;">
                                    <img src="http://placehold.it/160x160" alt="user image" class="online" style="border: 2px solid #FFF;">
                                    <p class="message" style="color:#FFF;">
                                        <a href="#" class="name" style="color:#FFF !important;">
                                            <small class="text-muted pull-right" style="color:#FFF;"><i class="fa fa-clock-o"></i> <?php
                                                $date1 = new DateTime($oldmsg->created_at);
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
                                                ?>{{ $date1Cikti }} {{ $result }}</small>
                                            {{$oldmsg->sender_username}}
                                        </a>
                                        {{ $oldmsg->content }}<br>
                                    </p>
                                </div><!-- /.item -->
                            @else
                                <div class="item" style="border: 1px solid #fff;background-color: #fff;border-radius: 5px; padding:5px;width:60%; float:left;">
                                    <img src="http://placehold.it/160x160" alt="user image" class="online">
                                    <p class="message">
                                        <a href="#" class="name">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php
                                                $date1 = new DateTime($oldmsg->created_at);
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
                                                ?>{{ $date1Cikti }} {{ $result }}</small>
                                            {{$oldmsg->sender_username}}
                                        </a>
                                        {{ $oldmsg->content }}<br>
                                    </p>
                                </div><!-- /.item -->
                            @endif
                        @endforeach
                    @elseif($status=="2")
                        <div class="item" style="border: 1px solid #00a65a;background-color: #00a65a;border-radius: 5px;padding: 5px; width:60%; float:right;">
                            <img src="http://placehold.it/160x160" alt="user image" class="online" style="border: 2px solid #FFF;">
                            <p class="message" style="color:#FFF;">
                                <a href="#" class="name" style="color:#FFF !important;">
                                    <small class="text-muted pull-right" style="color:#FFF;"><i class="fa fa-clock-o"></i> <?php
                                        $date1 = new DateTime();
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
                                        ?>{{ $date1Cikti }} {{ $result }}</small>
                                    Mike Doe
                                </a>
                                Daha önce mesajlaşmadınız.
                            </p>
                        </div><!-- /.item -->
                    @else
                        ALO3
                    @endif
                </div>

            </div><!-- /.chat -->
            <div class="box-footer">
                <div class="input-group">
                    @if($status==1)
                    <input class="form-control" placeholder="Mesaj Giriniz..." id="pvMessage">
                    <div class="input-group-btn">
                        <button class="btn btn-success" onclick="sendMessage({{ $receiver }});" id="pvMessageBttn"><i class="fa fa-plus"></i></button>
                    </div>
                    @elseif($status==0)
                        Mesaj göndermek için sol taraftan birini seçiniz.
                    @endif
                </div>
            </div>

        </div><!-- /.box (chat box) -->
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
<?php /*$deger=session('lastMessageId'); echo "<h1>BURADA OLMASI LAZIM =".$deger."</h1>"; die(); */?>
@if($status==1)
<script>
    $('#chat-box').slimScroll({
        height: '400px',
        railOpacity: 0.9,
        start: 'bottom'
    });
    $('#chat-box').slimScroll({ scrollBy: $('#none-effect').height() });
    setTimeout(loadmessage, 10000);
    function loadmessage(){
        var lastid = document.getElementById('lastId').value;
        $.get('/loadMessage/{{ $receiver }}/'+lastid, function(data){
            content= data;
            $('.showMessageLast').append(content);
        });
        /*
        $(".showMessage").append(load("/loadMessage/{{ $receiver }}"));*/
        setTimeout(loadmessage, 10000);
        /*$('#chat-box').slimScroll({ scrollBy: $('#none-effect').height() });*/
    }
    $('#pvMessage').keypress(function (e) {
        var key = e.which;
        if(key == 13)  // the enter key code
        {
            $('#pvMessageBttn').click();
            return false;
        }
    });

</script>
@endif
@endsection
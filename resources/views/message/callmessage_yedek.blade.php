<div class="row" id="none-effect">
    @if($status=="1")
        @foreach($oldMessage as $oldmsg)
            <?php $user=Auth::user(); ?>
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

<!-- Menu toggle button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-envelope-o"></i>
    <span class="label label-success">{{ $msgCount }}</span>
</a>
<ul class="dropdown-menu">
    <li class="header">
        @if($msgCount >0)
            Okunmamış {{ $msgCount }} mesajınız var!
        @else
            Okunmamış mesajınız bulunmamaktadır.
        @endif
    </li>
    <li>
        <!-- inner menu: contains the messages -->
        <ul class="menu">
            @foreach($message as $msg)
                <li><!-- start message -->
                    <a href="/mesajlar/{{ $msg->sender_username }}">
                        <div class="pull-left">
                            <!-- User Image -->
                            <img src="http://placehold.it/160x160" class="img-circle" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                            {{ $msg->sender_username }}
                            <small><i class="fa fa-clock-o"></i>
                                <?php
                                $date1 = new DateTime($msg->created_at);
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
                            </small>
                        </h4>
                        <!-- The message -->
                        <p>{{ $msg->content }}</p>
                    </a>
                </li>
                <!-- end message -->
            @endforeach
        </ul>
        <!-- /.menu -->
    </li>
    <li class="footer"><a href="/mesajlar">Bütün Mesajları Gör</a></li>
</ul>
<!-- Menu toggle button -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-bell-o"></i>
    <span class="label label-warning">{{ $notiCount }}</span>
</a>
<ul class="dropdown-menu">
    <li class="header">Yeni {{ $notiCount }} Bildirimler</li>
    <li>
        <!-- Inner Menu: contains the notifications -->
        <ul class="menu">
            <!-- start notification -->
            @foreach($notification as $value)
                <?php

                if($value->type==1)
                    {
                        $icon="fa-comment";
                    }
                elseif($value->type==2)
                    {
                        $icon="fa-share-alt-square";
                    }
                elseif($value->type==3)
                    {
                        $icon="fa-user-plus";
                    }
                elseif($value->type==4)
                    {
                        $icon="fa-comment";
                    }
                elseif($value->type==5)
                    {
                        $icon="fa-share-alt-square";
                    }
                ?>
                <li>
                    <a href="{{ $value->url }}">
                        <i class="fa {{ $icon }} text-aqua"></i> {{ $value->content }}
                    </a>
                </li>
            @endforeach
            @if($notiCount==0)
                <li>
                    <a href="#">
                        <i class="fa fa-info-circle text-aqua"></i> Yeni Bildiriminiz Yok
                    </a>
                </li>
            @endif
            <!-- end notification -->
        </ul>
    </li>
    <li class="footer"><a href="/profil/{{ $user->username }}">Hepsini Gör</a></li>
</ul>

@foreach($share as $value)
<div class="box box-primary">
    <div class="box-body">
        <textarea class="form-control" placeholder="Bunun Hakkında Bişeyler Yaz..." id="inputShareShareContent"></textarea>
    </div>
</div>
    <div class="box box-widget" style="background-color:#ecf0f5;padding:10px;">
        <div class="box-header with-border">
            <div class="user-block">
                <img class="img-circle" src="http://placehold.it/128x128" alt="User Image">
                <span class="username"><a href="/profil/{{ $value->username }}">{{ $value->username }}</a></span>
                <span class="description">Herkeze Açık - 7:30 PM Bugün</span>
            </div>
            <!-- /.user-block -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <p>{{ $value->content }}</p>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endforeach
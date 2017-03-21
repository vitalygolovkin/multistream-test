@extends('layouts.app')

@section('content')
<div class="container">

    <script type="text/javascript" src="http://jwpsrv.com/library/4+R8PsscEeO69iIACooLPQ.js"></script>



    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                    <div class="panel-body">
                        <div id="player_1"></div>

                        <div class="row">
                            @foreach ($streams as $stream)
                                <div class="col-md-4 video" style="cursor:pointer; margin-top:20px;" onclick="changeChannel('<?=$stream?>')" style="" file="<?=$stream?>">Some channel</div>
                            @endforeach
                        </div>

                    </div>
            </div>

                

        </div>
    </div>

    
</div>

<script type="text/javascript">

    jwplayer('player_1').setup({
        file: "<?php echo $rtmp; ?>",
        width: "100%"
    });

    var changeChannel = function(param){
        jwplayer('player_1').setup({
            file: param,
            width: "100%"
        });
    }
</script>
@endsection

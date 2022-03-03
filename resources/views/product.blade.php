<div>
    <div class="main">
        <div class="hero_banner">
            <div class="label"><span>current series</span></div>
        </div>
        <div class="thumb_container">
            @foreach ($array_data as $i => $data)
                <div class="box_thumb">
                        <div class="img_thumb">
                            <img src="{{$data['thumb']}}" alt="">
                        </div>
                    <p>{{$data['title']}}</p>
                </div>                   
            @endforeach
        </div>  
    </div>
</div>


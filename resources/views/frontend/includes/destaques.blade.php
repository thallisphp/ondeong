<h3>Best of the day places to stay</h3>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            @foreach(range(1, 6) as $i)
                <div class="col-sm-6 col-md-4 places">
                    <div class="thumbnail">
                        <img src="{!! asset('frontend/img/demo01.png') !!}" alt="..."/>

                        <div class="caption">
                            <a href="3.html">Thumbnail label</a>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem </p>

                            <p>
                                <img src="{!! asset('frontend/img/start.gif') !!}" alt="..."/>

                                <a href="3.html" class="btn btn-default btn-xs">
                                    <i class="icon-user"></i>
                                    87
                                </a>

                                <a href="#" class="btn btn-default btn-xs">
                                    <i class="icon-commentround"></i>
                                    12
                                </a>

                                <a href="#" class="btn btn-default btn-xs ping">
                                    <i class="icon-map-marker"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

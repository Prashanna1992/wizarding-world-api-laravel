<div>
    <div class="col-md-10 mx-auto">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4" style="margin: 0!important; padding:0!important;">
            @foreach ($categories as $category)
                <a href="" style="text-decoration: none; color:#000;border:none;">
                    <div class="col">
                        <div class="card" style="border:none;background-color:transparent;">
                            <div class="card-body" style="padding: 0; border:none;">
                                <div class="flip-card-container">
                                    <div class="flip-card">
                                        <div class="flip-card-front">
                                            <img class="card-front-image" src="{{$category['image']}}" alt="{{$category['alt_text']}}">
                                            <div class="card-front-text">
                                                Search {{$category["title"]}}
                                            </div>
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="image-overlay">
                                                <img class="card-front-image" src="{{$category['image']}}" alt="{{$category['alt_text']}}">
                                            </div>
                                            {{$category['description']}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

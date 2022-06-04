
<div class="container text-white px-5">
    <div class="text-center px-5">
        <div class="row row-cols-6 mb-5">
        @foreach ($products as $product)
            <div class="col card bg-dark border-0">
              <a href="#"><img src="{{$product['thumb']}}" alt="logo comics"></a> 
                <h6 class="p-2">
                    {{$product['title']}}
                </h6>
            </div>
        @endforeach
        </div>
            <div>
                <a href="#" class="intomiddlebtn text-light text-uppercase bg-primary p-2 px-5">load more</a>
            </div>
    </div>
</div>


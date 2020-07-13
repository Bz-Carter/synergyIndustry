<div>
    @if ($categories->count() == 0)
        <!-- Search -->
        <form class="flex-wr-c-c m-b-45">
            <input class="size-a-21 bg-none t1-s-5 cl-6 plh-6 bo-tbl-1 bcl-11 p-rl-20" type="text" placeholder="Search...">

            <button class="size-a-22 fs-18 cl-0 bg-11 hov-btn1 trans-02">
                <i class="fa fa-search"></i>
            </button>
        </form>
    @else
        <!-- Search -->
        <form class="flex-wr-c-c m-b-45" method="GET" action="/results">
            <input class="size-a-21 bg-none t1-s-5 cl-6 plh-6 bo-tbl-1 bcl-11 p-rl-20" type="text" name="query" placeholder="Search...">

            <button class="size-a-22 fs-18 cl-0 bg-11 hov-btn1 trans-02">
                <i class="fa fa-search"></i>
            </button>
        </form>
    @endif
    <!-- Categories -->
    <div class="p-b-32">
        <h4 class="t1-m-1 text-uppercase cl-3 kit-underline1 p-b-6">
            {{ __('actu.category') }}
        </h4>

        @if ($categories->count() == 0)
        0
        @else
            <ul class="p-t-22">
                @foreach ($categories as $category)

                <li class="bo-b-1 bcl-14 m-b-18">
                        <a href="{{route('category.single', ['id' => $category->id ])}}" class="flex-wr-sb-c t1-s-5 cl-5 hov-link2 trans-02 p-tb-3">
                            <span>
                                {{ $category->name }}
                            </span>

                            <span>
                                {{$category->posts->count()}}
                            </span>
                        </a>
                    </li>

                @endforeach
            </ul>
        @endif
    </div>

    <!--  -->
    <div class="bg-11 p-all-30 m-b-46">
        <p class="t1-m-1 cl-0 m-b-13">
            {{ __('actu.info1') }}
        </p>

        <p class="t1-s-2 cl-15 m-b-25">
            {{ __('actu.info2') }}
        </p>

        <a href="#" class="d-inline-flex flex-c-c size-a-1 bg-0 t1-s-2 cl-6 text-uppercase hov-btn1 trans-02 p-rl-10">
            {{ __('actu.a_name2') }}
        </a>
    </div>

    <!-- Tag -->
    <div class="p-b-32">
        <h4 class="t1-m-1 text-uppercase cl-3 kit-underline1 p-b-6">
            {{ __('actu.tag') }}
        </h4>

        @if ($tags->count() == 0)
        0
        @else
            <ul class="p-t-22">
                @foreach ($tags as $tag)

                <li class="bo-b-1 bcl-14 m-b-18">
                <a href="{{route('tag.single', ['id' => $tag->id ])}}" class="flex-wr-sb-c t1-s-5 cl-5 hov-link2 trans-02 p-tb-3">
                            <span>
                                {{ $tag->tag }}
                            </span>

                            <span>
                                {{$tag->posts->count()}}
                            </span>
                        </a>
                    </li>

                @endforeach
            </ul>
        @endif
    </div>
</div>

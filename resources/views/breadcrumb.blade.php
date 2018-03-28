<ul class="page-breadcrumb">
    <li>
        <i class="fa fa-home"></i>
        <a href="{{ route('home') }}">Home</a>
        @if (count(Request::segments()) > 0)
            <i class="fa fa-angle-right"></i>
        @endif
    </li>

    @for ($i = 0; $i <= count(Request::segments()); $i++)

        @if (Request::segment($i) != 'home')
            <li>
                <a href="{{ asset(Request::segment($i)) }}">{{ ucfirst(Request::segment($i)) }}</a>
                @if ($i < count(Request::segments()) & $i > 0)
                    {!!'<i class="fa fa-angle-right"></i>'!!}
                @endif
            </li>
        @endif
    @endfor
</ul>
@extends('layouts.app')

@section('content')

{{--@foreach($response   as $country)
    Name: {{ $country['name'] }}
    Top Level Domain: {{ $country['topLevelDomain'] }}
    Calling Code: {{ $country['callingCodes'] }}
    Region: {{ $country['region'] }}

@endforeach--}}
{{--@foreach($response as $key => $modify)


    {{ $modify }}



@endforeach--}}
<div class=col-md-12">
    <div align="center">
        <button class="btn btn-default filter-button" data-filter="all">All</button>

        @forelse($region as $key=>$value)
@if(!empty($value))
              <button class="btn btn-default filter-button" data-filter="{{ $value }}">{{ $value }}</button>

         @endif
            @endforeach
    </div>
@foreach($response as $key => $country)


            <div class="gallery_product myImg col-md-3 filter {{ $country['region'] }}" id="{{ $country['region'] }}">
                 <h3> {{ $country['name'] }} </h3>
         {{--      <td>Top Level Domain: {{ $country['topLevelDomain'] }}</td>
                <td>  Calling Code: {{ $country['callingCodes'] }}</td>--}}
                <p>

@if(count($country['topLevelDomain'])  > 1)

                        <h5>Top Level Domains </h5>
                    @else

                        <h5>Top Level Domain </h5>
                    @endif

                    @foreach($country['topLevelDomain'] as $key => $value)

                    <h2> {{ $value  }}</h2>

                    @endforeach
                </p>
                <p> Region: {{ $country['region'] }} | Subregion: {{ $country['subregion'] }}</p>

                <p> Capital City: {{ $country['capital'] }}</p>

                <p> <img src="{{ $country['flag'] }}" /></p>

            </div>


@endforeach
</div>
<script>
    document.getElementById("Americas").onclick = function() {

        document.getElementById("Americas").style.color = "red";

    }


</script>

@endsection

<style>
    .col-md-3{
        text-align:center;
        float:left;
        margin:1px;

background-color: rgba(8,18,167, 0.12);
        /*border: 2px solid grey;*/
    }
    .col-md-12{
        widdth:90%;
        margin:0 auto;
        overflow:hidden;
    }

    .gallery-title
    {
        font-size: 36px;
        color: #fff;
        text-align: center;
        font-weight: 200;
        margin-bottom: 70px;
    }
    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;

    }
    .filter-button
    {
        font-size: 12px;
        border: 1px solid white;
        border-radius: 15px;
        text-align: center;
        color: #35434e;
        margin-bottom: 30px;

    }
    .filter-button:hover
    {
        font-size: 12px;
        border: 1px solid #35434e;
        border-radius: 15px;
        text-align: center;
        color: #ffffff;
        background-color:#35434e;

    }
    .btn-default:active .filter-button:active
    {
        background-color: #42B32F;
        color: white;
    }

    .port-image
    {
        width: 100%;
        height: auto;
    }

    .gallery_product
    {
        margin-bottom: 30px;
        text-align: center;
    }
    .myImg img{
        width:80%;
        margin:10px;
        height: auto;
        border:2px solid white;
        z-index:2;
        position:relative;
        box-shadow: 5px 10px 5px #888888;
    }

    .myImg img:hover{
        transform: rotate3d(1,1,1, 360deg);
        transition: all ease-in-out 1s;

        position:relative;

    }

    .Mytitle{
        color:grey;
        height: auto;
        z-index:1;
        transition: height linear 2s;
        position:relative;
        top:140px;
        text-align: center;
        vertical-align: middle;
    }
</style>

</script>

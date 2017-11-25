@extends('layouts.app')

@section('content')
    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container">
            <h4>Доставка та оплата</h4>
        </div>
    </div>
    <!--page header-->

    <div class="container">
        <div class="row margin-b-60">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    @foreach($deliveries as $index=>$delivery)
                        <div class="panel">
                            <div class="panel-heading"
                                 role="tab"
                                 id="heading{{$delivery->id}}">
                                <h4 class="panel-title">
                                    <a class="collapsed"
                                       role="button"
                                       data-toggle="collapse"
                                       data-parent="#accordion"
                                       href="#collapse{{$delivery->id}}"
                                       aria-expanded="false"
                                       aria-controls="collapse{{$delivery->id}}">
                                        {{$delivery->title}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{$delivery->id}}" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="heading{{$delivery->id}}">
                                <div class="panel-body">
                                    {!! $delivery->text !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
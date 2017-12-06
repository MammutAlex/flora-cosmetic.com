@extends('layouts.app')

@section('content')
    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container">
            <h4>Контакты</h4>
        </div>
    </div>
    <!--page header-->

    <div class="container margin-b-30">
        <div class="row margin-b-30">
            <div class="col-sm-5">
                <h3>Информация</h3>
            </div>
            <div class="col-sm-7">
                @foreach($contacts as $contact)
                    <p>
                        {{$contact->text}}
                    </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
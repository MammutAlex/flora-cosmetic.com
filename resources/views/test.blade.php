@extends('layouts.app')

@section('content')
    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container">
            <h4>Визначення типу шкіри</h4>
        </div>
    </div>
    <!--page header-->

    <div class="container">
        <div class="row margin-b-60">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="text-center margin-b-40">Тест</h3>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).
                </p>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).
                </p>
                <hr>
                <div class="payment-option">

                    <ul class=" list-unstyled">
                        <li class="margin-b-10">

                            <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>

                            <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>

                            <span>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>
                            <input type="radio" name="paymentmethod" id="cheque" checked class="icheck"><label
                                    for="cheque"> Cheque Payments</label>
                            <br>
                        </li>
                    </ul>
                    <div class="space-20"></div>
                    <button type="submit" class="btn btn-primary btn-xl btn-block">
                        Визначити тип шкіри
                    </button>

                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title','Определение типа кожи')
@section('content')
    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container">
            <h4>Определение типа кожи</h4>
        </div>
    </div>
    <!--page header-->

    <div class="container">
        <div class="row margin-b-60">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="text-center margin-b-40">Определение типа кожи</h3>
                <form class="payment-option" role="form" method="POST" action="{{ route('test') }}">
                    {{ csrf_field() }}
                    <ul class=" list-unstyled">
                        <li class="margin-b-10">

                            <span><b>На ощупь ваша кожа</b></span>
                            <br>
                            <input type="radio" name="text[1]" value="1" id="text11" class="icheck">
                            <label for="text11">гладкая и бархатистая</label>
                            <br>
                            <input type="radio" name="text[1]" value="2" id="text12" class="icheck"><label
                                    for="text12">тонкая, почти прозрачная</label>
                            <br>
                            <input type="radio" name="text[1]" value="3" id="text13" class="icheck"><label
                                    for="text13">утолщенная, с неровным рельефом</label>
                            <br>
                            <input type="radio" name="text[1]" value="4" id="text14" class="icheck"><label
                                    for="text14">различная по структуре</label>
                            <br>
                        </li>
                        <li class="margin-b-10">

                            <span><b>Заметны ли поры на вашем лице?</b></span>
                            <br>
                            <input type="radio" name="text[2]" value="1" id="text21" class="icheck">
                            <label for="text21">незаметны</label>
                            <br>
                            <input type="radio" name="text[2]" value="2" id="text22" class="icheck"><label
                                    for="text22">едва видны на некоторых зонах</label>
                            <br>
                            <input type="radio" name="text[2]" value="3" id="text23" class="icheck"><label
                                    for="text23">заметны в области лба, носа, подбородка</label>
                            <br>
                            <input type="radio" name="text[2]" value="4" id="text24" class="icheck"><label
                                    for="text24">заметны везде</label>
                            <br>
                        </li>
                        <li class="margin-b-10">

                            <span><b>Появляется ли жирный блеск на лице?</b></span>
                            <br>
                            <input type="radio" name="text[3]" value="1" id="text31" class="icheck">
                            <label for="text31">отсутствует, даже есть чувство сухости кожи</label>
                            <br>
                            <input type="radio" name="text[3]" value="2" id="text32" class="icheck"><label
                                    for="text32">отсутствует, но дискомфорта нет</label>
                            <br>
                            <input type="radio" name="text[3]" value="3" id="text33" class="icheck"><label
                                    for="text33">появляется иногда в некоторых зонах</label>
                            <br>
                            <input type="radio" name="text[3]" value="4" id="text34" class="icheck"><label
                                    for="text34">да, на всем лице</label>
                            <br>
                        </li>
                        <li class="margin-b-10">
                            <span><b>Бывает ли сухость на лице и когда?</b></span>
                            <br>
                            <input type="radio" name="text[4]" value="1" id="text41" class="icheck">
                            <label for="text41">не бывает</label>
                            <br>
                            <input type="radio" name="text[4]" value="2" id="text42" class="icheck"><label
                                    for="text42">да, при перепаде температур и в помещениях с кондиционером</label>
                            <br>
                            <input type="radio" name="text[4]" value="3" id="text43" class="icheck"><label
                                    for="text43">да, после применения спиртосодержащих лосьонов и умывания</label>
                            <br>
                            <input type="radio" name="text[4]" value="4" id="text44" class="icheck"><label
                                    for="text44">практически постоянно</label>
                            <br>
                        </li>
                        <li class="margin-b-10">
                            <span><b>Склонна ли ваша кожа к высыпаниям?</b></span>
                            <br>
                            <input type="radio" name="text[5]" value="1" id="text51" class="icheck">
                            <label for="text51">нет</label>
                            <br>
                            <input type="radio" name="text[5]" value="2" id="text52" class="icheck"><label
                                    for="text52">нечасто, после стрессов</label>
                            <br>
                            <input type="radio" name="text[5]" value="3" id="text53" class="icheck"><label
                                    for="text53">часто</label>
                            <br>
                            <input type="radio" name="text[5]" value="4" id="text54" class="icheck"><label
                                    for="text54">на лице постоянно есть прыщики</label>
                            <br>
                        </li>
                        <li class="margin-b-10">
                            <span><b>Как ваша кожа реагирует на пилинги в салонах красоты?</b></span>
                            <br>
                            <input type="radio" name="text[6]" value="1" id="text61" class="icheck">
                            <label for="text61">нет выраженной реакции</label>
                            <br>
                            <input type="radio" name="text[6]" value="2" id="text62" class="icheck"><label
                                    for="text62">покраснения бывают редко, малозаметны</label>
                            <br>
                            <input type="radio" name="text[6]" value="3" id="text63" class="icheck"><label
                                    for="text63">покраснения возникают иногда, быстро проходят</label>
                            <br>
                            <input type="radio" name="text[6]" value="4" id="text64" class="icheck"><label
                                    for="text64">покраснения держатся долго, кожа шелушится</label>
                            <br>
                        </li>
                        <li class="margin-b-10">
                            <span><b>Есть ли пигментные пятна на вашем лице?</b></span>
                            <br>
                            <input type="radio" name="text[7]" value="1" id="text71" class="icheck">
                            <label for="text71">нет</label>
                            <br>
                            <input type="radio" name="text[7]" value="2" id="text72" class="icheck"><label
                                    for="text72">только веснушки</label>
                            <br>
                            <input type="radio" name="text[7]" value="3" id="text73" class="icheck"><label
                                    for="text73">на некоторых зонах, не очень заметные</label>
                            <br>
                            <input type="radio" name="text[7]" value="4" id="text74" class="icheck"><label
                                    for="text74">пигментация заметна</label>
                            <br>
                        </li>
                        <li class="margin-b-10">
                            <span><b>Заметны ли сосуды на вашем лице?</b></span>
                            <br>
                            <input type="radio" name="text[8]" value="1" id="text81" class="icheck">
                            <label for="text81">нет</label>
                            <br>
                            <input type="radio" name="text[8]" value="2" id="text82" class="icheck"><label
                                    for="text82">в некоторых зонах после посещения бань, на холоде и при сильной
                                инсоляции</label>
                            <br>
                            <input type="radio" name="text[8]" value="3" id="text83" class="icheck"><label
                                    for="text83">в некоторых зонах</label>
                            <br>
                            <input type="radio" name="text[8]" value="4" id="text84" class="icheck"><label
                                    for="text84">сосудистая сеточка видна всегда</label>
                            <br>
                        </li>
                        <li class="margin-b-10">
                            <span><b>Что произойдёт, если вы умоете лицо водой из-под крана?</b></span>
                            <br>
                            <input type="radio" name="text[9]" value="1" id="text91" class="icheck">
                            <label for="text91">всё в порядке, только кожа немного сухая в районе щёк.</label>
                            <br>
                            <input type="radio" name="text[9]" value="2" id="text92" class="icheck"><label
                                    for="text92">у вас начинают гореть щёки</label>
                            <br>
                            <input type="radio" name="text[9]" value="3" id="text93" class="icheck"><label
                                    for="text93">кожа стягивается – ужасное ощущение</label>
                            <br>
                            <input type="radio" name="text[9]" value="4" id="text94" class="icheck"><label
                                    for="text94">хочется намазать кожу кремом, но, в принципе, можно без этого
                                обойтись</label>
                            <br>
                        </li>
                        <li class="margin-b-10">
                            <span><b>Какова ваша самая большая проблема?</b></span>
                            <br>
                            <input type="radio" name="text[10]" value="1" id="text101" class="icheck">
                            <label for="text101">чёрные точки</label>
                            <br>
                            <input type="radio" name="text[10]" value="2" id="text102" class="icheck"><label
                                    for="text102">жирный блеск</label>
                            <br>
                            <input type="radio" name="text[10]" value="3" id="text103" class="icheck"><label
                                    for="text103">морщины</label>
                            <br>
                            <input type="radio" name="text[10]" value="4" id="text104" class="icheck"><label
                                    for="text104">покраснения</label>
                            <br>
                        </li>
                    </ul>
                    <div class="space-20"></div>
                    <button type="submit" class="btn btn-primary btn-xl btn-block">
                        Определить тип кожи
                    </button>

                </form>
            </div>
        </div>
    </div>
@endsection
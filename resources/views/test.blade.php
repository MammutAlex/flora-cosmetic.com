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
                @if (session('success'))
                    @if(session('success') == 'one')
                        <p>
                            <b>Сухой тип.</b><br>
                            Главное, при уходе за сухой кожей - регулярное питание и увлажнение, защита от солнца,
                            ветра, мороза.
                            Рекомендуется очищать 2 раза в день. Утром очищают жидким кремом, растительным маслом,
                            молочком, затем протирают лицо тоником. На влажную кожу наносят крем (летом –
                            солнцезащитный, зимой – питательный), через 15-20 минут избыток крема удаляют бумажной
                            салфеткой. 
                            Вечером лицо очищают косметическим молочком, мицеллярной водой, бальзамом для снятия
                            макияжа. После, наносят питательный крем или сыворотку, содержащие витамины. 
                            Сухой коже необходимы 2 раза в неделю питательные и увлажняющие маски. Мягкий пиллинг,
                            рекомендуются не более 1 раза в неделю
                        </p>
                    @elseif(session('success') == 'two')
                        <p>
                            <b>Нормальный тип кожи.</b><br>
                            При уходе за такой кожей все усилия следует направить на то, чтобы сохранить ее в этом
                            состоянии как можно дольше. Главное не пересушить! Очищать кожу 2 раза в день. После
                            умывания протирать лицо тоником, настоем трав, гидролатом. На еще влажную кожу наносить
                            крем. Он защитит кожу от ветра, солнца, пыли. Через 10-15 минут избыток крема удалите
                            косметической салфеткой. 
                            Вечером кожу лица и шеи нужно очистить от макияжа, например, умыть натуральным мылом, а
                            после этого протереть кожу тоником или мицеллярной водой, нанести питательный крем. 
                            Один раз в неделю рекомендуется делать питательную маску или мягкий пиллинг
                        </p>
                    @elseif(session('success') == 'three')
                        <p>
                            <b>Комбинированный тип.</b><br>
                            Утром освежить лицо слегка теплой или холодной водой. При выраженном смешанном типе
                            дополнительно протереть кожу тоником. Затем защитить лицо увлажняющим дневным кремом. Когда
                            использцете питательный крем, наносите его на боковые части лица обильнее, тогда как Т-зону
                            не перегружайте. Если нос, лоб и подбородок временами становятся более жирными, крем на эти
                            участки кожи не наносите, особенно на ночь. Также, если сухие участки кожи, несмотря на
                            крем, вызывают ощущение стянутости, на них добавьте крем. 
                            Юношескую смешанную кожу с ярко выраженным различием между серединой лица и боковыми
                            участками кожи утром и вечером нужно очищать препаратами для жирной кожи. Днем применять
                            нежирный гидрогель. Вечером смазывать шею и кожу вокруг глаз препаратом для нормальной кожи,
                            а середину лица не трогать. Также и в более позднем возрасте, если Т-зона временами
                            становится жирнее, чем обычно, вечером не следует накладывать на нее крем.
                        </p>
                    @elseif(true)
                    @elseif(session('success') == 'fore')
                        <p>
                            <b>Жирный тип.</b><br>
                            Самое главное для жирной кожи - ее очищение, применение средств, нормализующих деятельность
                            сальных желез, а также повышающих сопротивление кожи к инфекции.
                            Кожу очищают 2 раза в день, утром и вечером. Для очищения лучше всего подходят средства,
                            растворимые в воде - пенка или гель для умывания, натуральное мыло, гидрофильное масло. Если
                            хотите дополнительно освежить кожу, можно протереть ее тоником.
                            Крем наносится тонким слоем, через 15-20 минут снимите остатки салфеткой.
                            Два раза в неделю рекомендуется делать отбеливающие, очищающие маски, либо пиллинг
                        </p>
                    @endif
                @else
                    <p>
                        Определить свой тип кожи можно визуально, достаточно знать основные признаки каждого типа.
                    </p>
                    <p>
                        <b>Жирная кожа</b> - плотная, порой немного грубая на вид; поры расширены; салоотделение
                        повышенное
                        – для этого типа характерен жирный блеск по всему лицу; склонна к появлению комедонов (черных
                        точек,
                        закупорке пор) и угрей
                    </p>
                    <p>
                        <b>Сухая кожа</b> - тонкая, нежная; поры мелкие, практические незаметные; сало- и потоотделение
                        снижено – кожа не блестит, имеет матовый оттенок; может беспокоить чувство сухости, стянутости
                        или
                        шелушения
                    </p>
                    <p>
                        <b>Нормальная кожа</b> - встречается довольно редко - матовая, нормальной плотности; поры
                        маленькие,
                        едва заметные в центральной части лица; салоотделение нормальное, характерен только
                        незначительный
                        блеск в Т-зоне (лоб, нос, подбородок); кожа устойчива к внешним раздражителям, её состояние не
                        меняется в зависимости от времени года или фазы менструального цикла
                    </p>
                    <p>
                        <b>Комбинированный тип кожи</b> , самая распространённая - сочетает в себе участки жирной и
                        нормальной или сухой кожи; в Т-зоне поры расширены, на остальных участках малозаметны;
                        салоотделение
                        повышено только в Т-зоне; периодически беспокоят комедоны, черные точки и прыщики, особенно
                        накануне
                        критических дней
                    </p>
                    <p>
                        <b>Выделают еще 3 дополнительных типа кожи</b>:<br>
                        <b>Зрелая кожа</b>. Для такого типа характерны мелкие морщины и вялая кожа  по всей поверхности,
                        особенно
                        на лбу, щеках, в области носогубных складок и вокруг глаз. Возможно, отвисание кожи в нижней
                        части
                        лица.<br>
                        <b>Чувствительная кожа</b>. Чаще всего сухая, мелкопористая, нежная, тонкая, легко шелушится,
                        чувствительна
                        к раздражениям, склонна к аллергическим реакциям. Имеет тенденцию к раннему образованию морщин,
                        особенно вокруг глаз и рта. <br>
                        <b>Проблемная (угревая кожа)</b>. Чаще всего жирная кожа, на которой угревые и гнойничковые
                        высыпания
                        особенно устойчивы и трудно поддаются коррекции обычными косметическими средствами. Требует
                        хорошо
                        продуманного, систематического ухода.<br>
                    </p>
                    <p>
                        Если вы всё же затрудняетесь определить свой тип кожи визуально, в дополнение проведите тест
                    </p>
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
                @endif
            </div>
        </div>
    </div>
@endsection
@extends('layouts.shop')


@section('main')
    <div class="listMain">
        @inject('productPresenter', 'App\Presenters\ProductPresenter')
        <!--放大镜-->




            <div class="item-inform" >
                <hr style="height:1px;border:none;border-top:1px solid #CDC9C9;" />
            <div class="clearfixRight" style="width: 800px;">
                <div>
                    <p style="font-size:30px;font-weight:bolder" >{{ $product->name }} </p>
                    <br/>
                </div>
                <div class="clearfixLeft">
                    <img src="{{ $productPresenter->getThumbLink($product->thumb) }}"/>
                </div>
                <div class="clear"></div>
                <div class="tb-detail-list">
                    <div class="tb-detail-price" style="background:white">
                        <li class="" >

                            <dt>教师简介</dt>
                            <dd>{{ $product->title }} </dd>
                        </li>
                        <div class="clear"></div>
                        <br>
                    </div>
                    <div class="clear"></div>
                    <br>
                    <div>
                            <dd>课程价格: &nbsp; <em>¥</em><b class="sys_item_price">{{ $product->price }}</b>  </dd>
                    </div>
                    <br>
                    <!--地址-->
                    <dl class="iteminfo_parameter freight">
                        <dt>教学区</dt>
                        <div class="iteminfo_freprice">
                            <div class="am-form-content address">

                                @if (Auth::check())
                                    <select data-am-selected name="address_id">
                                        @foreach (Auth::user()->addresses as $address)
                                            <option value="{{ $address->id }}">{{ $address->name }}/{{ $address->phone }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <a style="line-height:27px;color:red;" href="{{ url('user')  }}">添加教学区</a>
                                @endif

                            </div>
                        </div>
                    </dl>
                    <div class="clear"></div>

                    <div class="clear"></div>

                    <!--各种规格-->
                    <dl class="iteminfo_parameter sys_item_specpara">
                        {{--<dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>--}}
                        <dd>
                            <!--操作页面-->

                            {{--<div class="theme-popover-mask"></div>--}}

                            <div class="theme-popover">
                                {{--<div class="theme-span"></div>--}}
                                {{--<div class="theme-poptit">
                                    <a href="javascript:;" title="关闭" class="close">×</a>
                                </div>--}}
                                <div class="theme-popbod dform">
                                    <form class="theme-signin" name="" action="" method="post">

                                        <div class="theme-signin-left">
                                            {{--@foreach ($product->productAttributes()->get()->groupBy('attribute')->toArray() as $item => $attrs)
                                                <div class="theme-options">
                                                    <div class="cart-title">{{ $item }}</div>
                                                    <ul>
                                                        @foreach ($attrs as $key => $attr)
                                                            <li title="价格浮动 {{ $attr['markup'] }}" class="sku-line {{ $key == 0 ? 'selected' : '' }}">{{ $attr['items'] }}<i></i></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endforeach--}}
                                            <div class="theme-options">
                                                <div class="cart-title number">数量</div>
                        <dd>
                            <input id="min" class="am-btn am-btn-default" type="button" value="-" />
                            <input id="text_box" name="numbers" type="text" value="1" style="width:30px;" />
                            <input id="add" class="am-btn am-btn-default"  type="button" value="+" />
                            <span id="Stock" class="tb-hidden">剩余班容量<span class="stock">{{ $product->productDetail->count }}</span>人</span>
                        </dd>


                </div>

                <div class="clear"></div>


            </div>
            </div>




    </div>

    <div class="clear"></div>
    <!--活动	-->


    <div class="pay">
        <div class="pay-opt">
            <a href="{{ url('/') }}"><span class="am-icon-home am-icon-fw">首页</span></a>
            @auth
            @if ($product->users()->where('user_id', \Auth::user()->id)->count() > 0)
                <a href="javascript:;" style="display: none" id="likes_btn"><span class="am-icon-heart am-icon-fw" >收藏</span></a>
                <a href="javascript:;"  id="de_likes_btn"><span class="am-icon-heart am-icon-fw">取消收藏</span></a>
            @else
                <a href="javascript:;"  id="likes_btn"><span class="am-icon-heart am-icon-fw">收藏</span></a>
                <a href="javascript:;" style="display: none" id="de_likes_btn"><span class="am-icon-heart am-icon-fw" >取消收藏</span></a>
            @endif
            @endauth

            @guest
            <a href="javascript:;"  id="likes_btn"><span class="am-icon-heart am-icon-fw">收藏</span></a>
            @endguest

        </div>
        <li>
            <div class="clearfix tb-btn" id="nowBug">
                @auth
                <a  href="javascript:;" >立即购买</a>
                @endauth
                @guest
                <a href="{{ url('login') }}?redirect_url={{ url()->current() }}">立即购买</a>
                @endguest

            </div>
        </li>
        <li>
            <div class="clearfix tb-btn tb-btn-basket">
                <a  title="加入订单" href="javascript:;"  id="addCar"><i></i>加入订单</a>
            </div>
        </li>
    </div>
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    </div>


    <div class="clear"></div>
    </div>




    <!-- introduce-->

    <div class="introduce">
        <div class="browse">
            <div class="mc">
                <ul>
                    <div class="mt">
                        <p style="font-size: 18px;font-weight: bold ;height:65px;"><br>推&nbsp;&nbsp;荐</p>
                    </div>

                    @foreach ($recommendProducts as $recommendProduct)
                        <li class="first">
                            <div class="p-img">
                                <a href="{{ url("/home/products/{$recommendProduct->id}") }}">
                                    <img class="media-object" src="{{ $productPresenter->getThumbLink($recommendProduct->thumb) }}" alt="{{ $recommendProduct->name }}" width="80">
                                </a>
                            </div>
                            <div class="p-name"><a href="{{ url("/home/products/{$recommendProduct->id}") }}">
                                    {{ $recommendProduct->name }}
                                </a>
                            </div>
                            <div class="p-price"><strong>
                                    ￥ {{ $recommendProduct->price }}
                                </strong></div>
                            <hr style="height:1px;border:none;border-top:1px solid #CDC9C9;" />
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <br>

        <div style="margin-left: 10px;width:68%;">
            <div class="am-tabs" data-am-tabs>

                    <span style="font-size: 20px;font-weight: bold">课程详情</span>
                <hr style="height:1px;border:none;border-top:1px solid #CDC9C9;" />
                <div class="am-tabs-bd">

                    <div class="am-tab-panel am-fade am-in am-active">
                        <div class="details">
                            <br/>
                            <div class="twlistNews">
                                {!! $product->productDetail->description !!}
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>

                   {

                </div>

            </div>

            <div class="clear"></div>


        </div>
        <div class="footer">
            @include('common.home.footer')
        </div>
    </div>
    </div>
    <form id="pay_form" action="{{ url('/user/pay/show') }}" method="post">
        {{ csrf_field() }}
    </form>
@endsection

@section('script')
    <script src="{{ asset('assets/user/layer/2.4/layer.js') }}"></script>
    <script src="{{ asset('js/jquery-addShopping.js') }}"></script>
    <script>
        var product_id = $('input[name=product_id]').val();
        var _url = "{{ url("/user/likes") }}/" + product_id;
        var token = "{{ csrf_token() }}";
        var likes_nums = $('#likes_count');

        $('#likes_btn').click(function(){
            var that = $(this);

            $.post(_url, {_token:token}, function(res){
                layer.msg(res.msg);

                if (res.code == 301) {
                    return;
                }

                that.hide().next().show();
                likes_nums.text(parseInt(likes_nums.text()) + 1);
            });
        });
        $('#de_likes_btn').click(function(){
            var that = $(this);

            $.post(_url, {_token:token,_method:'DELETE'}, function(res){
                layer.msg(res.msg);

                if (res.code == 301) {
                    return;
                }

                that.hide().prev().show();
                likes_nums.text(parseInt(likes_nums.text()) - 1);
            });
        });

        var Car = {
            addProduct:function(product_id) {

                var numbers = $("input[name=numbers]").val();
                if (! localStorage.getItem(product_id)) {
                    var product = {name:"{{ $product->name }}", numbers:numbers, price:"{{ $product->price }}"};
                } else {
                    var product = $.parseJSON(localStorage.getItem(product_id));
                    product.numbers = parseInt(product.numbers) + parseInt(numbers);
                }
                localStorage.setItem(product_id, JSON.stringify(product))
            }
        };

        var car_nums = $('#cart-number');
        $('#addCar').shoping({
            endElement:"#car_icon",
            iconCSS: "",
            iconImg: $('#jqzoom').attr('src'),
            endFunction:function(element){

                var numbers = $("input[name=numbers]").val();
                var data = {product_id:"{{ $product->id }}",_token:token, numbers:numbers};
                var url = "{{ url('/home/cars') }}";
                $.post(url, data, function(res){
                    console.log(res);

                    if (res.code == 304) {

                        layer.msg(res.msg, {icon: 2});
                        return;
                    }

                    if (res.code == 302) {
                        Car.addProduct(product_id);
                    }
                    layer.msg('加入订单成功');
                    car_nums.text(parseInt(car_nums.text())+1);
                });
            }
        });

        $('#nowBug').click(function(){
            var _address_id = $('select[name=address_id]').val();
            var _numbers = $('input[name=numbers]').val();
            var _product_id = $('input[name=product_id]').val();


            var data = {address_id:_address_id,numbers:_numbers,product_id:_product_id, _token:"{{ csrf_token() }}"};
            console.log(data);
            $.post('{{ url('user/orders/single') }}', data, function(res){
                layer.msg(res.msg);
            });

            /** v请求支付 **/
            var form = $('#pay_form');
            var input = '<input type="hidden" name="_address_id" value="'+ _address_id +'">\
                        <input type="hidden" name="_product_id" value="'+ _product_id +'">\
                        <input type="hidden" name="_numbers" value="'+ _numbers +'">';
            form.append(input);
            form.submit();
        });
    </script>
@endsection
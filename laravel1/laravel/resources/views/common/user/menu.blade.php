<aside class="menu">
    <ul>
        <li class="person active">
            <a href="{{ url('/user') }}">个人中心</a>
        </li>
        <li class="person">
            <ul>
                <li> <a href="{{ url('/user/setting') }}">个人信息</a></li>
                <li> <a href="{{ url('/user/password') }}">修改密码</a></li>
                <li> <a href="{{ url('/user/addresses') }}">教学区</a></li>
            </ul>
        </li>
        <li class="person">
            <a href="#">我的交易</a>
            <ul>
                <li><a href="{{ url('user/orders') }}">订单管理</a></li>
            </ul>
        </li>
        <li class="person">
            <a href="#">个人主页</a>
            <ul>
                <li> <a href="{{ url('/user/likes') }}">收藏</a></li>

            </ul>
        </li>

    </ul>

</aside>
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 科目管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('admin/categories') }}" data-title="科目列表" href="javascript:void(0)">科目列表</a></li>
					<li><a data-href="{{ url('admin/categories/create') }}" data-title="科目添加" href="javascript:void(0)">科目添加</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i>教师管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('/admin/products') }}" data-title="教师列表" href="javascript:void(0)">教师列表</a></li>
					<li><a data-href="{{ url('/admin/products/create') }}" data-title="添加教师" href="javascript:void(0)">添加教师</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i>学员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('/admin/users') }}" data-title="学员列表" href="javascript:;">学员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i>管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('/admin/admins') }}" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
					<li><a data-href="{{ url('/admin/admins/create') }}" data-title="添加管理员" href="javascript:void(0)">添加管理员</a></li>
					<li><a data-href="{{ url('/admin/roles') }}" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
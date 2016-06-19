<ul>

			<li id="{{$parent_menu->menu_id}}">
				<div>{{$parent_menu->menu_title}}</div>
				
				@foreach($menus as $submenu)
					@if($parent_menu->menu_id == $submenu->parent_id)
						@include('menu.submenus',['menus'=>$menus,'parent_menu'=>$submenu])
					@endif
				@endforeach
			</li>

</ul>
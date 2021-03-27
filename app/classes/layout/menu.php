<?php

	class Layout_Menu{
		/*
			Layout_Main::do_menu($curr_page)
			@desc Creates main nav.
			@param $curr_page (int)
			@return <nav>...</nav> [string]
		*/
		public static function do_menu(){
			$d = View::forge('components/menu');
			return $d;
		}
	
		/*
			Layout_Main::do_build_menu($curr_page)
			@desc Builds the links within the main nav.
			@param $curr_page (int)
			@return <a>...</a>... [string]
		*/
		public static function do_build_menu(){
			$m = '';
			foreach(\Config::get('misc.menu_items') as $item_txt => $item_url){
				$m .= '
				<li class="nav-item">
					<a class="nav-link" href="' . $item_url . '">' . $item_txt . '</a>
				</li>';
			}
			return $m;
		}
	}
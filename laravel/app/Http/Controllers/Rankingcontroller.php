<?php namespace App\Http\Controllers;
//榜单
class RankingController extends Controller {


	//榜单
	public function ranking()
	{
		return view('ranking.index');//ranking.htm==>index.php
	}
	
	
	//更多榜单
	public function ranking_all()
	{
		return view('ranking.ranking_all');//ranking_all.htm==>ranking_all.php
	}

	//
}
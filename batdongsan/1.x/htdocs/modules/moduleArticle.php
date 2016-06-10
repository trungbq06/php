<?php

class Article extends Generals{
	
	function index($tpl){
		$this->general();
		global $lang, $smarty;
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$id = intval($id);
		$sql = "SELECT ca.id,lang.name FROM article_category AS ca
				LEFT JOIN article_category_lang AS lang ON ca.id=lang.field_id
				WHERE ca.parent_id=$id AND lang.lang=$lang
				";
		$query = $this->query($sql);

		$result = array();
		while ($item = $this->fetch_array($query)){
			
			$sql_ar1 = "				
					SELECT a.*,l.name,l.description FROM article AS a
					LEFT JOIN article_lang AS l ON a.id=l.field_id
					WHERE a.active=1 AND a.category_id='".$item['id']."' AND l.lang=$lang
					ORDER BY a.order_by ASC, a.id DESC
					LIMIT 0,1;
					";
			$item['article1'] = $this->get_articles($sql_ar1);

			$sql_ar2 = "
					SELECT a.*,l.name,l.description FROM article AS a
					LEFT JOIN article_lang AS l ON a.id=l.field_id
					WHERE a.active=1 AND a.category_id='".$item['id']."' AND l.lang=$lang
					ORDER BY a.order_by ASC, a.id DESC
					LIMIT 1,5; 
					";
			$item['article2'] = $this->get_articles($sql_ar2);
				
			$result[] = $item;
		}
		$smarty->assign("result", $result);
		$smarty->display(DEFAULT_LAYOUT);
	}
	
	/* Danh sach tin */
	function lists(){
		$this->general();
		global $trans, $lang, $smarty;
		$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
		
		$category = $this->get_field_lang('article_category', $id, "name");
		if($id == 0 || $id == NULL || $id == ""){
			$category = $trans['news'];
		}
		$smarty->assign("category", $category);

		/* Get Article */
		$str_cate = $this->get_arr_id('article_category', $id);
		$sql = "
			SELECT a.*,l.name,l.description,l.content FROM article AS a
			LEFT JOIN article_lang AS l ON a.id=l.field_id
			WHERE a.active=1 AND a.category_id IN ($str_cate) AND l.lang=$lang
			ORDER BY a.order_by ASC, a.id DESC
		";
		$sql = $this->pagination($sql, 10);
		$query = $this->query($sql);
		
		$result = array();
		while($item = $this->fetch_array($query)){
			$item["created"] = $this->time_news($item["created"]);
			$item['img'] = $this->get_image(ARTICLE_UPLOAD, $item['image']);
			$item["link"] = ALIAS_ARTICLE . $item['id'] . "/" . $item['category_id'] . "/" . $this->str_convert($item["name"]) . ".html";
			$item['category'] = $this->get_field_lang('article_category', $item['category_id']);
			$item["description"] = $this->str_short(strip_tags($item["description"]), 400);
			$result[] = $item;
		}
		$smarty->assign("result", $result);
		


		$bar = $this->get_list("article_category");
		$smarty->assign('bar', $bar);
		
		$site_map = "<a href='./'>Trang chủ</a>" . $this->get_site_map("article_category", $id, ALIAS_ARTICLE);
		$smarty->assign('site_map', $site_map);
		
		$seo['title'] = $category;
		$seo['keyword'] = $category;
		$seo['description'] = $category;
		$smarty->assign('seo', $seo);
		
		$smarty->display('page.tpl');
	}

	
	function view(){
		$this->general();
		global $lang, $smarty;
		/* Get Article */
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if($id == 0){
			$this->redirect_back();
		}
		
		$value = $this->find_by_id("article", $id);
		$value = $this->find_one("
				SELECT a.*,l.name,l.description,l.content FROM article AS a
				LEFT JOIN article_lang AS l ON a.id=l.field_id
				WHERE a.active=1 AND l.lang=$lang AND a.id=$id
				");
		$value["created"] = $this->time_news($value["created"]);
		$value["img"] = $this->get_image(ARTICLE_UPLOAD, $value['image']);
		$smarty->assign("value", $value);
		$category = array();
		$category = $this->get_field_lang("article_category", $value["category_id"], "name");
		$category['site_map'] = "<a href='./'>Trang chủ</a>" . $this->get_site_map("article_category", $id);
		$smarty->assign("category", $category);
		
		/* Tin lien quan */
		$sql_article = "SELECT a.*,lg.name FROM article AS a
				LEFT JOIN article_lang AS lg ON a.id=lg.field_id AND lg.lang=$lang
				WHERE a.active='1' AND a.id <> '$id'";
		$sql_article .= " AND a.category_id = " . $value['category_id'];
		$sql_article .= " ORDER BY a.future ASC, a.id DESC LIMIT 0,8";
		$article = $this->get_articles($sql_article);
		$smarty->assign("other", $article);

		$sql3 = "SELECT a.*,lg.name FROM article AS a
				LEFT JOIN article_lang AS lg ON a.id=lg.field_id AND lg.lang=$lang
				WHERE a.active=1 AND a.id<>$id AND a.category_id<>0
				ORDER BY a.view LIMIT 10
				";
		$hot = $this->get_articles($sql3);
		$smarty->assign('hot', $hot);
		
		$str_cate = $this->get_arr_id('article_category', $value["category_id"]);
		$bar = $this->get_list("article_category");
		$smarty->assign('bar', $bar);
		
		$site_map = "<a href='./'>Trang chủ</a>" . $this->get_site_map("article_category", $value["category_id"], ALIAS_ARTICLE);
		$smarty->assign('site_map', $site_map);
		
		/* tang luot doc tin */
		$this->query("UPDATE article SET view=view+1 WHERE id = '$id'");
		
		$seo['title'] = $value['name'];
		$seo['keyword'] = $value['name'];
		$seo['description'] = strip_tags($value['description']);
		$smarty->assign('seo', $seo);
		
		$layout = isset($_GET["layout"]) ? $_GET["layout"] : 0;
		if($layout == 1){
			$smarty->display('page.tpl');
		}
		else {
			$smarty->display("page.tpl");
		}
	}
	
	
}
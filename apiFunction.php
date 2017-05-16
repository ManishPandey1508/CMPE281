<?php
function getSearchResult($searchText, $searchType) {

	$link = "http://" . $_SERVER['HTTP_HOST'] . "/demo1/api/search_result.php?searchText=" . $searchText . "&searchType=" . $searchType;
	return file_get_contents($link);	
}
?>
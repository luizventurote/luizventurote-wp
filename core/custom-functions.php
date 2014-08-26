<?php

	/**
	 * Get Post Meta
	 * 
	 * @param  string $id_meta Used to identify a custom Meta Box.
	 * @return string Meta box value.
	 */
	function getPostMeta($id_meta) {

		global $post;

		$prefix = "swp_";

		$meta = get_post_meta($post->ID, $prefix.$id_meta, true);
		
		return $meta;
	}

	/**
	 * Get global data
	 * 
	 * @param  string $id_data Used to identify a meta data.
	 * @return string Meta data value.
	 */
	function getData($id_data) {

		global $data;
		
		$meta = $data[$id_data];
		
		return $meta;
	}

	/**
	 * Get Category Meta
	 * 
	 * @param  string $id_meta Used to identify a meta data.
	 * @return string Meta data value.
	 */
	function getCategoryMeta($id_meta) {

		// Get category ID
		$category = the_category_ID(false);

		// Get Taxonomy Meta
		$meta = get_tax_meta($category, THEME_PREFIX.$id_meta);
		
		return $meta;
	}

	/**
	 * Show post thumbnail
	 */
	function the_thumbw($size = 'mini-thumb') {

		if ( has_post_thumbnail() ) {
			the_post_thumbnail($size);
		}
		else {
			//echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg" />';
		}

	}

	/**
	 * Get sliders - Revolutions Slider
	 *
	 * @return array All revolution sliders.
	 */
	function getRevSliders() {

		global $wpdb;

		$get_sliders = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix.'revslider_sliders');

		$revsliders[0] = 'Select a slider';
		$i=0;
		$sliders = array();
		if($get_sliders) {
			foreach($get_sliders as $slider) {

				$indice = "slider".$i;

				$sliders[$indice]['name'] = __( $slider->title, 'cmb' );
				$sliders[$indice]['value'] = $slider->alias;

				$i++;
			}
		}

		return $sliders;

	}

	/**
	 * Get array sliders - Revolutions Slider
	 *
	 * @return array All revolution sliders in array.
	 */
	function getRevSlidersArray() {

		$sliders = array();

		$group_sliders = getRevSliders();

		foreach ($group_sliders as $slider) {

			$index = $slider['value'];
			$sliders[$index] = $slider['name'];
			
		}

		return $sliders;

	}

	/**
	 * truncate a string provided by the maximum limit without breaking a word
	 * @param string $str
	 * @param integer $maxlen
	 * @return string
	 */
	function truncateString($str, $maxlen)	{
	    if (strlen($str) <= $maxlen) return $str;

	    $newstr = substr($str, 0, $maxlen);
	    if (substr($newstr, -1, 1) != ' ') $newstr = substr($newstr, 0, strrpos($newstr, " "));

	    return $newstr.' ...';
	}	

	/**
	 * Sanitize String
	 * 
	 * @param  string $str string to be cleaned
	 * @return string      new string without special characters
	 */
	function sanitizeString($str) {
	    $str = preg_replace('/[áàãâä]/ui', 'a', $str);
	    $str = preg_replace('/[éèêë]/ui', 'e', $str);
	    $str = preg_replace('/[íìîï]/ui', 'i', $str);
	    $str = preg_replace('/[óòõôö]/ui', 'o', $str);
	    $str = preg_replace('/[úùûü]/ui', 'u', $str);
	    $str = preg_replace('/[ç]/ui', 'c', $str);
	    // $str = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $str);
	    $str = preg_replace('/[^a-z0-9]/i', '_', $str);
	    $str = preg_replace('/_+/', '_', $str);
	    return $str;
	}

	/**
	 * Get Date array by date
	 * 
	 * @param  string $myDate Date in the format format dd/mm/yyyy
	 * @return array 	      Date array
	 */
	function getDateArray($myDate) {

		// $myDate = explode('/', $myDate);

		// $myDate = $myDate[2].'-'.$myDate[0].'-'.$myDate[1];

		$newDate['day'] = date('d', strtotime($myDate));

		$newDate['month'] = date('M', strtotime($myDate));

		$newDate['year'] = date('y', strtotime($myDate));

		// Translate
		switch($newDate['month']) {
			case "Jan":   	$newDate['month'] = __("Jan", 'swp');	break;
			case "Feb":  	$newDate['month'] = __("Feb", 'swp');   break;
			case "Mar":     $newDate['month'] = __("Mar", 'swp');   break;
			case "Apr":     $newDate['month'] = __("Apr", 'swp');   break;
			case "May":     $newDate['month'] = __("May", 'swp');   break;
			case "Jun":     $newDate['month'] = __("Jun", 'swp');   break;
			case "Jul":     $newDate['month'] = __("Jul", 'swp');   break;
			case "Aug":    	$newDate['month'] = __("Aug", 'swp');   break;
			case "Sep": 	$newDate['month'] = __("Sep", 'swp'); 	break;
			case "Oct":   	$newDate['month'] = __("Oct", 'swp');   break;
			case "Nov":  	$newDate['month'] = __("Nov", 'swp');  	break;
			case "Dec":  	$newDate['month'] = __("Dec", 'swp');  	break;
			default:        $newDate['month'] = __("Error", 'swp');  break;
		}

		return $newDate;

	}

	/**
	 * Adding async atribute (tag) - Filter
	 */
	function defer_parsing_of_js ( $url ) {
	    if ( FALSE === strpos( $url, '.js' ) ) return $url;
	    if ( strpos( $url, 'jquery.js' ) ) return $url;
	    return "$url' async onload='myinit()";
	}
	//add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

?>
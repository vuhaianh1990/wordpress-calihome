<?php
	/**
	 * Author: Tung Pham
	 */

	/**
	 * Add css to frondend
	 */
	add_action('wp_enqueue_scripts', 'tntAddFrontEndCSS');
	function tntAddFrontEndCSS()
	{
		if (!is_admin()) {
			$tntOptions = get_option('tntVideoManageOptions');
			$tntSkin 	= $tntOptions['skinColorbox'];

			switch ($tntSkin) {
				case '1':
					wp_enqueue_style('tntColorbox1', TNT_CSS_URL.'/skin1/colorbox.css');
					break;
				case '2':
					wp_enqueue_style('tntColorbox2', TNT_CSS_URL.'/skin2/colorbox.css');
					break;
				case '3':
					wp_enqueue_style('tntColorbox3', TNT_CSS_URL.'/skin3/colorbox.css');
					break;
				case '4':
					wp_enqueue_style('tntColorbox4', TNT_CSS_URL.'/skin4/colorbox.css');
					break;
				case '5':
					wp_enqueue_style('tntColorbox5', TNT_CSS_URL.'/skin5/colorbox.css');
					break;
				default:
					# code...
					break;
			}

			wp_enqueue_style('tntstyle1', TNT_CSS_URL.'/style.css');
		}
	}

	/**
	 * Add javascript to footer of frondend
	 */
	add_action('init', 'tntAddFrontEndJS');
	function tntAddFrontEndJS() {
        if (!is_admin()) {
        	$tntOptions = get_option('tntVideoManageOptions');

					wp_enqueue_script('lightgallery_script', get_template_directory_uri().'/assets/js/lightGallery/js/lightgallery-all.min.js', false,'1.0', true);

					function lightgallery_style() {
						wp_enqueue_style( 'lightgallery_style', get_template_directory_uri() . '/assets/js/lightGallery/css/lightgallery.min.css' );
					};
					add_action( 'get_footer', 'lightgallery_style' );

          wp_enqueue_script('tntscript1', TNT_JS_URL.'/custom.js', false, '1.0', true);
        }
    }

	/**
	 * Add css to backend
	 */
	add_action('admin_print_styles', 'tntAddBackEndCSS');
	function tntAddBackEndCSS()
	{
		if (is_admin()) {
			wp_enqueue_style('tntstyleAdmin', TNT_CSS_URL.'/admin.css');
		}
	}

	/**
	 * Add javascript to footer of backend
	 */
	add_action('init', 'tntAddBackEndJS');
	function tntAddBackEndJS() {
        if (is_admin()) {
        	wp_enqueue_script('tntscriptAdmin1', TNT_JS_URL.'/jquery.validate.js', false, '1.0', true);
            wp_enqueue_script('tntscriptAdmin2', TNT_JS_URL.'/admin.js', false, '1.0', true);
        }
    }

	/**
	 * Template to show videos list
	 * @param 	$argsVideo([0]=>array('videoTitle' => title of Video, 'videoFrame' => iFrame of video))
	 * @return  html 	html of videos list
	 */

	function tntTemplateVideoList($argsList = null, $paginator = null, $columns = 2)
	{
		$tntOptions = get_option('tntVideoManageOptions');
		if (isset($tntOptions["tntSocialFeature"])) {
			echo $tntOptions["tntSocialFeature"];
		}
		$view = "";

		$socialFeature   = (($tntOptions["socialFeature"] == 1) && ($tntOptions["socialFeatureFB"] == 1 || $tntOptions["socialFeatureTW"] == 1 || $tntOptions["socialFeatureG"] == 1 ||$tntOptions["socialFeatureP"] == 1)) ? "dpb" : "dpn";
		$socialFeatureFB = ($tntOptions["socialFeatureFB"] == 1) ? "dpb" : "dpn";
		$socialFeatureTW = ($tntOptions["socialFeatureTW"] == 1) ? "dpb" : "dpn";
		$socialFeatureG  = ($tntOptions["socialFeatureG"] == 1) ? "dpb" : "dpn";
		$socialFeatureP  = ($tntOptions["socialFeatureP"] == 1) ? "dpb" : "dpn";

		$socialFeatureTitle = ($tntOptions["socialFeatureIconSize"] == "") ? "tntSocialShareTitle32" : "tntSocialShareTitle".$tntOptions["socialFeatureIconSize"];
		$socialFeatureFBIcon = ($tntOptions["socialFeatureIconSize"] == "") ? "tntIcon32 tntFIcon32" : "tntIcon".$tntOptions["socialFeatureIconSize"]." tntFIcon".$tntOptions["socialFeatureIconSize"];
		$socialFeatureTWIcon = ($tntOptions["socialFeatureIconSize"] == "") ? "tntIcon32 tntTIcon32" : "tntIcon".$tntOptions["socialFeatureIconSize"]." tntTIcon".$tntOptions["socialFeatureIconSize"];
		$socialFeatureGIcon = ($tntOptions["socialFeatureIconSize"] == "") ? "tntIcon32 tntGIcon32" : "tntIcon".$tntOptions["socialFeatureIconSize"]." tntGIcon".$tntOptions["socialFeatureIconSize"];
		$socialFeaturePIcon = ($tntOptions["socialFeatureIconSize"] == "") ? "tntIcon32 tntPIcon32" : "tntIcon".$tntOptions["socialFeatureIconSize"]." tntPIcon".$tntOptions["socialFeatureIconSize"];

		if(isset($argsList) && $argsList != null) {
			$view .= '<div class="tntVideoList" width="'.$argsList[0]['videoWidth'].'" height="'.$argsList[0]['videoHeight'].'" rel="'.$columns.'">';

			foreach ($argsList as $video) {

				$view .= '
					<div class="tntVideoItem" href="'.$video['videoEmbed'].'" title="'.$video['videoTitle'].'">
						<h3>'. $video['videoTitle'] . '</h3>
						<a class="videoLink" href="javascript:void(0)">
							<img src="'.$video['videoThumb'].'" />
						</a>
						<div class="tntVideoSocialShare '.$socialFeature.'">
							<h4 class="'.$socialFeatureTitle.'">Share:</h4>
							<ul>
								<li class="'.$socialFeatureFB.'"><a class="'.$socialFeatureFBIcon.'" href="https://www.facebook.com/sharer/sharer.php?u='.$video['videoEmbed'].'" target="_blank" title="Share on Facebook">Share on Facebook</a></li>
								<li class="'.$socialFeatureTW.'"><a class="'.$socialFeatureTWIcon.'" href="https://twitter.com/home?status='.$video['videoEmbed'].'" target="_blank" title="Share on Twitter">Share on Twitter</a></li>
								<li class="'.$socialFeatureG.'"><a class="'.$socialFeatureGIcon.'" href="https://plus.google.com/share?url='.$video['videoEmbed'].'" target="_blank" title="Share on Google+">Share on Google+</a></li>
								<li class="'.$socialFeatureP.'"><a class="'.$socialFeaturePIcon.'" href="https://pinterest.com/pin/create/button/?url='.$video['videoEmbed'].'&media='.$video['videoThumb'].'&description=" target="_blank" title="Share on Pinterest">Share on Pinterest</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>';
			}

			$view .= '</div><div class="tntClear"></div>';
		}

		$view .= '<div class="pagiWrap">';
		$view .= $paginator;
		$view .= '</div>';
		return $view;
	}

	/**
	 * Template to show video item
	 * Author: Tung Pham
	 * @param 	$argsVideo([0]=>array('videoTitle' => title of Video, 'videoFrame' => iFrame of video))
	 * @return  html 	html of videos list
	 */
	function tntTemplateVideoItem($tntVideo = null)
	{
		$view = "";
		if($tntVideo != null)
		{
			$view .= '<div class="tntVideoSingle">';
			$view .= '<h3>'. $tntVideo['videoTitle'] . '</h3>';
			$view .= $tntVideo['videoFrame'];
			$view .= '</div>';
		}
		return $view;
	}
?>
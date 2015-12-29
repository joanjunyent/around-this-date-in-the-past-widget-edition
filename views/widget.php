<div class="atd-widget around-this-date-x-years-ago">

<?php

    $args = array(
    	'date_query' => array(
    	'year'  => date('Y')-$instance['yearsago'],
      array(
      'dayofyear'	=> array( date('z')-$instance['daysbefore'], date('z') +$instance['daysafter'] ),
			'compare'	=> 'IN',
		  ),
      ),
      'post_status' => 'publish',
      'post_type' => 'post',
      'showposts' => $instance['limit'],
      'order'    => 'ASC',
    );
    $atd_the_query = new WP_Query( $args );

    echo '<h2>' . $instance['title'] . '</h2>';

    if (!empty($atd_the_query)){

    echo '<ul class="atd-list">';

        $year = date("Y")-$instance['yearsago'];
        $liststart = '<li class="atd-year atd-'.$year.'"';
        $listend = '</li>';

        if ($instance['showyear']) { $liststart .= '>'.$year; }
        else { $liststart .= ' style="display:none">'; }

        echo $liststart;
        echo $listend;
        // query

  		while ($atd_the_query->have_posts()) : $atd_the_query->the_post();

  			echo '<li class="atd-entry atd-y'. get_the_date('Y') . ' atd-m'. get_the_date('m') . ' atd-d' .
  				get_the_date('d') . ' atd-' . get_the_date('Ymd') . '">';
  			echo '<span class="atd-entry-title"><a href="'.get_the_permalink().'" rel="bookmark" title="Permanent link to ' . the_title('','',false) .'">'. the_title('','',false) .'</a></span>';
  			if($instance['showdate']) { echo '<span class="atd-entry-date"> - ' . the_date($instance['dateformat'],'','',false) . ' </span><br />'; }
  			if($instance['showexcerpt']) { echo '<span class="atd-entry-excerpt">'.get_the_excerpt(). '</span>'; }
  			echo '</li>';
  		endwhile;

  	} else {
  	echo '<li class="atd-entry atd-noentries">' . $instance['none'] . '</li>';
  	}
  	echo  '</ul>';

 ?>


</div>

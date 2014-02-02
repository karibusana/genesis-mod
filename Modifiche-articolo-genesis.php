<?php

//* Permette di mostrare la data aggiornata negli articoli se ad esempio vengono rivisionati

add_filter( 'genesis_post_info', 'custom_post_info' );

function custom_post_info( $post_info ) {
    $u_time = get_the_time( 'U' ); 
	$u_modified_time = get_the_modified_time( 'U' ); 

	if ( $u_modified_time >= $u_time + 86400 ) { 
		$post_date = get_the_modified_time( 'j F, Y' ); 
		$post_info =  __( 'Aggiornato da', 'genesis' ) . ' [post_author_posts_link] ' . __( 'il ', 'genesis' ) . $post_date .' [post_comments] [post_edit]';
		 return $post_info;
	}
	else { 
		$post_date = get_the_time( 'j F, Y' );
		$post_info =  __( 'Da', 'genesis' ) . ' [post_author_posts_link] ' . __( 'il ', 'genesis' ) . $post_date .' [post_comments] [post_edit]';
		return $post_info;
		 
	}
	
}

?>

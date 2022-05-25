<?php 

/* 
    Get / Process Attachment File In PHP/WORDPRESS 
*/

if(!function_exists('insert_attachment')) {
	function insert_attachment($file_handler, $post_id, $setthumb=false) {

		if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) {
			return __return_false();
		}
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		require_once(ABSPATH . "wp-admin" . '/includes/file.php');
		require_once(ABSPATH . "wp-admin" . '/includes/media.php');
		$attach_id = media_handle_upload( $file_handler, $post_id );

		return $attach_id;
	}
}

/*
*   RETURN ATTACHMENT 'ID' AFTER SAVING IT TO DATABASE BY NAME_OF_FILE && CUTOM GIVEN ID
*   insert_attachment(NAME_OF_FILE, ID);
*/

$attach_id = insert_attachment('NAME_OF_FILE',  $POST_ID);

/*
*   GET ATTACHMENT URL BY ID
*/
$attach_url = wp_get_attachment_url( $attach_id );

/*
*   GET FULL HTML TAG WITH 'src' (FOR IMAGE)
*/

wp_get_attachment_image($attach_id, array('300', '300'));
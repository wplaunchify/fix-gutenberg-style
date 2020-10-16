<?php
/**
 * Plugin Name:	Fix Gutenbrg Style
 * Plugin URI:	https://launchflows.com
 * Description:	Make Gutenberg Editor Look More Like Classic Editor
 * Version:		1.0
 * License:		GPL-2.0+
 * License URI:	http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: lf
 *
 */

add_action('admin_head', 'lf_fix_gutenberg_style');

function lf_fix_gutenberg_style() {
?>
  <style>
	.postbox {
	    border: 1px solid #dfdfdf!important;
	    margin: 10px 0;
	}

	.postbox-container {
	    width: 100%;
	    background: #f1f1f1;
	}

	.postbox-header {
    	border-bottom: 0;
	}

	.components-panel__body {
	    border: 1px solid #dfdfdf;
	    margin: 10px 0;
	    background: #fff;
	}

	.components-panel {
	    background: #f1f1f1;
	}

	.edit-post-meta-boxes-area .postbox .handle-order-higher, 
	.edit-post-meta-boxes-area .postbox .handle-order-lower {
	    width: 22px;
	    height: 22px;
	}

	.hndle.ui-sortable-handle {
    border-bottom: 0!important;
	}

  </style>
<?php 
}

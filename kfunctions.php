<?php
// All-Purpose Embed Shortcode
// Embed any code (almost).
// Careful of your quotation mark types.
// Won't accept the word "script."  No new lines. PHP code won't work.
// Usage: [embed code='<p>Any code goes here.</p>']
$FUNCS->register_shortcode( 'embed', 'embed_handler' );
function embed_handler( $params, $content=null ){
  global $FUNCS;

  extract( $FUNCS->get_named_vars(array( 
	 'code' => '',
  ), $params) );

   // Pass on the code to Couch for execution using the 'embed' function
  return $FUNCS->embed( $code, $is_code=1 );
}
?>
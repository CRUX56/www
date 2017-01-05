<!DOCTYPE html>

<html <?php echo language_attributes();?> >

<head>

    <?php wp_head(); ?>

    <script type='text/javascript'>
      (function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=et5k1lhqxcmj00hmkxihtg';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>

</head>

<div id="wfc-end-credits">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/ScMzIvxBSi4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>

<style type="text/css">
    #wfc-end-credits {position: absolute; top: 33%; left: 25%; display: none; z-index: 9999;}
  </style>

<body <?php body_class(mk_get_body_class(global_get_post_id())); ?> <?php echo get_schema_markup('body'); ?> data-adminbar="<?php echo is_admin_bar_showing() ?>">

	<?php

		// Hook when you need to add content right after body opening tag. to be used in child themes or customisations.

		do_action('theme_after_body_tag_start');

	?>



		<div id="mk-boxed-layout">



			<div id="mk-theme-container" <?php echo is_header_transparent('class="trans-header"'); ?>>




				<?php mk_get_header_view('styles', 'header-'.get_header_style());

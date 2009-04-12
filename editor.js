function cid_meditor() {
	jQuery("#screen-meta").hide();
	jQuery("#screen-options-link-wrap").hide();

	jQuery("#bsuite_machinetags").hide();
	jQuery("#categorydiv").hide();
	jQuery("#tagsdiv").hide();
	jQuery("#trackbacksdiv").hide();
	jQuery("#postcustom").hide();
	jQuery("#passworddiv").hide();

	jQuery("div.wrap h2:first").text("Business Information");

	jQuery("#titlediv #title").css({ marginLeft:"5px", width:"98%" });
	jQuery("#titlediv").addClass("postbox");
	jQuery("#titlediv #titlewrap").before('<h3 class="hndle"><label for="title">Business Name</label></h3>');

	jQuery("#postdivrich #editor-toolbar #media-buttons").prepend('Long Description &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;');

	jQuery("#postexcerpt").css({ display:"block"});
	jQuery("#postexcerpt h3").text("Short Description");
	jQuery("#postexcerpt").removeClass('closed');
	jQuery("#postexcerpt").insertAfter("#titlediv");

	jQuery("#scrib_meditor_div").css({ display:"block"});
	jQuery("#scrib_meditor_div h3").text("Details");
	jQuery("#scrib_meditor_div").removeClass('closed');
	jQuery("#scrib_meditor_div").insertAfter("#titlediv");

	jQuery("#bsuite_post_icon").css({ display:"block"});
	jQuery("#bsuite_post_icon h3").text("Logo or Photograph");
	jQuery("#bsuite_post_icon").removeClass('closed');
	jQuery("#bsuite_post_icon").insertAfter('#titlediv');
}
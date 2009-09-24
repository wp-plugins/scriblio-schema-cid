function cid_meditor() {
	jQuery("div.wrap h2:first").text("Organization Information");

	jQuery("#screen-meta").hide();
	jQuery("#screen-options-link-wrap").hide();

	jQuery("#bsuite_machinetags").hide();
	jQuery("#bsuite_post_icon").hide();
	jQuery("#categorydiv").hide();
	jQuery("#tagsdiv").hide();
	jQuery("#trackbacksdiv").hide();
	jQuery("#postcustom").hide();
	jQuery("#passworddiv").hide();
	jQuery("#postexcerpt").hide();
	

	jQuery("#titlediv #title").css({ marginLeft:"5px", width:"98%" });
	jQuery("#titlediv").addClass("postbox");
	jQuery("#titlediv #titlewrap").before('<h3 class="hndle"><label for="title">Organization Name</label></h3>');

	jQuery("#scrib_meditor_div").css({ display:"block" , overflow:"auto"});
	jQuery("#scrib_meditor_div h3").before('<h2>Details</h2>');
	jQuery("#scrib_meditor_div").removeClass('closed');

        jQuery("#postdivrich #editor-toolbar").before('<h2>Short Description</h2>');
	
	
	/*jQuery("#postexcerpt").css({ display:"block"});
	jQuery("#postexcerpt h3").text("Short Description");
	jQuery("#postexcerpt").removeClass('closed');
	

}
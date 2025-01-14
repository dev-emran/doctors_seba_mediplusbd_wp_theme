;(function($){
	$(document).ready(function(){
		const postType = new URLSearchParams(window.location.search).get('post_type');
		const action = new URLSearchParams(window.location.search).get('action');

		if(postType === 'slider' && action !== 'edit'){
			$('#wpbody-content').prepend(`
                <div class="notice notice-warning is-dismissible">
                    <p>আপনি যখন নতুন Slider যুক্ত করবেন তখন Slider Image size (1600 X 830) হতে হবে। 
                    তাছাড়া আপনার ডিজাইনের সমস্যা হতে পারে। ধন্যবাদ। (কমপক্ষে দুইটি Slider যুক্ত করুন। তাছাড়া Slider Section এর সমস্যা হতে পারে।)</p>
                </div>
			`);
		}

	});

})(jQuery);
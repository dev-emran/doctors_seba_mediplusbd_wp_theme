;(function ($) {
    $(document).ready(function () {

        $(document).on('click', 'button.author_image_upload_btn', function (e) {
            e.preventDefault();

            const imageUploader = wp.media({
                title: 'Upload Author Image',
                button: {
                    text: 'Select Author Image',
                },
                multiple: false,
            }).open();

            imageUploader.on('select', function () {
                const image = imageUploader.state().get('selection').first().toJSON();
                const imageUrl = image.url;

                const $inputField = $('input.widget_author_image_url');
                const $imagePreview = $('img.widget_imgae_prv');


                $inputField.val(imageUrl);
                $imagePreview.attr('src', imageUrl);
                $inputField.trigger('change');
            });
        });
    });
})(jQuery);

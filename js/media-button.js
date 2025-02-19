jQuery(function ($) {
  $(document).ready(function () {
    $('#insert-vr-media').click(open_media_window);
  });

  function open_media_window() {

    if (this.window === undefined) {
      this.window = wp.media({
        title: 'Insert a media',
        multiple: false,
        button: {text: 'Insert'}
      });

      var self = this; // Needed to retrieve our variable in the anonymous function below
      this.window.on('select', function () {
        var first = self.window.state().get('selection').first().toJSON();
        wp.media.editor.insert('[vrview]' + first.url + '[/vrview]');
      });
    }

    this.window.open();
    return false;

  }
});
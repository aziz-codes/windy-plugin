jQuery(document).ready(function () {
  jQuery("#btn-upload").on("click", function () {
    var image = wp
      .media({
        title: "Upload Image ",
        multiple: false,
      })
      .open()
      .on("select", function () {
        var uploaded_image = image.state().get("selection").first();
        var getImage = uploaded_image.toJSON().url;
        jQuery("#btn-upload").html(
          "<img src='" +
            getImage +
            "' style='height: 80px;width: 150px !important;cursor:pointer;padding:5px;'/>"
        );
        jQuery("#image_name").val(getImage);
      });
  });
});

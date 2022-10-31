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

  //function to save project

  jQuery("#frmAddProject").validate({
    submitHandler: function () {
      var postData =
        "action=project_library&params=save_project&" +
        jQuery("#frmAddProject").serialize();
      jQuery.post(ajaxurl, postData, function (response) {
        var data = jQuery.parseJSON(response);
        if (data.status == 1) {
          alert("data saved");
        } else {
          console.log("error occured");
        }
      });
      console.log(postData);
    },
  });
});

tinymce.init({
  selector: "#content_area",
  branding: false,
  promotion: false,
  plugins: [
    // Core editing features
    "image link lists code",
  ],

  height: "100vh",
  width: "70vw",
  toolbar:
    "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat",
  // image upload
  images_upload_url: "image_upload.php",
  automatic_uploads: true,
  images_reuse_filename: true,
});

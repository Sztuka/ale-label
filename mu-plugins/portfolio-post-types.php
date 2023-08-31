<?php 
function ale_label_post_types() {
  register_post_type("artist", array(
    "supports" => array("title", "editor", "excerpt", "thumbnail"),
    "rewrite" => array("slug" => "artists"),
    "has_archive" => true,
    "public" => true,
    "show_in_rest" => true,
    "labels" => array(
      "name" => "Artyści",
      "add_new_item" => "Add Artist",
      "edit_item" => "Edit Artist",
      "all_items" => "All Artists",
      "singular_name" => "Artist"
    ),
    "menu_icon" => "dashicons-format-audio"
  ));
}


add_action( "init", "ale_label_post_types");

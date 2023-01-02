<?php
/**
 * Registers options page menu item and form.
 */
add_action("cmb2_admin_init", "pedro_register_theme_options_metabox");

function pedro_register_theme_options_metabox()
{
    $cmb = new_cmb2_box([
        "id" => "pedro_option_metabox",
        "title" => esc_html__("Site Options", "pedro"),
        "object_types" => ["options-page"],
        "option_key" => "pedro_options",
    ]);

    // logo
    $web_general_group = $cmb->add_field([
        "id" => "web_general_group",
        "type" => "group",
        "repeatable" => false,
        "options" => [
            "group_title" => __("logo", "cmb2"),
            "closed" => false,
        ],
    ]);

    $cmb->add_group_field($web_general_group, [
        "name" => "Entry Title",
        "id" => "title",
        "type" => "file",
        "options" => [
            "url" => false,
        ],
    ]);

    //slider
    $web_slider_group = $cmb->add_field([
        "id" => "web_slider_group",
        "type" => "group",
        "repeatable" => "true",
        "options" => [
            "group_title" => __("slider", "cmb2"),
            "closed" => false,
        ],
    ]);

    $cmb->add_group_field($web_slider_group, [
        "name" => "slider-photo",
        "id" => "thumbnail",
        "type" => "file",
    ]);
    $cmb->add_group_field($web_slider_group, [
        "name" => "title",
        "id" => "title",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_slider_group, [
        "name" => "text",
        "id" => "text",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_slider_group, [
        "name" => "news",
        "id" => "news",
        "type" => "text",
    ]);
    //welcome
    $web_welcome_group = $cmb->add_field([
        "id" => "web_welcome_group",
        "type" => "group",
        "repeatable" => false,
        "options" => [
            "group_title" => __("welcome", "cmb2"),
            "closed" => false,
        ],
    ]);

    $cmb->add_group_field($web_welcome_group, [
        "name" => "welcome-title",
        "id" => "welcome",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_welcome_group, [
        "name" => "location-title",
        "id" => "barbershop",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_welcome_group, [
        "name" => "context",
        "id" => "context",
        "type" => "text",
    ]);

    //gallery
    $web_gallery_group = $cmb->add_field([
        "id" => "web_gallery_group",
        "type" => "group",
        "repeatable" => "true",
        "options" => [
            "group_title" => __("gallery", "cmb2"),
            "closed" => false,
        ],
    ]);

    $cmb->add_group_field($web_gallery_group, [
        "name" => "photo-gallery",
        "id" => "thumbnail",
        "type" => "file",
    ]);
    $cmb->add_group_field($web_gallery_group, [
        "name" => "alt",
        "id" => "alt",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_gallery_group, [
        "name" => "video",
        "id" => "video",
        "type" => "file",
    ]);
    //more
    $web_more_group = $cmb->add_field([
        "id" => "web_more_group",
        "type" => "group",
        "repeatable" => false,
        "options" => [
            "group_title" => __("more", "cmb2"),
            "closed" => false,
        ],
    ]);
    $cmb->add_group_field($web_more_group, [
        "name" => "welcome-title",
        "id" => "welcome",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_more_group, [
        "name" => "location-title",
        "id" => "barbershop",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_more_group, [
        "name" => "context",
        "id" => "context",
        "type" => "text",
    ]);
    //services
    $web_services_group = $cmb->add_field([
        "id" => "web_services_group",
        "type" => "group",
        "repeatable" => "true",
        "options" => [
            "group_title" => __("services", "cmb2"),
            "closed" => false,
        ],
    ]);

    $cmb->add_group_field($web_services_group, [
        "name" => "photo",
        "id" => "thumbnail",
        "type" => "file",
    ]);
    $cmb->add_group_field($web_services_group, [
        "name" => "title",
        "id" => "title",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_services_group, [
        "name" => "context",
        "id" => "context",
        "type" => "text",
    ]);

    //contact-us
    $web_contactus_group = $cmb->add_field([
        "id" => "web_contactus_group",
        "type" => "group",
        "repeatable" => false,
        "options" => [
            "group_title" => __("contact-us", "cmb2"),
            "closed" => false,
        ],
    ]);

    $cmb->add_group_field($web_contactus_group, [
        "name" => "title",
        "id" => "title",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_contactus_group, [
        "name" => "context",
        "id" => "context",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_contactus_group, [
        "name" => "form-shortcode",
        "id" => "form",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_contactus_group, [
        "name" => "background-photo",
        "id" => "thumbnail",
        "type" => "file",
    ]);

    //Business-Hours
    $web_hours_group = $cmb->add_field([
        "id" => "web_hours_group",
        "type" => "group",
        "repeatable" => false,
        "options" => [
            "group_title" => __("hours", "cmb2"),
            "closed" => false,
        ],
    ]);
    $cmb->add_group_field($web_hours_group, [
        "name" => "monday",
        "id" => "monday",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_hours_group, [
        "name" => "tuesday",
        "id" => "tuesday",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_hours_group, [
        "name" => "wednesday",
        "id" => "wednesday",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_hours_group, [
        "name" => "thursday",
        "id" => "thursday",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_hours_group, [
        "name" => "friday",
        "id" => "friday",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_hours_group, [
        "name" => "saturday",
        "id" => "saturday",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_hours_group, [
        "name" => "sunday",
        "id" => "sunday",
        "type" => "text",
    ]);
    //social-networks
    $web_social_group = $cmb->add_field([
        "id" => "web_social_group",
        "type" => "group",
        "repeatable" => "true",
        "options" => [
            "group_title" => __("social-network", "cmb2"),
            "closed" => false,
        ],
    ]);

    $cmb->add_group_field($web_social_group, [
        "name" => "social-app-name",
        "id" => "icon",
        "type" => "text",
    ]);
    $cmb->add_group_field($web_social_group, [
        "name" => "link",
        "id" => "link",
        "type" => "text",
    ]);
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function pedro_get_option($key = "", $default = false)
{
    if (function_exists("cmb2_get_option")) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option("pedro_options", $key, $default);
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option("pedro_options", $default);

    $val = $default;

    if ("all" == $key) {
        $val = $opts;
    } elseif (
        is_array($opts) &&
        array_key_exists($key, $opts) &&
        false !== $opts[$key]
    ) {
        $val = $opts[$key];
    }

    return $val;
}

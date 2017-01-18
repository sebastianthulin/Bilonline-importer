<?php

namespace HbgEventImporter;

class Event
{
    public static function initPostType()
    {
        $icon = 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/PjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA0NDcuNjQ1IDQ0Ny42NDUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ0Ny42NDUgNDQ3LjY0NTsiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGQ9Ik00NDcuNjM5LDI0NC40MDJjMC04LjgwNS0xLjk4OC0xNy4yMTUtNS41NzgtMjQuOTA5Yy0wLjM3LTEuOTU2LTAuNzkzLTMuOTA5LTEuMzIyLTUuODlsLTM4Ljg4NC05Ni4zNjVsLTAuMjYzLTAuODY3ICAgYy0xMy42MDUtNDAuNTA5LTMyLjk2My03OC4wMDEtODIuMDQ5LTc4LjAwMUgxMzEuODY4Yy01MC4yOTYsMC02OC4wNjksMzguNDIxLTgxLjk3Miw3Ny43NzZsLTQwLjY3Myw5Ni42ICAgQzMuMzQzLDIyMi4xNjcsMCwyMzIuOTQ0LDAsMjQ0LjQwMnYyOS45ODZjMCw0LjYzNiwwLjU0OCw5LjE3MSwxLjU5LDEzLjUzOUMwLjU3NywyOTAuNTY2LDAsMjkzLjQxLDAsMjk2LjQwOHY4OS4xODUgICBjMCwxMy4wNzgsMTAuNjAyLDIzLjY4MiwyMy42OCwyMy42ODJoNDkuMTRjMTMuMDcxLDAsMjMuNjczLTEwLjYwNCwyMy42NzMtMjMuNjgydi00NC41OTloMjU3LjQ2djQ0LjU5OSAgIGMwLDEzLjA3OCwxMC42MDQsMjMuNjgyLDIzLjY4MywyMy42ODJoNDYuMzI2YzEzLjA4MywwLDIzLjY4My0xMC42MDQsMjMuNjgzLTIzLjY4MnYtODkuMTk1YzAtMi45ODctMC41ODMtNS44NDQtMS41ODgtOC40NzQgICBjMS4wMzgtNC4zNzUsMS41ODgtOC45MDUsMS41ODgtMTMuNTR2LTI5Ljk4MUg0NDcuNjM5eiBNNzguNzU0LDEyNS44MjFjMTUuNDgzLTQzLjY4MywyNy45MzQtNTcuMDE4LDUzLjExNC01Ny4wMThoMTg3LjY2NCAgIGMyNC45OTUsMCwzOC45MTMsMTQuODczLDUzLjA1Niw1Ni44M2wyOC4zNzUsNTcuNTAyYy05LjI2NS0zLjQzMS0xOS40NjEtNS4zMzUtMzAuMTczLTUuMzM1SDc2Ljg0OSAgIGMtOS42NDUsMC0xOC44NjIsMS41NTEtMjcuMzY2LDQuMzU4TDc4Ljc1NCwxMjUuODIxeiBNMTAzLjEyOSwyODUuNzc2SDUxLjI4MWMtOS4zMzUsMC0xNi45MDYtNy41NzgtMTYuOTA2LTE2LjkxMiAgIGMwLTkuMzM3LDcuNTcxLTE2LjkxLDE2LjkwNi0xNi45MWg1MS44NDhjOS4zMzksMCwxNi45MSw3LjU3MywxNi45MSwxNi45MUMxMjAuMDM5LDI3OC4xOTgsMTEyLjQ2MywyODUuNzc2LDEwMy4xMjksMjg1Ljc3NnogICAgTTI4Ni4yODQsMjgyLjM4OWgtMTIwLjZjLTUuOTEzLDAtMTAuNzA0LTQuNzk0LTEwLjcwNC0xMC43MDRjMC01LjkyMSw0Ljc5MS0xMC43MTMsMTAuNzA0LTEwLjcxM2gxMjAuNiAgIGM1LjkyLDAsMTAuNzEsNC43OTIsMTAuNzEsMTAuNzEzQzI5Ni45OTQsMjc3LjU5NSwyOTIuMjA0LDI4Mi4zODksMjg2LjI4NCwyODIuMzg5eiBNMzk1LjA1MSwyODUuNzc2aC01MS44NDYgICBjLTkuMzQzLDAtMTYuOTEtNy41NzgtMTYuOTEtMTYuOTEyYzAtOS4zMzcsNy41NzMtMTYuOTEsMTYuOTEtMTYuOTFoNTEuODQ2YzkuMzQzLDAsMTYuOTE2LDcuNTczLDE2LjkxNiwxNi45MSAgIEM0MTEuOTY3LDI3OC4xOTgsNDA0LjM5NCwyODUuNzc2LDM5NS4wNTEsMjg1Ljc3NnoiIGZpbGw9IiNGRkZGRkYiLz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PC9zdmc+';

        $labels = array(
            'name'               => _x('Objekt', 'post type name'),
            'singular_name'      => _x('Objekt', 'post type singular name'),
            'menu_name'          => __('Objekt'),
            'add_new'            => __('Lägg till nytt objekt'),
            'add_new_item'       => __('Lägg till objekt'),
            'edit_item'          => __('Redigera objekt'),
            'new_item'           => __('Nytt objekt'),
            'all_items'          => __('Alla objekt'),
            'view_item'          => __('Visa objekt'),
            'search_items'       => __('Sök objekt'),
            'not_found'          => __('Inga objekt att visa'),
            'not_found_in_trash' => __('Inga objekt i papperskorgen')
        );

        $args = array(
            'labels'               => $labels,
            'description'          => 'Objects listed from bilonline.',
            'menu_icon'            => $icon,
            'public'               => true,
            'publicly_queriable'   => true,
            'show_ui'              => true,
            'show_in_nav_menus'    => true,
            'has_archive'          => true,
            'rewrite'              => array(
                'slug'       => __('bilar', 'bilonline-importer'),
                'with_front' => false
            ),
            'hierarchical'         => false,
            'exclude_from_search'  => false,
            'taxonomies' => array('event-types'),
            'supports'             => array('title', 'revisions', 'editor', 'thumbnail')
        );

        register_post_type(__('bilar', 'bilonline-importer'), $args);

        // Daily cron
        if (!wp_next_scheduled('import_events_daily')) {
            wp_schedule_event(time(), 'hourly', 'import_events_hourly');
        }

        add_action('manage_posts_extra_tablenav', function ($which) {
            global $current_screen;

            if ($current_screen->id != 'edit-event' || $which != 'top') {
                return;
            }

            echo '<div class="alignleft actions">';
                echo '<a href="' . admin_url('options.php?page=import-events')
                        . '" class="button-primary" id="post-query-submit">Import now</a>';
            echo '</div>';
        });

        // Setup table columns
        // Columns
        add_filter('manage_edit-event_columns', '\HbgEventImporter\Event::defineListColumns');

        // Sorting
        add_filter('manage_edit-event_sortable_columns', '\HbgEventImporter\Event::sortListColumns');

        // Column content
        add_action('manage_event_posts_custom_column', '\HbgEventImporter\Event::listColumnContent', 10, 2);

        // Register taxonomy
        self::registerTaxonomy();
    }

    /**
     * Create a taxonomy
     *
     * @uses  Inserts new taxonomy object into the list
     * @uses  Adds query vars
     *
     * @param string  Name of taxonomy object
     * @param array|string  Name of the object type for the taxonomy object.
     * @param array|string  Taxonomy arguments
     * @return null|WP_Error WP_Error if errors, otherwise null.
     */
    public static function registerTaxonomy()
    {
        $labels = array(
            'name'                  => _x('Event categories', 'Taxonomy plural name', 'hbg-event-importer'),
            'singular_name'         => _x('Event category', 'Taxonomy singular name', 'hbg-event-importer'),
            'search_items'          => __('Search Event Categories', 'hbg-event-importer'),
            'popular_items'         => __('Popular Event Categories', 'hbg-event-importer'),
            'all_items'             => __('All Event Categories', 'hbg-event-importer'),
            'parent_item'           => __('Parent Event Category', 'hbg-event-importer'),
            'parent_item_colon'     => __('Parent Event Category', 'hbg-event-importer'),
            'edit_item'             => __('Edit Event Category', 'hbg-event-importer'),
            'update_item'           => __('Update Event Category', 'hbg-event-importer'),
            'add_new_item'          => __('Add New Event Category', 'hbg-event-importer'),
            'new_item_name'         => __('New Event Category', 'hbg-event-importer'),
            'add_or_remove_items'   => __('Add or remove Event Categories', 'hbg-event-importer'),
            'choose_from_most_used' => __('Choose from most used Event Categories', 'hbg-event-importer'),
            'menu_name'             => __('Event Category', 'hbg-event-importer'),
        );

        $args = array(
            'labels'                => $labels,
            'public'                => true,
            'show_in_nav_menus'     => true,
            'show_admin_column'     => false,
            'hierarchical'          => false,
            'show_tagcloud'         => true,
            'show_ui'               => true,
            'query_var'             => true,
            'rewrite'               => true
        );

        register_taxonomy('event-types', array('event'), $args);
    }

    /**
     * Defines list columns
     * @param  array $columns Original columns
     * @return array          Custom columns
     */
    public static function defineListColumns($columns)
    {
        $columns = array(
            'cb'               => '<input type="checkbox">',
            'title'            => __('Event'),
            'event-start-date' => __('Start date'),
            'event-end-date'   => __('End date'),
            'date'             => __('Date created')
        );

        return $columns;
    }

    /**
     * Define sortable columns
     * @param  array $columns Original columns
     * @return array          Custum columns
     */
    public static function sortListColumns($columns)
    {
        $columns['event-start-date'] = 'event-start-date';
        $columns['event-end-date'] = 'event-end-date';

        return $columns;
    }

    /**
     * Set list column content
     * @param  string  $column Column id
     * @param  integer $postId Column post id
     * @return void
     */
    public static function listColumnContent($column, $postId)
    {
        switch ($column) {
            case 'event-start-date':
                echo get_field('event-date-start', $postId) ? date('Y-m-d \k\l\. H:i', strtotime(get_field('event-date-start', $postId))) : '';
                break;

            case 'event-end-date':
                echo get_field('event-date-end', $postId) ? date('Y-m-d \k\l\. H:i', strtotime(get_field('event-date-end', $postId))) : '';
                break;
        }
    }

    /**
     * Get poi:s
     * @param  integer $count     Number of POI to get
     * @param  array   $metaQuery Optional meta query array
     * @return object             Object with POI posts
     */
    public static function get($count = 10, $metaQuery = null, $postStatus = array())
    {
        $args = array(
            'posts_per_page' => $count,
            'post_type'      => 'event',
            'orderby'        => 'date',
            'order'          => 'DESC'
        );

        if ($postStatus) {
            $args['post_status'] = $postStatus;
        }

        if (is_array($metaQuery)) {
            $args['meta_query'] = $metaQuery;
        }

        $posts = get_posts($args);

        if ($count == 1 && isset($posts[0])) {
            $posts = $posts[0];
        }

        return $posts;
    }

    /**
     * Adds an event
     *
     * Data should include the following keys
     * - id (unique event id)
     * - date_start (unix timestamp)
     * - date_end (unix timestamp)
     * - title (event title)
     * - description (description text)
     * - categories (array of categories)
     * - location (name of city)
     * - address
     * - image_url
     *
     * @param array $data Event data
     */
    public static function add($data = array())
    {
        $requiredKeysExists = \HbgEventImporter\Helper\Arr::arrayKeysExist(
            $data,
            'id',
            'date_start',
            'date_end',
            'title',
            'description',
            'categories',
            'location',
            'address',
            'image_url',
            'ticket_link'
        );

        if (!$requiredKeysExists) {
            return false;
        }

        // Check if event uid already exists
        $postId = Event::get(1, array(
            array(
                'key' => 'event-uid',
                'value' => $data['id'],
                'compare' => '='
            )
        ), array('publish', 'draft', 'pending'));
        $postId = isset($postId->ID) ? $postId->ID : null;

        // Update or create event
        if ($postId !== null) {
            if (get_field('event-sync', $postId) !== true && get_field('event-sync', $postId) != '1') {
                return;
            }

            wp_update_post(array(
                'ID'           => $postId,
                'post_title'   => $data['title'],
                'post_content' => $data['description']
            ));
        } else {
            $postId = wp_insert_post(array(
                'post_title'   => $data['title'],
                'post_content' => $data['description'],
                'post_status'  => get_field('xcap_post_status', 'option') ? get_field('xcap_post_status', 'option') : 'publish',
                'post_type'    => 'event'
            ));
        }

        $data['categories'] = array_map('trim', $data['categories']);
        $data['categories'] = array_map('ucwords', $data['categories']);
        wp_set_object_terms($postId, $data['categories'], 'event-types', true);

        self::addPostMeta($postId, $data);
        self::saveImageFromUrl($postId, $data['image_url']);
    }

    /**
     * Set a event post meta fields
     * @param   integer $postId The post's id
     * @param   object  $data   The cbis data
     * @return  void
     */
    private static function addPostMeta($postId, $data)
    {
        update_post_meta($postId, 'event-sync', true);
        update_post_meta($postId, 'event-uid', $data['id']);
        update_post_meta($postId, 'event-date-start', date('Y-m-d H:i', strtotime($data['date_start'])));
        update_post_meta($postId, 'event-date-end', date('Y-m-d H:i', strtotime($data['date_end'])));
        update_post_meta($postId, 'event-location', $data['location']);
        update_post_meta($postId, 'event-address', $data['address']);
        update_post_meta($postId, 'event-image_url', $data['image_url']);

        if (!self::isUrl($data['ticket_link'])) {
            $data['ticket_link'] = '';
        }

        update_post_meta($postId, 'event-ticket_url', $data['ticket_link']);
    }

    private static function saveImageFromUrl($postId, $url)
    {
        if (!isset($url) || strlen($url) === 0 || !self::isUrl($url)) {
            return false;
        }

        // Upload paths
        $uploadDir = wp_upload_dir();
        $uploadDirUrl = $uploadDir['baseurl'];
        $uploadDir = $uploadDir['basedir'];
        $uploadDir = $uploadDir . '/events';

        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0776)) {
                return new WP_Error('event', __('Could not create folder "' . $uploadDir . '", please go ahead and create it manually and rerun the import.'));
            }
        }

        $filename = basename($url);

        // Bail if image already exists in library
        if ($attachmentId = self::attatchmentExists($uploadDir . '/' . basename($filename))) {
            set_post_thumbnail($postId, $attachmentId);
            return;
        }

        // Save file to server
        $contents = file_get_contents($url);
        $save = fopen($uploadDir . '/' . $filename, 'w');
        fwrite($save, $contents);
        fclose($save);

        // Detect filetype
        $filetype = wp_check_filetype($filename, null);

        // Insert the file to media library
        $attachmentId = wp_insert_attachment(array(
            'guid' => $uploadDir . '/' . basename($filename),
            'post_mime_type' => $filetype['type'],
            'post_title' => $filename,
            'post_content' => '',
            'post_status' => 'inherit',
            'post_parent' => $postId
        ), $uploadDir . '/' . $filename, $postId);

        // Generate attachment meta
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attachData = wp_generate_attachment_metadata($attachmentId, $uploadDir . '/' . $filename);
        wp_update_attachment_metadata($attachmentId, $attachData);

        set_post_thumbnail($postId, $attachmentId);
    }

    /**
     * Validates url
     * @param  string  $url Url to validate
     * @return boolean
     */
    private static function isUrl($url)
    {
        if (is_string($url) && preg_match('/^(?:[;\/?:@&=+$,]|(?:[^\W_]|[-_.!~*\()\[\] ])|(?:%[\da-fA-F]{2}))*$/', $url)) {
            return true;
        }

        return false;
    }

    /**
     * Checks if a attatchment src already exists in media library
     * @param  string $src Media url
     * @return mixed
     */
    private static function attatchmentExists($src)
    {
        global $wpdb;
        $query = "SELECT ID FROM {$wpdb->posts} WHERE guid = '$src'";
        $id = $wpdb->get_var($query);

        if (!empty($id) && $id > 0) {
            return $id;
        }

        return false;
    }
}

<form role="search" method="get" class="form-inline d-none d-md-block" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="form-control mr-2" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <input type="submit" class="btn btn-secondary" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
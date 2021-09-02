<form action="<?php echo esc_url(home_url('/')); ?>" method="GET">
    <div class="form-group">
        <label for="search" class="h4 font-italic">Search</label>
        <input type="text" id="search" name="s" class="form-control" value="<?php the_search_query(); ?>">
    </div>
</form>
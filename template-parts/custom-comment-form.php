<?php
/**
 * Template part for displayngn our custom comment form
 */
?>

<?php
/* Add and costomize Comment form */
    $args = array(
        'title_reply' => '<div class="py-3">Reply Or Comment </div>',
        'comment_field' => '
            <div class="form-group" >
            <lable for="comment">Comments *</lable>
            <br>
            <textarea id="comment" name="comment" class="form-control"></textarea>
            </div>
        ',
        'submit_button' => '
            <button type="submit" class="btn btn-primary">Submit</button>
        ',
        'fields' => apply_filters('comment_form_default_fields', array(
            'author' => '
                 <div class="form-group">
                 <label for="author">Your Name *</label>
                 <input type="text" id="author" name="author" class="form-control"/>
                 </div>
            ',
            'email' => '
                 <div class="form-group">
                 <label for="email">Your Email *</label>
                 <input type="email" id="email" name="email" class="form-control"/>
                 </div>
            '
        ))
    );
 comment_form($args);
?>
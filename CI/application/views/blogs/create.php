<h2><strong><?php echo $title ?></strong></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('blogs/create') ?>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="input" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <input type="input" class="form-control" name="text" placeholder="Text">
    </div>

    <input type="submit" name="submit" class="btn btn-danger" value="Create Blog" />
</form>

<?php if(!empty($article->errors)): ?>
    <ul>
        <?php foreach ($article->errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>    
    </ul>

<?php endif; ?>

<form method="post">

    <div class="mb-3">
         <label for="title" class="form-label">Title</label>
         <input name="title" id="title" placeholder="Article title" class="form-control" value=<?= htmlspecialchars($article->title);?> >
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" cols="40" rows="4" placeholder="Article content" class="form-control"><?= htmlspecialchars($article->content);?></textarea>
    </div>

    <div class="mb-3">
        <label for="published_at" class="form-label">Publication date and time</label>
        <input type="datetime-local" name="published_at" id="published_at" value="<?= htmlspecialchars($article->published_at);?>" class="form-control">
    </div>
   
    <button class="btn btn-primary">Save</button>
   

</form>

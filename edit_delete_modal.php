<!-- Edit Modal -->
<div class="modal fade" id="edit_<?php echo $row->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Movie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="edit.php">
					<div class="mb-3 d-none">
                        <label for="edit_title" class="form-label">ID:</label>
                        <input type="text" class="form-control" id="title" name="id" value="<?php echo $row->id; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="edit_title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row->title; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="edit_poster" class="form-label">Poster URL:</label>
                        <input type="text" class="form-control" id="poster" name="poster" value="<?php echo $row->poster; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="edit_year" class="form-label">Release Date:</label>
                        <input type="text" class="form-control datepicker" id="year" name="year" value="<?php echo $row->year; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="edit_year" class="form-label">Genre:</label>

                            <?php

                                    $selectedRating = (string) $row->rating; // Convert SimpleXMLElement to string
                                    $selectedGenre = (string) $row->genre; 
                                    
                                ?>
                        <select class="form-select" aria-label="Default select example" name="genre">
                            <option value="Action" <?php echo ($selectedGenre === 'Action') ? 'selected' : ''; ?>>Action</option>
                            <option value="Adventure" <?php echo ($selectedGenre === 'Adventure') ? 'selected' : ''; ?>>Adventure</option>
                            <option value="Comedy" <?php echo ($selectedGenre === 'Comedy') ? 'selected' : ''; ?>>Comedy</option>
                            <option value="Drama" <?php echo ($selectedGenre === 'Drama') ? 'selected' : ''; ?>>Drama</option>
                            <option value="Fantasy" <?php echo ($selectedGenre === 'Fantasy') ? 'selected' : ''; ?>>Fantasy</option>
                            <option value="Horror" <?php echo ($selectedGenre === 'Horror') ? 'selected' : ''; ?>>Horror</option>
                            <option value="Mystery" <?php echo ($selectedGenre === 'Mystery') ? 'selected' : ''; ?>>Mystery</option>
                            <option value="Romance" <?php echo ($selectedGenre === 'Romance') ? 'selected' : ''; ?>>Romance</option>
                            <option value="Sci-Fi" <?php echo ($selectedGenre === 'Sci-Fi') ? 'selected' : ''; ?>>Sci-Fi</option>
                            <option value="Thriller" <?php echo ($selectedGenre === 'Thriller') ? 'selected' : ''; ?>>Thriller</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating:</label>
                        <select class="form-select" aria-label="Default select example" name="rating">
                            <option value="★☆☆☆☆" <?php echo ($selectedRating === '★☆☆☆☆') ? 'selected' : ''; ?>>★☆☆☆☆</option>
                            <option value="★★☆☆☆" <?php echo ($selectedRating === '★★☆☆☆') ? 'selected' : ''; ?>>★★☆☆☆</option>
                            <option value="★★★☆☆" <?php echo ($selectedRating === '★★★☆☆') ? 'selected' : ''; ?>>★★★☆☆</option>
                            <option value="★★★★☆" <?php echo ($selectedRating === '★★★★☆') ? 'selected' : ''; ?>>★★★★☆</option>
                            <option value="★★★★★" <?php echo ($selectedRating === '★★★★★') ? 'selected' : ''; ?>>★★★★★</option>
                        </select>
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x"></i> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><i class="bi bi-floppy2-fill"></i> Update</button>
                </form>
                
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete_<?php echo $row->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center"><?php echo $row->title; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger">Yes</a>
            </div>
        </div>
    </div>
</div>
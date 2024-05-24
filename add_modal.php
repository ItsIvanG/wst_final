<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="add.php">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster URL:</label>
                        <input type="text" class="form-control" id="poster" name="poster">
                    </div>
                    <div class="mb-3">
                        <label for="edit_year" class="form-label">Release Date:</label>
                        <input type="text" class="form-control datepicker" id="year" name="year" >
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre:</label>
                        <select class="form-select" aria-label="Default select example" name="genre">
                            <option value="Action">Action</option>
                            <option value="Adventure">Adventure</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Drama">Drama</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Horror">Horror</option>
                            <option value="Mystery">Mystery</option>
                            <option value="Romance">Romance</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="Thriller">Thriller</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating:</label>
                        <!-- <input type="text" class="form-control" id="rating" name="rating"> -->
                        <select class="form-select" aria-label="Default select example" name="rating">
                            <!-- <option selected>Open this select menu</option> -->
                            <option value="★☆☆☆☆">★☆☆☆☆</option>
                            <option value="★★☆☆☆">★★☆☆☆</option>
                            <option value="★★★☆☆">★★★☆☆</option>
                            <option value="★★★★☆">★★★★☆</option>
                            <option value="★★★★★">★★★★★</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x"></i> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><i class="bi bi-floppy2-fill"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

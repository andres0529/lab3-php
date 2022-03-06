<div id="pop-up-edit" class="d-flex">
        <form method="POST" action="./includes/edit-db.php">
            <h2 class="text-center mb-5">Edit</h2>
            <div>
                <h5 name='clubId'> </h5>
                <input type="text" name="clubId" id="clubId">
            </div>
            <div class="input-group input-group-sm mb-3 editName">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Club Name</span>
                </div>
                <input name='clubName' id="clubName" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3 editGround">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Ground</span>
                </div>
                <input name="ground" id="ground" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary cancelEdit">Cancel</button>
                <button type="submit" class="btn btn-primary saveEdit">Save</button>
            </div>
        </form>
    </div>
    
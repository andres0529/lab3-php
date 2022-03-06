<div id="pop-up-add" class="d-flex">
    <form method="POST"  action="./includes/add-db.php">
        <h2 class="text-center">Add new Club</h2>
        <div class="input-group input-group-sm mb-3 mt-5 editName">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Club Name</span>
            </div>
            <input name="clubName" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group input-group-sm mb-3 editGround">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Ground</span>
            </div>
            <input name="ground" required type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary cancelAdd">Cancel</button>
            <button type="submit" class="btn btn-primary saveAdd">Save</button>
        </div>
    </form>
</div>
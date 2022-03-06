<div id="pop-up-delete" class="d-flex">
    <form method="POST" action="./includes/delete-db.php">
        <h2 class="text-center mb-5">Delete</h2>
        <h5>Do you want to delete this record?</h5>
        <input  type="text" name="clubId" id="clubId">
        <div>
            <h6 id="deleteId"></h6>
            <h6 id="deleteName"></h6>
            <h6 id="deleteGround"></h6>
        </div>
        <div class="text-center mt-5">
            <button type="button" class="btn btn-primary cancelDelete">Cancel</button>
            <button type="submit" class="btn btn-primary">Yes</button>
        </div>

        <input  type="text" name="otro" id="clubId" value="123">
    </form>
</div>
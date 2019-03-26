<div id='mymodal' class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning ">
                <h4 class="modal-title text-white">
                    Leave A Message
                </h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <form id='message' action="#" method="post">            
            <div class="modal-body bg-light">
                <div class="form-group">
                    <label for="email" class='lead'>Email address:</label>
                    <input name='email' type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="comment" class='lead'>Message:</label>
                    <textarea name='comment' class="form-control" rows="5" id="messages"
                    placeholder='feel free to give your thoughts about my portfolio.I would be honored if you give me some advice'></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class='btn btn-outline-primary'>Submit</button>
                </div>
                </div>
                <div class="modal-footer d-block">
                    <h3 class='text-info text-center' id='response'></h3>
                    <!-- <button type='button' class='btn' data-dismiss='modal'>Close</button> -->
                </div>
                </div>
            </form>
    </div>
</div>

<div class="modal fade" id="message">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Message</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="action.php">
                    <input type="hidden" class="catid" name="id">
                    <div class="form-group">
                        <label for="smail" class="col-sm-3 control-label">Sender_Email</label>

                        <div class="col-sm-9">
                            <input type="email" id="ssemail" class="form-control" style='border: 2px solid black;' id="semail" name="semail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="remail" class="col-sm-3 control-label">Reciever_Email</label>

                        <div class="col-sm-9">
                            <input type="email"  id="rsemail" class="form-control" style='border: 2px solid black' id="remail" name="remail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject" id="rssubject" class="col-sm-3 control-label">Subject</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" style='border: 2px solid black' id="subject" name="subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message"  class="col-sm-3 control-label">Message</label>

                        <div class="col-sm-9">
                            <input type="message" id="rsmessage" class="form-control" style='border: 2px solid black' id="message" name="message">
                        </div>
                    </div>
                    <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" id='send' name="edit"><i class="bi bi-send"></i>Send</button>
                </form>
            </div>
            </div>
           
        </div>
    </div>
</div>

 <div class="card">
    <div class="white-box">
            <figure class="img-holder">
                        <img class="img-xs" width="100%" alt="user" src="portal/uphoto/<?php echo ucfirst(userName($uid, 'photo')) ?>"> 
                        <button class="btn btn-secondary blog-post-date"  data-toggle="modal" data-target="#updatepicture"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </figure>
        <div class="user-btm-box">
            <!-- .row -->
            <div class="row text-center m-t-10">
                <div class="col-md-6 col-6 b-r"><strong>Name</strong>
                    <p><?php echo ucfirst(userName($uid)) ?></p>
                </div>
                <div class="col-md-6 col-6 "><strong>Category</strong>
                    <p><?php echo ucfirst($pro->category(userName($uid, 'category'))) ?></p>
                </div>
            </div>
            <!-- /.row -->
            <hr>
            <!-- .row -->
            <div class="row text-center m-t-10">
                <div class="col-md-6 col-6 b-r"><strong>Email</strong>
                    <p><?php echo userName($uid, 'email') ?></p>
                </div>
                <div class="col-md-6 col-6 "><strong>Phone</strong>
                    <p><?php echo userName($uid, 'phone') ?></p>
                </div>
            </div>
            <!-- /.row -->
            <hr>
            <!-- .row -->
            <div class="row text-center m-t-10">
                <div class="col-md-12"><strong>Address</strong>
                    <p><?php echo userName($uid, 'address') ?></p>
                </div>
            </div>
            <hr>
            <!-- /.row -->
        </div>
    </div>
</div>
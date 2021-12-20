<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="">Create Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body" style="padding: 0px;">
        <form method="post" enctype="multipart/form-data">
            <textarea name="note" class="form-control"></textarea>

            <div class="modal-footer" style="padding: 0px;">
            <input type="file" name="photo" class="form-control" multiple  style="border-radius:50px;"/>
            <button class="btn btn-secondary" name="postStatus"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>   
            </div>
        </form>
      </div>
      <div class="modal-footer">
            
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="updatepicture" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Update Profile Picture</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                         <input type="file" name="photo" class="form-control" style="height: 150px;" /><br>
                         <button class="btn btn-block btn-info" name="updatePicture">Update Picture</button> 
                        </div></div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Login To Continue</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   <h4 class="text-center" style="padding: 10px;">Login to start your session</h4>
                  <form class="row contact_form" method="post">
                                      <div class="col-md-12 form-group p_star">
                                          <input type="text" class="form-control" id="name" name="email" placeholder="Username">
                                      </div>
                                      <div class="col-md-12 form-group p_star">
                                          <input type="password" name="password"  class="form-control" id="password" placeholder="Password">
                                      </div>
                                      <div class="col-md-12 form-group">
                                          <div class="creat_account d-flex align-items-center">
                                              <ul class="no-ul-list mb-2">
                          <li>
                            <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
                            <label for="checkbox-1" class="checkbox-custom-label">Remember me</label>
                          </li>
                        </ul>
                                          </div>
                                          <button name="LoginUsers" type="submit" value="submit" class="btn btn-info btn-block"> log in</button>
                                              <a class="lost_pass" href="forgotpassword.php">forget password?</a>
                                      </div>
                                  
                                 </form>
                                   <div class="form-group m-b-0 m-t-10 ">
                                <div class="col-sm-12 text-center ">
                                    Not yet Signed up? <a data-dismiss="modal" href="signup.php" class="text-primary m-l-5 "  data-toggle="modal" data-target="#signup"><b>Sign Up</b></a>
                                </div>
                            </div>
                </div>
            </div>
        </div>
      </div>
    
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Signup To continue</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
      <div class="modal-body">
         <div class="col-lg-12 col-md-12">
                        <h3 class="mb-30 text-center m-3">SignUp To <b>LOTH</b></h3>
                        <form method="post">
                            <div class="form-group row ">
                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="text" required placeholder="Firstname" name="firstname" style="border-color: #CCC;">
                                </div>

                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="text" name="lastname" required placeholder="Lastname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="text" required placeholder="Phone Number" name="phone">
                                </div>
                                <div class="col-md-6 ">
                                    <select class="form-control custom-select" name="age">
                                        <option selected disabled>Select Age Range...</option>
                                        <option value="1">Teenager (13-19) years</option>
                                        <option value="2">Youth (20-35) years</option>
                                        <option value="3">Adult ( > than 35) years</option>
                                    </select>
                                </div>
                            </div>
                            <b>Login Information</b>
                            <hr>
                            <div class="form-group row ">
                                <div class="col-md-12 ">
                                    <input class="form-control form-control" type="email" required placeholder="Email" name="email" id="usernamex">
                                    <div id="output2"></div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="password" required placeholder="Password" name="password" style="border-color: #CCC;">
                                </div>

                                <div class="col-md-6 ">
                                    <input class="form-control form-control" type="password" name="password2" required placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 ">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">I agree to the <a href="terms.php" target="blank">Terms & Condition</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center ">
                                <div class="col-xs-12 p-b-20">
                                    <button class="btn btn-block btn-info" type="submit" name="InitialSignup">Sign Up</button>
                                </div>
                            </div>



                           
                        </form>
                       <div class="form-group m-b-0 m-t-10 ">
                                <div class="col-sm-12 text-center ">
                                    Already have an account? <a data-dismiss="modal" href="login.php" class="text-primary m-l-5 "  data-toggle="modal" data-target="#login"><b>Login</b></a>
                                </div>
                            </div>
                    </div>
      </div>
    
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Edit Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
      <div class="modal-body">
        <div class="card">
            <form method="post" class="form-horizontal contact_form" style="padding: 20px;">
                <div class="form-row">
                    <div class="col-md-6 col-6">
                        <label class="col-md-12">First Name</label>
                        <input type="text" name="firstname" value="<?php echo userName($uid, 'firstname'); ?>" placeholder="First Name" class="form-control">
                    </div>
                    <div class="col-md-6 col-6">
                        <label class="col-md-12">Last Name</label>
                        <input type="text" name="lastname" value="<?php echo userName($uid, 'lastname'); ?>" placeholder="Last Name" class="form-control">
                    </div>
                </div>
                <div class="form-row" style="padding-top:10px;">
                    <div class="col-md-6 col-6">
                        <label class="col-md-12">Category</label>
                        <input type="text" value="<?php echo userName($uid, 'category'); ?>" placeholder="Category" class="form-control" disabled>
                    </div>
                    <div class="col-md-6 col-6">
                        <label class="col-md-12">Phone No</label>
                        <input type="text" name="phone" value="<?php echo userName($uid, 'phone'); ?>" placeholder="Phone" class="form-control">
                    </div>
                </div>

                 <div class="form-row" style="padding-top:10px;">
                    <div class="col-md-6 col-6">
                        <label class="col-md-12">Date Of Birth</label>
                        <input type="text" name="dob" value="<?php echo userName($uid, 'dob'); ?>" placeholder="Date Of Birth" class="form-control">
                    </div>
                    <div class="col-md-6 col-6">
                        <label class="col-md-12">Gender</label>
                        <!-- <input type="text" name="sex" value="<?php echo userName($uid, 'dob'); ?>" placeholder="Gend" class="form-control"> -->
                        <select name="sex" class="form-control">
                          <option value="<?php echo userName($uid, 'sex'); ?>"><?php echo userName($uid, 'sex'); ?></option>
                          <option value="Male">Male</option><option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-row" style="padding-top:10px;">
                    <label for="example-email" class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" value="<?php echo userName($uid, 'email'); ?>" placeholder="Email" class="form-control form-control-line" id="example-email" disabled> </div>
                </div>
                <div class="form-row" style="padding-top:10px;">
                    <div class="col-md-6 col-6">
                        <label class="col-md-12">Country</label>
                        <input type="text" name="country" value="<?php echo userName($uid, 'country'); ?>" placeholder="Country" class="form-control">
                    </div>
                    <div class="col-md-6 col-6 form-group p_star">
                        <label class="">City</label>
                        <input type="text" name="city" value="<?php echo userName($uid, 'city'); ?>" placeholder="City" class="form-control">
                    </div>
                </div>
                <div class="form-row" style="padding-top:10px;">
                    <label for="example-email" class="col-md-12">Address</label>
                    <div class="col-md-12">
                        <input type="text" value="<?php echo userName($uid, 'address'); ?>" placeholder="Email" class="form-control form-control-line" name="address" id="example-email"> </div>
                </div>
                <div class="form-row" style="padding-top:10px;">
                    <div class="col-md-12">
                        <label class="col-md-12">What do you want other to know about you</label>
                        <textarea rows="5" value="<?php echo userName($uid, 'bio'); ?>" name="bio" class="form-control"><?php echo userName($uid, 'bio'); ?></textarea>
                    </div>
                </div>
                <div class="form-row" style="padding-top:10px;">
                    <div class="col-sm-12">
                        <button type="submit" name="updateMyProfile" class="btn btn-block btn-success">Update Profile</button>
                    </div>
                </div>
            </form></div>
        </div>
      </div>
    </div>
  </div>
</div>
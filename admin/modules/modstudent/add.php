 <div class="container">
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

             <div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">New Student</h1>
          </div>
          <!-- /.col-lg-12 -->
       </div>

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "IDNO">Id No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="IDNO" name="IDNO" placeholder=
                            "Student Id" type="Text" value="" required>
                      </div>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "FNAME">Full Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="name" placeholder=
                            "Full name" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "MNAME">Username:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="MNAME" name="username" placeholder=
                            "Username" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="address" placeholder=
                            "Address" type="text" value=""  required>
                      </div>
                    </div>
                  </div>


                   

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SEMESTER">Gender:</label>

                      <div class="col-md-4">
                         <select class="form-control input-sm" name="gender" id="SEMESTER">
                           <option>Male</option>
                         <option>Female</option> 
                        </select>
                      </div>
                    </div>
                  </div>

                  

               



                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Password:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="ADDRESS" name="password" placeholder=
                            "Password" type="password" value=""  required>
                      </div>
                    </div>
                  </div>
                   
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EMAIL">Date of Birth:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="UEMAIL" name="birth_date" placeholder=
                            "Date of Birth" type="date" value="">
                      </div>
                    </div>
                  </div>

                


                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Contact No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="phone" placeholder=
                            "Contact Number" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "RELIGION">School:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="RELIGION" name="school" placeholder=
                            "school" type="TEXT" value="">
                      </div>
                    </div>
                  </div>

                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "EMAILADD">Email Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="EMAILADD" name="email" placeholder=
                            "Example@gmail.com" type="email" value="" required>
                      </div>
                    </div>
                  </div>

 
               <!--    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4" align = "right"for=
                      "image">Upload Image:</label>

                      <div class="col-md-8">
                      <input type="file" name="image" value="" id="image"/>
                      </div>
                    </div>
                  </div>
             -->
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn_kcctc" name="studsave" type="submit" ><strong>Save</strong></button>
                           <a href="index.php" class="btn btn_kcctc" name="back" type="submit"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;List Of Students</a>
                     </div>
                    </div>
                  </div> 
        

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
       
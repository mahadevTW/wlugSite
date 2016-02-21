<?php
include "header.html"
?>
    <html>
    <body>
   <div class="page-header">
        <h1 style= "margin: 2%">Techno-Tweet 2k16</h1>
    </div>

   <div class="panel panel-success">
       <div class="panel-heading">Register For Technotweet..!</div>
        <div class="panel-body" style="padding-right: 10%; padding-bottom: 5%">

            <form class="form-horizontal" role="form" action="register.php" method="post">

           <div class="form-group">
               <label class="control-label col-sm-2" for="pwd">Name:</label>
               <div class="col-sm-10">
                   <input type="text" class="form-control" id="pwd" placeholder="Enter Name" name="name">
               </div>
           </div>

           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Email:</label>
               <div class="col-sm-10">
                   <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
               </div>
           </div>

           <div class="form-group">
               <label class="control-label col-sm-2" for="pwd">College Name:</label>
               <div class="col-sm-10">
                   <input type="text" class="form-control" placeholder="Enter College Name" name="college">
               </div>
           </div>

           <div class="form-group">
                   <label class="control-label col-sm-2" for="pwd">Mobile No:</label>
                   <div class="col-sm-10">
                   <input type="text"  maxlength="10" data-fv-numeric="true" name="mobile" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="Mobile No. " class="form-control" data-fv-field="data[User][mobile]">
                   </div>
           </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Select Workshop Type:</label>
            <div class="col-sm-10">
                <select class="form-control" id="sel1" name="workshoptype">
                    <option value="android">Android</option>
                    <option value="web">Web Development </option>
                </select>
                </div>
        </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Yes, I will carry My lppy</label>
                    <div class="col-sm-10">
                        <input type="checkbox"  name="laptop">
                    </div>
                </div>
   <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
           <button type="submit" class="btn btn-default">Submit</button>
       </div>
   </div>

   </form>
   </div>
   </div>
    </body>
    </html>
<?php
include "footer.html"
?>
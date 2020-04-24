<form action="processForm.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="smcol-12 required">
            <label>Full Name<sup>&#42;</sup></label>
            <input type="text" name="fullName" value="">
                <div class="error">
                    <p>Please fill your first name</p>
                </div>
        </div>
        <div class="smcol-12 required">
            <label>Email<sup>&#42;</sup></label>
            <input type="text" name="email" value="">  
            <div class="error">
                <p>Please fill your email address</p>
            </div>
        </div>
        <div class="smcol-12 lgcol-12 required">
            <label class="textarea">Tell us why you would like to work for us.<sup>&#42;</sup></label>
            <textarea name="message" value=""></textarea>
            <div class="error">
                <p>Please put in your message</p>
            </div>
        </div>
        <div class="smcol-12 required">
            <label>Drop a link to your portfolio<sup>&#42;</sup></label>
            <input type="text" name="link" value="">
            
            <div class="error">
                <p>Please put in your portfolio</p>
            </div>
        </div>

        <div class="smcol-12 lgcol-6">
            <label>Upload your resume<sup>&#42;</sup></label>
            <input type="file" name="resume" placeholder="">
            <div class="error">
                <p>Please upload your resume</p>
            </div>
            <small class="form-text text-muted">Please upload .jpg, .png or .gif file. Maximum file size: 1MB.</small>
        </div>
        
        <div class="cta2">
            <input type="submit" value="Submit">
        </div>
    </div>

</form>
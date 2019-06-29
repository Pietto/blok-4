<form action="result.php" method="post" id="form-box" class="p-2">
    <div class="form-group input-group">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="firstName" placeholder="First name" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="lastName" placeholder="Last name" required>
            </div>
        </div>
    </div>
    <div class="form-group input-group">
        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
    </div>
    <div class="form-group input-group">
        <input type="text" name="phone" class="form-control" placeholder="Phone number">
    </div>
    <div class="form-group input-group">
        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
    </div>
    <div class="form-group input-group">
        <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4"
            required></textarea>
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
    </div>
</form>
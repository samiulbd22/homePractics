<?php include 'header.php';?>
<div class="content">
    <form action="action.php" method="POST">
        <div class="form-header">
            <h1>Please Fill up the form</h1>
        </div>
        <div class="form-body">
            <div class="body-field">
                <label class="label" for="f1">First Name</label>
                <input type="text" class="field" id="f1" name="first_name">
            </div>
            <div class="body-field">
                <label class="label" for="f3">Middle Name</label>
                <input type="text" class="field" id="f3" name="middle_name">
            </div>
            <div class="body-field">
                <label class="label" for="f2">Last Name</label>
                <input type="text" class="field" id="f2" name="last_name">
            </div>
            <div class="body-display">
                <textarea name="" id="" cols="30" rows="10" class="body-display-field" disabled><?php echo isset($result)?$result:"";?></textarea>
            </div>
        </div>
        <div class="form-footer">
            <input type="submit" name="btn" value="Save">
        </div>
    </form>
</div>
<?php include 'footer.php';?>

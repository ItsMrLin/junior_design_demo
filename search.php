<h1>
    Hi, <?php echo $_POST['name'];?>!
</h1>

<h4>
    Tell us who you want to practice interview with?
</h4>

<form action="search-redirect.php" method="get" role="form">
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" name="company">
    </div>
  <div class="form-group">
    <label for="job">Position:</label>
    <select id="job" class="selectpicker" name="user_job">
      <optgroup label="Web">
        <option value="frontend_developer">Front-End Developer</option>
        <option value="php_developor">PHP Developer</option>
        <option value="python_developer">Python Developer</option>
        <option value="rails_developer"> Rails Developer</option>
        <option value="web_designer">Web Designer</option>
        <option value="WordPress_developer">WordPress Developer</option>
      </optgroup>
      <optgroup label="Mobile">
        <option value="Android_developer">Androild Developer</option>
        <option value="iOS_developer">iOS Developer</option>
        <option value="mobile_designer">Mobile Designer</option>
      </optgroup>
      <optgroup label="Business">
        <option value="business_owner">Business Owner</option>
        <option value="freelancer">Freelancer</option>
      </optgroup>
      <optgroup label="Other">
        <option value="secretary">Secretary</option>
        <option value="maintenance">Maintenance</option>
      </optgroup>
    </select>
  </div>
  <div class="form-group">
    <label for="date">Date:</label>
    <input type="date" name="date">
  </div>
  <div class="form-group">
    <label for="start-time">From:</label>
    <input type="time" name="start-time">
    <label for="end-time">To:</label>
    <input type="time" name="end-time">
  </div>
  <div class="form-group">
    
  </div>
  <button type="submit" class="btn btn-default">Search</button>
</form>

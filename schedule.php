<h1>
    Hi, <?php echo $_POST['name'];?>!
</h1>

<div>
    Please set your availability.
    <button class="btn btn-default schedule-save-btn" style="float:right; margin-bottom: 10px;" >Save</button>
</div>
<div class="calendar">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>4/19<br>Sun</th>
                <th>4/20<br>Mon</th>
                <th>4/21<br>Tue</th>
                <th>4/22<br>Wed</th>
                <th>4/23<br>Thu</th>
                <th>4/24<br>Fri</th>
                <th>4/25<br>Sat</th>
            </tr>
        </thead> 
        <tbody>
            <tr><td>9:00am</td><td></td><td></td><td></td><td></td><td class="set-time"></td><td></td><td></td></tr>
            <tr><td>9:30am</td><td></td><td></td><td></td><td></td><td class="set-time"></td><td></td><td></td></tr>
            <tr><td>10:00am</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>10:30am</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>11:00am</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>11:30am</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>12:00pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>12:30pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>1:00pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>1:30pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>2:00pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>2:30pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>3:00pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>3:30pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>4:00pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>4:30pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>5:00pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
            <tr><td>5:30pm</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
  
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $( document ).ready(function() {
        $(".schedule-save-btn").click(function(){
            localStorage.setItem("saved-calendar", true);
            alert("Sucessfully Saved Your Schedule");
        });
        if (localStorage.getItem("saved-calendar")) {
            $(".set-time").addClass("selected-box");
        }
        
    });

    d3.selectAll("td")
        .on("click", function(){
            d3.select(this)
                .classed("selected-box", d3.select(this).classed("selected-box")^true);
        });
</script>

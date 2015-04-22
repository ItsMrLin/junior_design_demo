<div class="result_content">
    <h4>
        This is what we've found for you.
    </h4>

    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Position</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jerry Lin</td>
                    <td>eBay Inc.</td>
                    <td>Software Engineer</td>
                    <td>04/23/2015</td>
                    <td>9:00 am - 10:00 am</td>
                    <td><button class="btn btn-default Pick-Interview-Button">Select</button></td>
                </tr>
            </tbody>
    </table>
</div>

<script type="text/javascript">
    if (!localStorage.getItem("saved-calendar")) {
        $(".result_content").html("<h4>Sorry, we didn't find any match for you.</h4>");
    }

    $(".Pick-Interview-Button").click(function(){
        localStorage.setItem("picked-interview", true);
        window.location.replace("interviewee.html?page=feed");
    });
</script>
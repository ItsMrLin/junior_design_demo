<h1>
    Hi, <?php echo $_POST['name'];?>!
</h1>
<div class="main-feed">
    Nothing much is going on.
</div>

<script type="text/javascript">
    if (localStorage.getItem("picked-interview")) {
        $(".main-feed").html("You have an upcoming interview at 9:00. <a href='interview-page.html'>More info.</a>");
    }
</script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

body {
    margin-top: 2%
}

</style>
<script>
$(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
});
</script>
<div class="container">
	<div class="row">
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
		<div class="col-md-9">
    	 <table class="table table-list-search">
	      <thead>
                        <tr>
                            <th>NUM</th>
                            <th>Title</th>
                            <th>Writer</th>
                            <th>Date</th>
                        </tr>
                    </thead>

			<?php
			$conn=mysqli_connect('localhost', 'song', '0507','BoB9DB');
			$result=mysqli_query($conn,"select BOARD_NUM,BOARD_TITLE,USER_INFO.USER_NAME,BOARD_DATE from BOARD_INFO,USER_INFO where USER_INFO.USER_NUM = BOARD_INFO.USER_NUM;");
			if ($result) {
			while($row=mysqli_fetch_array($result)){		

			echo "<tbody>";
			    echo "<tr onClick=\"location.href='board_detail.php?BOARD_NUM=".$row['BOARD_NUM']."'\">";
                              echo "<td>".$row['BOARD_NUM']."</td>";
                              echo "<td>".$row['BOARD_TITLE']."</td>";
                              echo "<td>".$row['USER_NAME']."</td>";
                              echo "<td>".$row['BOARD_DATE']."</td>";

			echo "</tr>";
			echo "</tbody>";
			  }
			  $result -> free_result();

			}
			?>
                    

                </table>   
		</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onClick="location.href='board_write.php'" class="btn btn-black">write</button>
	</div>
</div>

